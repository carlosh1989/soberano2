<style>
.form-group input[type="checkbox"] {
display: none;
}
.form-group input[type="checkbox"] + .btn-group > label span {
width: 20px;
height: 14px;
}
.form-group input[type="checkbox"] + .btn-group > label span:first-child {
display: none;
}
.form-group input[type="checkbox"] + .btn-group > label span:last-child {
display: inline-block;
}
.form-group input[type="checkbox"]:checked + .btn-group > label span:first-child {
display: inline-block;
}
.form-group input[type="checkbox"]:checked + .btn-group > label span:last-child {
display: none;
}
</style>
<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-file fa-2x"></i> CONSIGNAR DOCUMENTOS</h3>
  </div>
  <br>
  <div class="panel-body">
    <form action="<?php echo baseUrl ?>admin/solicitudes" method="POST">
      <?php echo Token::field() ?>
      <input type="hidden"  name="solicitante_id" value="<?php echo $solicitante_id ?>">
      <input type="hidden" name="tipo_solicitud_id" value="<?php echo $tipo_solicitud_id ?>">
      <input type="hidden" name="requerimiento_categoria_id" value="<?php echo $requerimiento_categoria_id ?>">
      <input type="hidden" name="observacion_solicitud" value="<?php echo $observacion_solicitud ?>">
      <input type="hidden" name="monto_solicitado" value="<?php echo $monto_solicitado ?>">
      <input type="hidden" name="organismo_id" value="<?php echo $organismo_id ?>">

      <!-- DATOS DE BENEFICIARIO -->
      <input type="hidden" name="beneficiario_cedula" value="<?php echo $beneficiario_cedula ?>">
      <input type="hidden" name="beneficiario_nombre_apellido" value="<?php echo $beneficiario_nombre_apellido ?>">
      <input type="hidden" name="beneficiario_fecha_nacimiento" value="<?php echo $beneficiario_fecha_nacimiento ?>">

      <div class="row">
        <div class="col-lg-12">
          <?php if (isset($requerimientos[0])): ?>
          <div class="form-group">
            <?php foreach ($requerimientos as $key => $r): ?>
            <?php if ($r->prioridad == true): ?>
            <?php $required = "required" ?>
            <?php $requerido ="*" ?>
            <?php else: ?>
            <?php $required = "" ?>
            <?php $requerido ="" ?>
            <?php endif ?>
            <div class="[ form-group ]">
              <input type="checkbox" name="requerimientos[]" id="fancy-checkbox-default-custom-icons-<?php echo $r->id ?>"  <?php echo $required ?> value="<?php echo $r->id ?>"/>
              <div class="[ btn-group ]">
                <label for="fancy-checkbox-default-custom-icons-<?php echo $r->id ?>" class="[ btn btn-default ]">
                  <span class="fa fa-check"></span>
                  <span class="fa fa-minus"></span>
                </label>
                <label for="fancy-checkbox-default-custom-icons-<?php echo $r->id ?>" class="[ btn btn-default active ]">
                  <?php echo $r->nombre ?>
                  <?php if ($requerido == "(Obligatorio)"): ?>
                  <label class="text-danger"> <?php echo $requerido?></label>
                  <?php else: ?>
                  <?php echo $requerido?>
                  <?php endif ?>
                </label>
              </div>
            </div>
            <?php endforeach ?>
          </div>
          <hr>
          <div class="panel panel-default col-md-2">
            <p>Necesarios (*)</p>
          </div>
        </div>
        <?php else: ?>
        <div class="form-group">
          <h3>No hay requerimientos.</h3>
        </div>
        <?php endif ?>
        <br>
        <div class="col-lg-12">
          <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i> GUARDAR</button>
        </div>
      </div>
    </div>
  </form>
</div>
</div>