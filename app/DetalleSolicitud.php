<?php 
namespace App;
use App\Requerimientos;
use \Illuminate\Database\Eloquent\Model;
 
class DetalleSolicitud extends Model {
    protected $table = 'detalle_solicitud';
	public $timestamps = false;
    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];
    public function requerimiento()
    {
        return $this->hasOne(Requerimientos::class,'id','requerimiento_id');
    }
}

