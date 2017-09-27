<?php
namespace App\admin\controllers;

use App\Solicitante;
use App\Solicitud;
use App\Tipo;
use App\admin\models\ConsultasModel;
use Controller,View,Token,Session,Arr,Message,Redirect;

class Consultas extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
		View::ver('admin/consultas/index');
    }

    public function cerradas()
    {
        extract($_GET);
        $usuario = (object) Session::get('current_user');
        $organismo_id = $usuario->organismo_id; 

        if(isset($tipo))
        {
            $solicitudes = Solicitud::where('tipo_solicitud_id',$tipo)
            ->where('estatus','!=',1)
            ->where('organismo_id',$organismo_id)
            ->get();
            $tipo_seleccion = Tipo::find($tipo);
        }
        else
        {
            $solicitudes = Solicitud::where('organismo_id',$organismo_id)
            ->where('estatus','!=',1)
            ->get();            
            $tipo_seleccion = "";
        }
        
        $tipos = Tipo::all();
        View(compact('solicitudes','tipos','tipo_seleccion'));
    }

    public function aprobadas()
    {
        extract($_GET);
        $usuario = (object) Session::get('current_user');
        $organismo_id = $usuario->organismo_id; 

        if(isset($tipo))
        {
            $solicitudes = Solicitud::orderBy('id', 'DESC')
            ->where('tipo_solicitud_id',$tipo)
            ->where('estatus',2)
            ->where('organismo_id',$organismo_id)
            ->get();
            $tipo_seleccion = Tipo::find($tipo);
        }
        else
        {
            $solicitudes = Solicitud::orderBy('id', 'DESC')
            ->where('organismo_id',$organismo_id)
            ->where('estatus',2)
            ->get();
            $tipo_seleccion = "";
        }
        
        $tipos = Tipo::all();
        View(compact('solicitudes','tipos','tipo_seleccion'));
    }

    public function rechazadas()
    {
        extract($_GET);
        $usuario = (object) Session::get('current_user');
        $organismo_id = $usuario->organismo_id; 

        if(isset($tipo))
        {
            $solicitudes = Solicitud::orderBy('id', 'DESC')
            ->where('tipo_solicitud_id',$tipo)
            ->where('organismo_id',$organismo_id)
            ->where('estatus',3)
            ->get();
        }
        else
        {
            $solicitudes = Solicitud::orderBy('id', 'DESC')
            ->where('organismo_id',$organismo_id)
            ->where('estatus',3)
            ->get();
        }
        
        $tipos = Tipo::all();
        View(compact('solicitudes','tipos','tipo_seleccion'));
    }

    public function entregadas()
    {
        extract($_GET);
        $usuario = (object) Session::get('current_user');
        $organismo_id = $usuario->organismo_id; 

        if(isset($tipo))
        {
            $solicitudes = Solicitud::orderBy('id', 'DESC')
            ->where('tipo_solicitud_id',$tipo)
            ->where('organismo_id',$organismo_id)
            ->where('estatus',4)
            ->get();
        }
        else
        {
            $solicitudes = Solicitud::orderBy('id', 'DESC')
            ->where('organismo_id',$organismo_id)
            ->where('estatus',4)
            ->get();
        }
        
        $tipos = Tipo::all();
        View(compact('solicitudes','tipos','tipo_seleccion'));
    }

    public function solicitante()
    {
        extract($_GET);

        if(isset($cedula))
        {
            $solicitante = Solicitante::where('cedula',$cedula)->first();

            if($solicitante)
            {
                Success('solicitantes/'.$solicitante->id,'Solicitante encontrado.');
            }
            else
            {
                Redirect::to('admin/consultas/solicitante/?noEncontrado='.$cedula);
            }
        }
        else
        {
            $cedula="";
        }

        $solicitantes = Solicitante::all();
        View(compact('solicitantes','noEncontrado','cedula'));
    }

    public function solicitante_ingresar()
    {
        extract($_GET);
        View(compact('cedula'));
    }

    public function solicitante_ingresar_proceso()
    {
        extract($_POST);
        Arr($_POST);
    }

    public function solicitud()
    {
        extract($_GET);

        if(isset($cod))
        {
            $solicitud = Solicitud::where('cod',$cod)->first();

            if($solicitud)
            {
                Success('solicitudes/'.$solicitud->id,'Solicitud encontrada.');
            }
            else
            {
                Error('consultas/solicitud','Solicitud no encontrada.');
            }
        }
        else
        {
            $solicitudes = Solicitud::all();
            View(compact('solicitudes'));
        }
    }
}