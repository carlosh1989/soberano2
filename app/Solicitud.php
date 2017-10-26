<?php 
namespace App;
use App\Categoria;
use App\DetalleSolicitud;
use App\Entrega;
use App\Organismo;
use App\Paso;
use App\Solicitante;
use App\Tipo;
use \Illuminate\Database\Eloquent\Model;
 
class Solicitud extends Model {
    protected $table = 'solicitudes';
	public $timestamps = false;
    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];
	public function solicitante()
	{
		return $this->belongsTo(Solicitante::class, 'solicitante_id', 'id');
	}

	public function tipo_solicitud()
	{
		return $this->belongsTo(Tipo::class, 'tipo_solicitud_id', 'id');
	}

	public function requerimiento_categoria()
	{
		return $this->belongsTo(Categoria::class, 'requerimiento_categoria_id', 'id');
	}

	public function organismo()
	{
		return $this->belongsTo(Organismo::class, 'organismo_id', 'id');
	}

    public function documentos_consignados()
    {
        return $this->hasMany(DetalleSolicitud::class,'solicitud_id','id');
    }

	public function Pasos()
	{
		return $this->hasOne(Paso::class, 'solicitud_id', 'id');
	}

	public function datos_entrega()
	{
		return $this->hasOne(Entrega::class, 'solicitud_id', 'id');
	}

	public function beneficiario()
	{
		return $this->hasOne(Beneficiario::class, 'solicitud_id', 'id');
	}
}

