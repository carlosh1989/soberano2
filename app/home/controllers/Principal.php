<?php
namespace App\home\controllers;

use App\Donante;
use App\Entrega;
use App\Laboratorio;
use App\Solicitante;
use App\Solicitud;
use App\home\models\PrincipalModel;
use Controller,View,Token,Session,Arr,Message,Redirect,Permission,Url;

class Principal extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if(Session::isRegistered())
        {
            Redirect::to('auth/login');
        }
        else
        {
            $entregas = Entrega::where('portada',1)->get();
            //Arr($entregas);
            View::ver('home/principal/index',compact('entregas')); 
            //View(compact('entregas')); 
        }
    }

    public function consulta()
    {
        extract($_POST);

        if(isset($cedula) and $cedula and isset($cod) and $cod)
        {
            $solicitante = Solicitante::where('cedula',$cedula)->first();

            if (!$solicitante) 
            {
                Redirect::send('home/principal/consulta','error','Solicitante no registrado en el sistema.');
            } 
            else 
            {
                $solicitud = Solicitud::where('cod',$cod)->first();  

                if(!$solicitud)
                {
                    Redirect::send('home/principal/consulta','error','No existe Solicitud.');
                } 
                else
                {
                    View(compact('solicitud'));    
                }
            }
        }
        else
        {
            $solicitud = "";
            View(compact('solicitud'));
        }
    }
}