<?php 
namespace App;
use \Illuminate\Database\Eloquent\Model;
 
class Jefe extends Model {
    protected $table = 'registro_estudio_datos_del_encuestado';

    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];
    public function municipio()
    {
    	return $this->hasOne(Municipio::class,'id','cod_municipio');
    }

    public function parroquia()
    {
    	return $this->hasOne(Parroquia::class,'id','cod_parroquia');
    }
}

