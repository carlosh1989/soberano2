<?php
namespace App\admin\controllers;
use App\Organismo;
use App\Usuario;
use Carbon\Carbon;

class Cuentas
{
    function __construct()
    {
        Role('admin');
    }

    public function index()
    {
        $usuarios = Usuario::orderBy('id', 'DESC')->get();
        View(compact('usuarios'));
    }

    public function create()
    {
        $organismos = Organismo::all();
        View(compact('organismos'));
    }

    public function store()
    {
        extract($_POST);

        //Arr($_POST);

        $clave = password_hash($password, PASSWORD_DEFAULT);

        $usuario = new Usuario;
        $usuario->name = $name;
        $usuario->email = $email;
        $usuario->password = $clave;
        $usuario->role = $role;
        $usuario->organismo_id = $organismo_id;
        $usuario->created_at = Carbon::now();
        $usuario->updated_at = Carbon::now();
        
        if($usuario->save())
        {
            Success('cuentas','La cuenta fue creada');
        }
        else
        {
            Error('cuentas/create','Error al crear la cuenta.');
        }
    }

    public function show($id)
    {
        View(compact('id'));
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