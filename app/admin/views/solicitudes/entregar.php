<link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/trumbowyg/dist/ui/trumbowyg.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
<script src="<?php echo baseUrl ?>assets/bower/trumbowyg/dist/trumbowyg.min.js"></script>
<script language="javascript">
$(document).ready(function(){
$("#municipioSelect").change(function () {
$("#municipioSelect option:selected").each(function () {
//organismo_id = $(this).val();
//id1 = $(this).val();
var idMunicipio = $(this).val();
//alert(tipo_id);
$.get("<?php echo baseUrl ?>admin/solicitantes/parroquias", { idMunicipio:idMunicipio }, function(data){
$("#ParroquiaSelect").html(data);
});
});
})
});
</script>
<script language="javascript">
$(document).ready(function(){
var inputEmail = $("#inputEmail").val();
//alert(tipo_id);
$.get("<?php echo baseUrl ?>admin/solicitantes/parroquias", { idMunicipio:idMunicipio }, function(data){
$("#ParroquiaSelect").html(data);
});
});
$('#IngresarSolicitante').click(function () {
$(":input").each(function(){
this.value = this.value.toUpperCase();
});
});
function enviar(argument) {
var email = $("#inputEmail").val();
//alert(inputEmail);
$.get("<?php echo baseUrl ?>admin/solicitantes/verificar_email", { email:email }, function(existe){
if(existe == true) {
swal(
'Error...',
'El email ya esta registrado por solicitante.',
'error'
)
}
else {
$("#IngresarSolicitante").submit();
}
});
}
</script>
<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-folder fa-2x"></i> SOLICITUD NÚMERO:<?php echo $solicitud->cod ?></h3>
  </div>
  <br>
  <div class="panel-body">
    <form action="<?php echo baseUrl ?>admin/solicitudes/entregar_proceso" method="POST">
      <?php echo Token::field() ?>
      <input type="hidden" name="solicitud_id" value="<?php echo $solicitud_id ?>">
      <div class="row">
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" type="text" name="responsable" placeholder="Responsable" required/>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <input class="datepicker" type="text" name="fecha_entrega" placeholder="Fecha entrega" required/>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" type="text" name="lugar" placeholder="Lugar" required/>
          </div>
        </div>
        <div class="col-lg-12">
          <textarea name="observacion" class="editor">
          OBERSVACIONES
          </textarea>
        </div>
      </div>
      <br>
      <button onclick="enviar()" id="botonSubmit" type="submit" class="btn btn-lg btn-primary pull-right"><i class="fa fa-check"></i><i class="fa fa-share-square"></i> CONFIRMAR ENTREGA</button>
    </form>
  </div>
</div>
<script>
$('.datepicker').pickadate({
// Escape any “rule” characters with an exclamation mark (!).
format: 'dd/mm/yyyy',
formatSubmit: 'dd/mm/yyyy',
hiddenPrefix: 'prefix__',
hiddenSuffix: '__suffix'
})
</script>
<script>
$('.editor').trumbowyg({
lang: 'es'
});
</script>