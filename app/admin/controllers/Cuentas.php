<?php
namespace App\admin\controllers;
use App\Usuario;

class Cuentas
{
    function __construct()
    {
        Role('admin');
    }

    public function index()
    {
        $usuarios = Usuario::all();
        View(compact('usuarios'));
    }

    public function create()
    {
        View();
    }

    public function store()
    {

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