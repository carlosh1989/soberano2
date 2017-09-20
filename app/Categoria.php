<?php 
namespace App;
use \Illuminate\Database\Eloquent\Model;
 
class Categoria extends Model {
    protected $table = 'requerimientos_categorias';
	public $timestamps = false;
    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];
}

