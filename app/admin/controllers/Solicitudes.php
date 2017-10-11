<?php
namespace App\admin\controllers;

use App\Beneficiario;
use App\Carga;
use App\Categoria;
use App\DetalleSolicitud;
use App\Entrega;
use App\EntregaImagen;
use App\Jefe;
use App\Organismo;
use App\Paso;
use App\Requerimientos;
use App\Solicitante;
use App\Solicitud;
use App\Tipo;
use Carbon\Carbon;
use System\tools\rounting\Redirect;
use System\tools\session\Session;

class Solicitudes
{
    function __construct()
    {
        Role('admin');
    }

    public function index()
    {
        extract($_GET);
        $usuario = Session::get('current_user');
        $organismo_id = $usuario['organismo_id']; 

        if(isset($municipio_id) and $municipio_id and isset($parroquia_id) and $parroquia_id)
        {
            if(isset($tipo) and $tipo)
            {
                $solicitudes = Solicitud::orderBy('id', 'DESC')
                ->where('tipo_solicitud_id',$tipo)
                ->where('municipio_id',$municipio_id)
                ->where('parroquia_id',$parroquia_id)
                ->where('organismo_id',$organismo_id)
                ->where('estatus',1)
                ->get();
                $tipo_seleccion = Tipo::find($tipo);
                $municipio_seleccion = $municipio_id;
                $parroquia_seleccion = $parroquia_id;
            }
            else
            {
                $solicitudes = Solicitud::orderBy('id', 'DESC')
                ->where('municipio_id',$municipio_id)
                ->where('parroquia_id',$parroquia_id)
                ->where('organismo_id',$organismo_id)
                ->where('estatus',1)
                ->get();
                $tipo_seleccion = "";
                $municipio_seleccion = $municipio_id;
                $parroquia_seleccion = $parroquia_id;
            }
        }
        else
        {
            if(isset($tipo) and $tipo)
            {
                $solicitudes = Solicitud::orderBy('id', 'DESC')
                ->where('organismo_id',$organismo_id)
                ->where('estatus',1)
                ->get();
                $tipo_seleccion = Tipo::find($tipo);
                $municipio_seleccion = "";
                $parroquia_seleccion = "";
            }
            else
            {
                $solicitudes = Solicitud::orderBy('id', 'DESC')
                ->where('organismo_id',$organismo_id)
                ->where('estatus',1)
                ->get();
                $tipo_seleccion = "";
                $municipio_seleccion = "";
                $parroquia_seleccion = "";
            }
        }

        
        $tipos = Tipo::all();
        View(compact(
            'solicitudes','tipos','tipo_seleccion',
            'municipio_seleccion','parroquia_seleccion'
        ));
    }

    public function create()
    {
        extract($_GET);

        if(isset($beneficiario_cedula) and $beneficiario_cedula) 
        {
            $jefe = Jefe::where('cedula',$beneficiario_cedula)->first();
            $carga = Carga::where('cedula',$beneficiario_cedula)->first();

            if($jefe)
            {
                $beneficiario['fecha_nacimiento'] = $jefe->fecha_nacimiento;
                $beneficiario['nacionalidad'] = $jefe->tipo;   
                $beneficiario['cedula']  = $beneficiario_cedula;            
                $beneficiario['nombre_apellido'] = $jefe->nombre_apellido; 
                $beneficiario = (object) $beneficiario;
            }
            else
            {
                if($carga)
                {
                    $beneficiario['fecha_nacimiento'] = $carga->fecha_nacimiento;
                    $beneficiario['nacionalidad'] = $carga->nac;   
                    $beneficiario['cedula']  = $beneficiario_cedula;            
                    $beneficiario['nombre_apellido'] = $carga->nombre_y_apellido; 
                    $beneficiario = (object) $beneficiario;
                }
                else
                {
                    $beneficiario['cedula']  = $beneficiario_cedula; 
                    $beneficiario = (object) $beneficiario;
                }
            }
        }

        $solicitante = Solicitante::find(Uri(5));
        $tipos = Tipo::all();
        View(compact('solicitante','tipos','requerimientos','beneficiario'));
    }

    public function documentos()
    {
        extract($_POST);
        list($organismoid, $tipo_solicitud_id) = explode('-', $tipo_solicitud
            );
        $data['organismo_id'] = $organismo_id;
        $data['solicitante_id'] = $solicitante_id;
        $data['tipo_solicitud_id'] = $tipo_solicitud_id;
        $data['requerimiento_categoria_id'] = $requerimiento_categoria_id;
        $data['observacion_solicitud'] = $observacion_solicitud;
        $data['monto_solicitado'] = $monto_solicitado;

        if(isset($beneficiario_cedula) and $beneficiario_cedula)
        {
            $data['beneficiario_cedula'] = $beneficiario_cedula;
            $data['beneficiario_nombre_apellido'] = $beneficiario_nombre_apellido;
            $data['beneficiario_fecha_nacimiento'] = $beneficiario_fecha_nacimiento;
        }
        else
        {
            $data['beneficiario_cedula'] = "";
            $data['beneficiario_nombre_apellido'] = "";
            $data['beneficiario_fecha_nacimiento'] = "";
        }

        $data['requerimientos'] = Requerimientos::where('tipo_solicitud_id',$tipo_solicitud_id)->get();
        //Arr($requerimientos);
        View($data);
    }

