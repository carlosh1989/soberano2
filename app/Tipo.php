<?php 
namespace App;
use App\Requerimientos;
use \Illuminate\Database\Eloquent\Model;
 
class Tipo extends Model {
    protected $table = 'tipo_solicitud';
	public $timestamps = false;
    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];

    public function requerimientos()
    {
        return $this->hasMany(Requerimientos::class,'tipo_solicitud_id','id');
    }
}

