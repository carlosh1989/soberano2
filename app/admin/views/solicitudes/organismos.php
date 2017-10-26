<?php
//SECCIÓN DE CARGA DE LIBRERIAS Y MODELOS
require __DIR__ . '/vendor/autoload.php';
use DB\Eloquent;
use Models\Comercio;
use Models\Parroquia;
use App\Organismo;

new Eloquent();
//\krumo::dump($comercios);
$organismo_id = $_POST['organismo_id'];
$organismos = Organismo::where('organismo_id',$organismo_id)->get();
//var_dump($parroquias);
echo "<option value=''>ORGANISMO</option>";
echo "<optgroup label='-------'></optgroup>";
foreach ($organismos as $key => $organismo) {
	echo '<option value="'.$organismo->id.'">'.$organismo->nombre.'</option>';
}
?>
