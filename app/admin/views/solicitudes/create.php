<script language="javascript">
$(document).ready(function(){
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

} 
else 
{
  $("#monto").prop('required',false);
  $("#monto").css("display", "none");
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
</script>

<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-user-plus fa-2x"></i> INGRESAR SOLICITUD</h3>
  </div>
  <br>
  <div class="panel-body">
    <form action="<?php echo baseUrl ?>admin/solicitudes/documentos" method="POST">
      <?php echo Token::field() ?>
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
            <input id="monto" style="display: none;" type="number" name="monto_solicitante" class="form-control text-uppercase" placeholder="Monto de Bolivares solicitados" required="">
          </div>
        </div>
        <div class="col-lg-12">
          <div class="form-group">
              <select name="organismo_id" id="OrganismosSelect" class="form-control text-uppercase" required> 
              </select>
          </div>
        </div>
      </div>
      <br>
      <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-file"></i> CONSIGNAR DOCUMENTOS</button>
    </form>
  </div>
</div>