    public function combo()
    {
        extract($_GET);
        $organismos = Organismo::where('id',$organismo_id)->get();
        //var_dump($parroquias);
        echo "<option value=''>ORGANISMO</option>";
        echo "<option value=''></option>";
        foreach ($organismos as $key => $organismo) {
            echo '<option value="'.$organismo->id.'">'.$organismo->tipo.'</option>';
        }
    }

    public function categorias()
    {
        extract($_GET);
        $categorias = Categoria::where('tipo_solicitud_id',$tipo_id)->get();
        //var_dump($parroquias);
        echo "<option value=''>CATEGORIAS</option>";
        echo "<option value=''></option>";
        echo "<option value='0'>NINGUNA</option>";
        foreach ($categorias as $key => $categoria) {
            echo '<option value="'.$categoria->id.'">'.$categoria->nombre.'</option>';
        }
    }

    public function estatus()
    {
        extract($_GET);
        if(!isset($observacion))
        {
            //$data['observacion'] = $observacion;
            $observacion ="";
        }
        //$data['solicitud_id'] = $solicitud_id;
        //$data['estatus'] = $estatus;

        //INGRESAR LA FECHA DEL ESTATUS DE CERRADO
        $solicitud = Solicitud::find($solicitud_id);
        $solicitud->estatus = $estatus;
        $solicitud->fecha_hora_cerrado = Carbon::now();
        $solicitud->observacion = $observacion;
        $solicitud->save();
        //Arr($solicitud);

        echo json_encode($data);
    }

    public function monto()
    {
        extract($_GET);
        View(compact('solicitud_id'));
        //Arr($_GET);
    }

    public function monto_aprobado()
    {
        extract($_POST);
        $solicitud = Solicitud::find($solicitud_id);
        $solicitud->estatus = 2;
        $solicitud->fecha_hora_cerrado = Carbon::now();
        $solicitud->monto_aprobado = $monto_aprobado;

        if($solicitud->save())
        {
            Success('consultas/aprobadas/','La solicitud fue aprobada..!');
        }
        else
        {
            Error('consultas/aprobadas/','Error al aprobar solicitud!');
        }
    }

    public function entregar()
    {
        extract($_GET);
        $solicitud = Solicitud::find($solicitud_id);
        View(compact('solicitud_id','solicitud'));
    }

