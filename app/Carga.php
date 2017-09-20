<?php 
namespace App;
use \Illuminate\Database\Eloquent\Model;
 
class Carga extends Model {
    protected $table = 'registro_estudio_paso_carga_familiar';

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

	public function jefe()
	{
		return $this->belongsTo(Jefe::class, 'cod_cabeza_familia', 'cedula');
	}
}

