<?php
namespace App\admin\controllers;

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
        View(compact('solicitudes','tipos'));
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
            $solicitudes = Solicitud::where('tipo_solicitud_id',$tipo)
            ->where('estatus',3)
            ->where('organismo_id',$organismo_id)
            ->get();
        }
        else
        {
            $solicitudes = Solicitud::where('organismo_id',$organismo_id)
            ->where('estatus',3)
            ->get();
        }
        
        $tipos = Tipo::all();
        View(compact('solicitudes','tipos','tipo_seleccion'));
    }
}