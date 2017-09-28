<?php 
namespace App;
use App\EntregaImagen;
use \Illuminate\Database\Eloquent\Model;
 
class Entrega extends Model {
    protected $table = 'solicitudes_entregas';
	public $timestamps = false;
    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];

	public function imagen()
	{
		return $this->hasOne(EntregaImagen::class, 'solicitudes_entregas_id', 'id');
	}
}

