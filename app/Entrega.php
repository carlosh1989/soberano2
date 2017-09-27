<?php 
namespace App;
use \Illuminate\Database\Eloquent\Model;
 
class Entrega extends Model {
    protected $table = 'solicitudes_entregas';
	public $timestamps = false;
    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];
}

