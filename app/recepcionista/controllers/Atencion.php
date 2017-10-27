<?php
namespace App\recepcionista\controllers;
use App\Usuario;
use Controller,View,Token,Session,Arr,Message,Redirect;

class Atencion
{
    function __construct()
    {
        Role('admin');
    }

    public function index()
    {
        $usuarios = Usuario::all();
        $titulo = "NUEVO MODULO";
        //Arr($usuarios);
        View(compact('titulo','usuarios'));
    }

    public function create()
    {
        View();
    }

    public function store()
    {
        extract($_POST);
        //Arr($_POST);
        $usuario = new Usuario;
        $usuario->name = $nombre;
        $usuario->password = "asdsad";
        $usuario->email = "elmorochez@gmail.com";
        $usuario->role = "recepcionista";
        $usuario->organismo_id = 5;
        $usuario->save();
        echo "se guardaron los datos;";
    }

    public function show($id)
    {
        $usuario = Usuario::find($id);
        View(compact('usuario'));
    }

    public function edit($id)
    {
        $usuario = Usuario::find($id);
        //Arr($usuario);
        View(compact('usuario'));
    }

    public function update($id)
    {
        extract($_POST);
        $usuario = Usuario::find($id);
        $usuario->name = $nombre;
        $usuario->email = $email;
        $usuario->save();
        echo "USUARIO ACTUALIZADO";
    }

    public function destroy($id)
    {
        $usuario = Usuario::find($id); 
        $usuario->delete();
        echo "registro eliminado";
    }


    public function lista_clientes()
    {
        View::ver('recepcionista/atencion/lista');
    }

    
}