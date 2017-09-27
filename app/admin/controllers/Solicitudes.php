<?php
namespace App\admin\controllers;

use App\Categoria;
use App\DetalleSolicitud;
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

        if(isset($tipo) and $tipo)
        {
            $solicitudes = Solicitud::orderBy('id', 'DESC')
            ->where('organismo_id',$organismo_id)
            ->where('estatus',1)
            ->get();
            $tipo_seleccion = Tipo::find($tipo);
        }
        else
        {
            $solicitudes = Solicitud::orderBy('id', 'DESC')
            ->where('organismo_id',$organismo_id)
            ->where('estatus',1)
            ->get();
            $tipo_seleccion = "";
        }
        
        $tipos = Tipo::all();
        View(compact('solicitudes','tipos','tipo_seleccion'));
    }

    public function create()
    {
        $solicitante = Solicitante::find(Uri(5));
        $tipos = Tipo::all();
        View(compact('solicitante','tipos','requerimientos'));
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
        $fecha_hora_entrega
        View(compact(''));
    }

    public function store()
    {
        //Arr($_POST);
        //TABLA SOLICITUDES
        extract($_POST);
        $solicitud = new Solicitud;
        $solicitud->cod = 0;
        $solicitud->organismo_id = $organismo_id;
        $solicitud->requerimiento_categoria_id = $requerimiento_categoria_id;
        $solicitud->solicitante_id = $solicitante_id;
        $solicitud->tipo_solicitud_id = $tipo_solicitud_id;
        $solicitud->fecha_hora_registrado = Carbon::now();
        $solicitud->monto_solicitado = $monto_solicitado;
        $solicitud->observacion = $observacion_solicitud;
        $solicitud->fecha_hora_asignado_consignado = Carbon::now();
        $solicitud->estatus = 1;
        $solicitud->save();

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