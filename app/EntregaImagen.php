<?php 
namespace App;
use \Illuminate\Database\Eloquent\Model;
 
class EntregaImagen extends Model {
    protected $table = 'solicitudes_entregas_imagenes';
	public $timestamps = false;
    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];

}

