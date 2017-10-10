<link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/trumbowyg/dist/ui/trumbowyg.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
<script src="<?php echo baseUrl ?>assets/bower/trumbowyg/dist/trumbowyg.min.js"></script>
<script language="javascript">
$(document).ready(function(){
$('.monto').maskMoney({prefix:'Bs. ', allowNegative: true, thousands:'.', decimal:',', affixesStay: true});
$("#TiposSelect").change(function () {
$("#TiposSelect option:selected").each(function () {
//organismo_id = $(this).val();
//id1 = $(this).val();
var idAll = $(this).val();
var parts = idAll.split(/\s*-\s*/);
var organismo_id = parts[0];
var tipo_id = parts[1];
if (tipo_id==1)
{
//alert(organismo_id);
$("#monto").prop('required',true);
$("#monto").css("display", "block");
$("#monto").addClass( "animated fadeIn" );
}
else
{
$("#monto").prop('required',false);
$("#monto").css("display", "none");
$("#monto").removeClass( "animated fadeIn" );
//alert('otras');
}
//alert(tipo_id);
$.get("<?php echo baseUrl ?>admin/solicitudes/combo", { organismo_id:organismo_id }, function(data){
$("#OrganismosSelect").html(data);
});
$.get("<?php echo baseUrl ?>admin/solicitudes/categorias", { tipo_id:tipo_id }, function(data){
$("#CategoriasSelect").html(data);
});
});
})
});
$(document).ready(function(){
$('.monto').maskMoney({prefix:'Bs. ', allowNegative: true, thousands:'.', decimal:',', affixesStay: true});
$("#preguntaBeneficiario").change(function () {
$("#preguntaBeneficiario option:selected").each(function () {
//organismo_id = $(this).val();
//id1 = $(this).val();
var pregunta_beneficiario = $(this).val();
if (pregunta_beneficiario==1)
{
//alert(organismo_id);
$("#cedulaBeneficiario").prop('required',true);
$("#cedulaBeneficiario").css("display", "block");
$("#cedulaBeneficiario").addClass( "animated fadeIn" );
}
else
{
$("#cedulaBeneficiario").prop('required',false);
$("#cedulaBeneficiario").css("display", "none");
$("#cedulaBeneficiario").removeClass( "animated fadeIn" );
//alert('otras');
}
});
})
});
</script>
<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-user-plus fa-2x"></i> INGRESAR SOLICITUD</h3>
  </div>
  <br>
  <div class="panel-body">
    <?php if (isset($beneficiario) and $beneficiario): ?>
    
    <?php else: ?>
    <form action="<?php echo baseUrl ?>admin/solicitudes/create/<?php echo $solicitante->id ?>" method="GET">
      <?php echo Token::field() ?>
      <div class="row">
        <div class="col-lg-12">
          <div class="form-group">
            <select id="preguntaBeneficiario" class="form-control text-uppercase" name="tipo_solicitud"  onchange="">
              <option value="">El solicitante es el mismo beneficiario?</option>
              <option value=""></option>
              <option value="2">SI</option>
              <option value="1">NO</option>
            </select>
          </div>
        </div>
        <br>
        <div style="display: none" id="cedulaBeneficiario">
          <div class="col-lg-4">
            <input name="beneficiario_cedula" class="form-control" type="text" placeholder="INGRESE CEDULA DE BENEFICIARIO">
          </div>
          <div class="col-lg-2">
            <button type="submit" class="btn btn-primary fa fa-search fa-2x"></button>
          </div>
          <div style="display: none" id="cedulaBeneficiario" class="form-group">
          </div>
        </div>
      </div>
    </form>
    <br>
    <?php endif ?>
    <form action="<?php echo baseUrl ?>admin/solicitudes/documentos" method="POST">
      <?php echo Token::field() ?>
      <?php if (isset($beneficiario) and $beneficiario): ?>
      <div class="panel panel-default">
        <div class="panel-heading"><i class="fa fa-user"></i> BENEFICIARIO</div>
        <div class="panel-body">
          <div class="col-lg-4">
            <div class="form-group">
              <input class="form-control" type="text" name="beneficiario_cedula" class="form-control" placeholder="CÉDULA DEL BENEFICIARIO" value="<?php echo $beneficiario->cedula ?>" required>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <input class="form-control" type="text" name="beneficiario_nombre_apellido" class="form-control" placeholder="NOMBRE Y APELLIDO DEL BENEFICIARIO" value="<?php echo $beneficiario->nombre_apellido ?>" required>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <input class="form-control" type="text" name="beneficiario_fecha_nacimiento" class="form-control" placeholder="FECHA NACIMIENTO DE BENEFICIARIO" value="<?php echo $beneficiario->fecha_nacimiento ?>" required>
            </div>
          </div>
        </div>
      </div>
      <?php else: ?>
      
      <?php endif ?>
      <input type="hidden"  name="solicitante_id" value="<?php echo $solicitante->id ?>">
      <div class="row">
        <div class="col-lg-12">
          <div class="form-group">
            <select id="TiposSelect" class="form-control text-uppercase" name="tipo_solicitud"  onchange="">
              <option value="">Tipo de Solicitudes</option>
              <option value=""></option>
              <?php foreach ($tipos as $key => $t): ?>
              <option value="<?php echo $t->organismo_id ?>-<?php echo $t->id ?>"><?php echo $t->nombre ?></option>
              <?php endforeach ?>
            </select>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="form-group">
            <select name="requerimiento_categoria_id" id="CategoriasSelect" class="form-control text-uppercase" required>
            </select>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="form-group">
            <input class="monto" id="monto" style="display: none;" type="text" name="monto_solicitado" class="form-control" placeholder="Monto de Bolivares solicitados" required="">
          </div>
          <script>
          //Inputmask({ regex: "[0-9]*" }).mask('#monto');
          </script>
        </div>
        <div class="col-lg-12">
          <div class="form-group">
            <select name="organismo_id" id="OrganismosSelect" class="form-control text-uppercase" required>
            </select>
          </div>
        </div>
      </div>
      <textarea name="observacion_solicitud" class="editor">
      </textarea>
      <br>
      <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-file"></i> CONSIGNAR DOCUMENTOS</button>
    </form>
  </div>
</div>
<script>
$('.editor').trumbowyg({
lang: 'es'
});
</script>