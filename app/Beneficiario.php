<?php 
namespace App;
use \Illuminate\Database\Eloquent\Model;
 
class Beneficiario extends Model {
    protected $table = 'beneficiarios';
	public $timestamps = false;
    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];

}

