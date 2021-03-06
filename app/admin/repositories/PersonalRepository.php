<?php
namespace App\admin\repositories;

use App\Usuario;
use App\banco\Personal as BancoPersonal;
use Eloquent;

class PersonalRepository 
{
    function __construct()
    {
		new Eloquent();
    }

    public function store($data)
    {
        extract($data);

        //INGRESANDO CUENTA PARA ACCEDER
        $cuenta = new Usuario;
        $cuenta->name = $name;
        $cuenta->email = $email;
        $cuenta->role = 'laboratorio';
        $cuenta->password = password_hash($password, PASSWORD_DEFAULT);
        $cuenta->created_at = date('Y-m-d H:i:s');
        $cuenta->updated_at = date('Y-m-d H:i:s');

        if($cuenta->save())
        {
            //INGRESANDO DATOS DE PERSONAL DE LABORATORIO
            $personal = new BancoPersonal;
            $personal->nombre_apellido = $nombre_apellido;
            $personal->usuario_id = $cuenta->id;    
            $personal->nacionalidad = $nacionalidad;
            $personal->cedula = $cedula;
            $personal->fecha_nacimiento = $fecha_nacimiento;
            $personal->telefono_fijo = $telefono_fijo;
            $personal->telefono_celular = $telefono_celular;
            $personal->cargo = $cargo;
            $personal->direccion = $direccion;

            if($personal->save())
            {
                return $cuenta->id;
            }
            else
            {
                return 'Error al ingresar datos de personal de laboratorio.';
            }
        }
        else
        {
            return 'Error al ingresar datos de cuenta.';
        }
    }

    public function show($id)
    {

    }

    public function update($id,$data)
    {

    }

    public function destroy($id)
    {

    }
}