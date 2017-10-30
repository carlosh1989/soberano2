<?php 
namespace App;

use App\BancoPersonal;
use App\LaboratorioPersonal;
use App\Organismo;
use \Illuminate\Database\Eloquent\Model;
 
class Usuario extends Model {
    protected $table = 'usuarios';

    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];
	public function banco_personal()
	{
		return $this->hasOne(BancoPersonal::class, 'usuario_id','id');
	}

	public function laboratorio_personal()
	{
		return $this->hasOne(LaboratorioPersonal::class, 'usuario_id','id');
	}

	public function organismo()
	{
		return $this->hasOne(Organismo::class, 'id','id');
	}
}

