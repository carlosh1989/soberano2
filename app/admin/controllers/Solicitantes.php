<?php
namespace App\admin\controllers;

use App\Carga;
use App\Jefe;
use App\Parroquia;
use App\Solicitante;
use Carbon\Carbon;
use System\tools\rounting\Redirect;

class Solicitantes
{
    function __construct()
    {
        Role('admin');
    }

    public function index()
    {
        $solicitantes = Solicitante::all();
        View(compact('solicitantes'));
    }

    public function parroquias()
    {
        extract($_GET);
        $parroquias = Parroquia::where('municipio_id',$idMunicipio)->get();
        //var_dump($parroquias);
        echo "<option value=''>PARROQUIA</option>";
        echo "<option value=''></option>";
        foreach ($parroquias as $key => $parroquia) {
            echo '<option value="'.$parroquia->id.'">'.$parroquia->nombre.'</option>';
        } 
    }

    public function verificar_email()
    {
        extract($_GET);

        if($email)
        {
            $solicitante = Solicitante::where('email',$email)->first();
            
            if(!empty($solicitante))
            {
                $existe = 1;
            }
            else
            {
                $existe = 0;
            }
        }
        else
        {
            $existe = 0;
        }
    
        echo json_encode($existe);
    }

    public function create()
    {
        extract($_POST);

        if(isset($cedula))
        {
            $solicitante = Solicitante::where('cedula',$cedula)->first();

            if(!$solicitante)
            {
                $jefe = Jefe::where('cedula',$cedula)->first();
                $carga = Carga::where('cedula',$cedula)->first();

                if($jefe)
                {
                    $solicitante['fecha_hora_registro'] = Carbon::now();
                    $solicitante['fecha_nacimiento'] = $jefe->fecha_nacimiento;
                    $solicitante['nacionalidad'] = $jefe->tipo;   
                    $solicitante['cedula']  = $cedula;            
                    $solicitante['nombre_apellido'] = $jefe->nombre_apellido; 
                    $solicitante['municipio'] = $jefe->municipio->id;
                    $solicitante['parroquia'] = $jefe->parroquia->id;
                    $solicitante['urbanizacion_barrio'] = $jefe->sector;
                    $solicitante['avenida_calle'] = $jefe->calle_avenida;
                    $solicitante['casa_edificio_apartamento'] = $jefe->casa_edif_apto;
                    $solicitante = (object) $solicitante;
                    View(compact('solicitante'));
                }
                else
                {
                    if($carga)
                    {
                        $solicitante['fecha_hora_registro'] = Carbon::now();
                        $solicitante['fecha_nacimiento'] = $carga->fecha_nacimiento;
                        $solicitante['nacionalidad'] = $carga->nac;   
                        $solicitante['cedula']  = $cedula;            
                        $solicitante['nombre_apellido'] = $carga->nombre_y_apellido; 
                        $solicitante['municipio'] = $carga->municipio->id;
                        $solicitante['parroquia'] = $carga->parroquia->id;
                        $solicitante['urbanizacion_barrio'] = $carga->jefe->sector;
                        $solicitante['avenida_calle'] = $carga->jefe->calle_avenida;
                        $solicitante['casa_edificio_apartamento'] = $carga->jefe->casa_edif_apto;
                        $solicitante = (object) $solicitante;
                        View(compact('solicitante'));
                    }
                    else
                    {
                        $solicitante['fecha_hora_registro'] = Carbon::now();
                        $solicitante['cedula']  = $cedula; 
                        $solicitante = (object) $solicitante;
                        View(compact('solicitante'));
                    }
                }
            }
            else
            {
                Redirect::to('admin/solicitantes/'.$solicitante->id);
            }
        }
        else
        {
            Error('Solicitantes','No ingreso cedula');
        }

        //Arr($solicitante);

    }

    public function store()
    {
        //Arr($_POST);
        extract($_POST);
        extract($_GET);

        list($fecha_registro,$hora_registro) = explode(' ', $fecha_hora_registro);
        $solicitante = new Solicitante;
        $solicitante->nacionalidad = $nacionalidad;
        $solicitante->nombre_apellido = $nombre_apellido;
        $solicitante->fecha_nacimiento = $fecha_nacimiento;
        $solicitante->fecha_registro = $fecha_registro;
        $solicitante->hora_registro = $hora_registro;
        $solicitante->municipio_id = $municipio_id;
        $solicitante->parroquia_id = $parroquia_id;
        $solicitante->telefono1 = $telefono1;
        $solicitante->telefono2 = $telefono2;
        $solicitante->urbanizacion_barrio = $urbanizacion_barrio;
        $solicitante->avenida_calle = $avenida_calle;
        $solicitante->casa_edificio_apartamento = $casa_edificio_apartamento;
        $solicitante->email = $email;
        $solicitante->cedula = $cedula;
        $solicitante->eliminar = 0;

        if($solicitante->save())
        {
            Success('solicitantes/'.$solicitante->id,'El registro fue guardado.');
        }
        else
        {
            Error('solicitantes/','Error al ingresar solicitante.');
        }
    }

    public function show($id)
    {
        $solicitante = Solicitante::find($id);
        View(compact('solicitante'));
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