    public function entregar_proceso()
    {
        extract($_POST);
        //Arr($_POST);
        $entrega = new Entrega;
        $entrega->solicitud_id = $solicitud_id;
        $entrega->responsable = $responsable;
        $entrega->lugar = $lugar;
        $entrega->fecha_entrega = $fecha_entrega;
        $entrega->observacion = $observacion; 
        $entrega->portada = $portada;

        $solicitud = Solicitud::find($solicitud_id);
        $solicitud->estatus = 4;
        $solicitud->fecha_hora_entregado = Carbon::now();

        if($entrega->save() and $solicitud->save())
        {
            if($portada ==  1 AND $imagenEntrega)
            {
                \Cloudinary::config(array( 
                "cloud_name" => "tuconsultaenlinea", 
                "api_key" => "969938491626729", 
                "api_secret" => "J2mGOPnz9A1dl9kubb7Qyh9h_MI" 
                ));

                $url = $imagenEntrega.'';
                $imagen_original = \Cloudinary\Uploader::upload('https://process.filestackapi.com/AhTgLagciQByzXpFGRI0Az/compress/'.$imagenEntrega);
                $imagen_grande = \Cloudinary\Uploader::upload('https://process.filestackapi.com/AhTgLagciQByzXpFGRI0Az/resize=w:800/quality=value:85/compress/'.$imagenEntrega);
                $imagen_medio = \Cloudinary\Uploader::upload('https://process.filestackapi.com/AhTgLagciQByzXpFGRI0Az/resize=w:400/quality=value:70/compress/'.$imagenEntrega);
                $imagen_miniatura = \Cloudinary\Uploader::upload('https://process.filestackapi.com/AhTgLagciQByzXpFGRI0Az/resize=w:250/quality=value:70/compress/'.$imagenEntrega);

                $imagen = new EntregaImagen;
                $imagen->solicitudes_entregas_id = $entrega->id;
                $imagen->imagen_original = $imagen_original['url'];
                $imagen->imagen_grande = $imagen_grande['url'];
                $imagen->imagen_medio = $imagen_medio['url'];
                $imagen->imagen_miniatura = $imagen_miniatura['url'];
            }

/*            $imagen = new EntregaImagen;
            $imagen->solicitudes_entregas_id = $entrega->id;
            $imagen->imagen_original = 'https://process.filestackapi.com/AhTgLagciQByzXpFGRI0Az/resize=w:1000/quality=value:70/compress/'.$imagenEntrega;
            $imagen->imagen_grande = 'https://process.filestackapi.com/AhTgLagciQByzXpFGRI0Az/resize=w:800/quality=value:70/compress/'.$imagenEntrega;
            $imagen->imagen_medio = 'https://process.filestackapi.com/AhTgLagciQByzXpFGRI0Az/resize=w:400/quality=value:70/compress/'.$imagenEntrega;
            $imagen->imagen_miniatura = 'https://process.filestackapi.com/AhTgLagciQByzXpFGRI0Az/resize=w:250/quality=value:70/compress/'.$imagenEntrega;
            //return $laboratorio->id;
*/
            if($imagen->save())
            {
                Success('solicitudes/'.$solicitud->id,'Solicitud fue entregada.');
            }
            else
            {
                Error('consultas/aprobadas','Error.');
            }
        }
        else
        {
            Error('consultas/aprobadas','Error.');
        }
    }
 
 
    public function store()
    {
        //Arr($_POST);
        //TABLA SOLICITUDES
        extract($_POST);
        $solicitante = Solicitante::find($solicitante_id);

        $solicitud = new Solicitud;
        $solicitud->cod = 0;
        $solicitud->organismo_id = $organismo_id;
        $solicitud->requerimiento_categoria_id = $requerimiento_categoria_id;
        $solicitud->solicitante_id = $solicitante_id;
        $solicitud->tipo_solicitud_id = $tipo_solicitud_id;
        $solicitud->municipio_id = $solicitante->municipio_id;
        $solicitud->parroquia_id = $solicitante->parroquia_id;
        $solicitud->fecha_hora_registrado = Carbon::now();
        $solicitud->monto_solicitado = $monto_solicitado;
        $solicitud->observacion = $observacion_solicitud;
        $solicitud->fecha_hora_asignado_consignado = Carbon::now();
        $solicitud->estatus = 1;
        $solicitud->save();

        //AGREGANDO BENEFICIARIO DE TENERLO
        if(isset($beneficiario_cedula) and $beneficiario_cedula and $solicitud->id)
        {
            $beneficiario = new Beneficiario;
            $beneficiario->solicitud_id = $solicitud->id;
            $beneficiario->cedula = $beneficiario_cedula;
            $beneficiario->nombre_apellido = $beneficiario_nombre_apellido;
            $beneficiario->fecha_nacimiento = $beneficiario_fecha_nacimiento;
            $beneficiario->save();
        }

        $cod = $solicitud->id.''.date('Y');
        $solicitud->cod = $cod;
        $solicitud->save();

        //tabla pivote de pasos
        $paso = new Paso;
        $paso->solicitud_id = $solicitud->id;
        $paso->paso = 2;
        $paso->eliminar = 0;
        $paso->save();

        if(isset($requerimientos))
        {
            //TABLA DETALLES_SOLICITUD LOS DOCUMENTOS A CONSIGNAR
            foreach ($requerimientos as $key => $r) 
            {
                $detalle = new DetalleSolicitud;
                $detalle->solicitud_id = $solicitud->id;
                //$detalle->tipo_requerimiento_id = $tipo_requerimiento_id;
                $detalle->requerimiento_categoria_id = $solicitud->requerimiento_categoria_id;
                $detalle->requerimiento_id =$r;
                $detalle->consignado = 1;
                $detalle->eliminar = 0;
                $detalle->save();
            }

            //echo $solicitante_id;
            if($solicitud->id and $detalle->id)
            {
                Success('solicitantes/'.$solicitante_id,'La solicitud fue realizada..!');
            }
            else
            {
                Error('solicitantes/'.$solicitante_id,'Error al crear solicitud!');
            }
        }
        else
        {
            //echo $solicitante_id;
            if($solicitud->id)
            {
                Success('solicitantes/'.$solicitante_id,'La solicitud fue realizada..!');
            }
            else
            {
                Error('solicitantes/'.$solicitante_id,'Error al crear solicitud!');
            }
        }

    }

    public function show($id)
    {
        $solicitud = Solicitud::find($id);
        View(compact('solicitud'));
    }

    public function edit($id)
    {
        View(compact('id'));
    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }
}