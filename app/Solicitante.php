<?php 
namespace App;
use App\Solicitud;
use \Illuminate\Database\Eloquent\Model;
 
class Solicitante extends Model {
    protected $table = 'solicitantes';
	public $timestamps = false;
    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];
    public function municipio()
    {
    	return $this->hasOne(Municipio::class,'id','municipio_id');
    }

    public function parroquia()
    {
    	return $this->hasOne(Parroquia::class,'id','parroquia_id');
    }

    public function solicitudes()
    {
        return $this->hasMany(Solicitud::class,'solicitante_id','id')->orderBy('id', 'DESC');
    }

    public function solicitud()
    {
        return $this->hasOne(Solicitud::class,'solicitante_id','id');
    }
}

