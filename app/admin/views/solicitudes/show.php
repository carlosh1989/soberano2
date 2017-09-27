<?php
list($fecha,$hora) = explode(' ', $solicitud->fecha_hora_registrado);
list($ano,$mes,$dia) = explode('-', $fecha);
$fecha = $dia.'/'.$mes.'/'.$ano;
?>
<style>
.form-group input[type="checkbox"] {
display: none;
}
.form-group input[type="checkbox"] + .btn-group > label span {
width: 20px;
height: 23px;
}
.form-group input[type="checkbox"] + .btn-group > label span:first-child {
display: none;
}
.form-group input[type="checkbox"] + .btn-group > label span:last-child {
display: inline-block;
}
/*.form-group input[type="checkbox"]:checked + .btn-group > label span:first-child {
display: inline-block;
}
.form-group input[type="checkbox"]:checked + .btn-group > label span:last-child {
display: none;
}*/
</style>
<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h4 class="panel-title text-muted text-uppercase"><i class="fa fa-clipboard fa-2x"></i> SOLICITUD<b> <?php echo $solicitud->tipo_solicitud->nombre ?></b>
    </h4>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-lg-6 animated fadeIn">
        <table class="table table-user-information panel panel-default animated fadeIn">
          <tbody>
            <tr class="text-uppercase">
              <td width="40%" style="background: #E0E0E0;"><b><i class="fa fa-user"></i> Solicitante:</b></td>
              <td><?php echo ucwords($solicitud->solicitante->nombre_apellido) ?></td>
            </tr>
            <?php if ($solicitud->requerimiento_categoria_id): ?>
            <tr class="text-uppercase">
              <td style="background: #E9E9E9;"><b><i class="fa fa-file"></i> Requerimiento:</b></td>
              <td><?php echo ucwords($solicitud->requerimiento_categoria->nombre) ?></td>
            </tr>
            <?php endif ?>
            <tr class="text-uppercase">
              <td style="background: #E0E0E0;"><b><i class="fa fa-building-o"></i> Organismo Asignado:</b></td>
              <td><?php echo ucwords($solicitud->organismo->nombre) ?></td>
            </tr>
            <tr class="text-uppercase">
              <td style="background: #E9E9E9;"><b><i class="fa fa-calendar"></i> Fecha Registro:</b></td>
              <td><?php echo $fecha ?></td>
            </tr>
            <?php if ($solicitud->observacion): ?>
            <tr class="text-uppercase">
              <td style="background: #E9E9E9;"><b><i class="fa fa-align-justify"></i> Obervación:</b></td>
              <td><?php echo $solicitud->observacion ?></td>
            </tr>
            <?php endif ?>
            <?php if ($solicitud->monto_solicitado): ?>
            <tr class="text-uppercase">
              <td style="background: #E9E9E9;"><b><i class="fa fa-get-pocket text-warning"></i> <i class="fa fa-money"></i> Monto solicitado:</b></td>
              <td><?php echo $solicitud->monto_solicitado ?></td>
            </tr>
            <?php endif ?>
            <?php if ($solicitud->monto_aprobado): ?>
            <tr class="text-uppercase">
              <td style="background: #E9E9E9;"><b><i class="fa fa-check-square text-success"></i> <i class="fa fa-money"></i> Monto Aprobado:</b></td>
              <td><?php echo $solicitud->monto_aprobado ?></td>
            </tr>
            <?php endif ?>
            <tr class="text-uppercase">
              <td style="background: #E9E9E9;"><b><i class="fa fa-hand-paper-o"></i> Estatus:</b></td>
              <td>
                <?php if ($solicitud->estatus == 1): ?>
                <button onclick="cerrar()" type="submit" class="btn btn-primary">
                  <i class="fa fa-search"></i> En estudio
                  </button>
                <?php endif ?>
                <?php if ($solicitud->estatus == 2): ?>
                <a class="btn btn-success" href="#"><i class="fa fa-check-square"></i> APROBADO</a>
                <?php endif ?>
                <?php if ($solicitud->estatus == 3): ?>
                <a class="btn btn-danger" href="#"><i class="fa fa-window-close"></i> RECHAZADO</a>
                <?php endif ?>
                <?php if ($solicitud->estatus == 4): ?>
                <a class="btn btn-success" href="#"><i class="fa fa-share-square"></i> ENTREGADAS</a>
                <?php endif ?>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <?php if ($solicitud->estatus == 1): ?>
      <div class="col-lg-6 animated fadeIn panel panel-default animated">
        <div class="">
          <h5 class="text-muted text-primary">
          <i class="fa fa-file"></i> DOCUMENTOS ASIGNADOS
          </h5>
          <hr>
        </div>
        <?php if ($solicitud->documentos_consignados[0]->id): ?>
        <div class="form-group">
          <?php foreach ($solicitud->documentos_consignados as $key => $r): ?>
          <?php if ($r->requerimiento->prioridad == true): ?>
          <?php $required = "required" ?>
          <?php $requerido ="*" ?>
          <?php else: ?>
          <?php $required = "" ?>
          <?php $requerido ="" ?>
          <?php endif ?>
          <div class="[ form-group ]">
            <input type="checkbox" name="requerimientos[]" id="fancy-checkbox-default-custom-icons-<?php echo $r->id ?>"  <?php echo $required ?> value="<?php echo $r->id ?>"/>
            <div class="[ btn-group ]">
              <label for="fancy-checkbox-default-custom-icons-<?php echo $r->requerimiento->id ?>" class="[ btn btn-default ]">
                <span class="fa fa-check"></span>
              </label>
              <label for="fancy-checkbox-default-custom-icons-<?php echo $r->requerimiento->id ?>" class="[ btn btn-default active ]">
                <?php echo $r->requerimiento->nombre ?>
                <?php echo $r->nombre ?>
                <?php if ($requerido == "(Obligatorio)"): ?>
                <label class="text-danger"> <?php echo $requerido?></label>
                <?php else: ?>
                <label class="text-primary"> <?php echo $requerido?></label>
                <?php endif ?>
              </label>
            </div>
          </div>
          <?php endforeach ?>
        </div>
      </div>
      <?php else: ?>
      <div class="form-group">
        <h3>No hay requerimientos.</h3>
      </div>
      <?php endif ?>
      <br>
    </div>
    <?php endif ?>

    <?php if ($solicitud->estatus == 3): ?>
    <div class="col-lg-6 animated fadeIn panel panel-default animated">
      <div class="">
        <h5 class="text-muted text-primary">
        <i class="fa fa-file"></i> OBSERVACIÓN
        </h5>
        <hr>
      </div>
      <div class="panel-body">
        <?php echo $solicitud->observacion ?>
      </div>
      <br>
    </div>
    <?php endif ?>
    <?php if ($solicitud->estatus == 4): ?>
    <div class="col-lg-6 animated fadeIn panel panel-default animated">
      <div class="">
        <h5 class="text-muted text-primary">
        <i class="fa fa-send"></i> INFORMACIÓN DE ENTREGA
        </h5>
      </div>
      <hr>
    </div>
    <?php endif ?>
  </div>
</div>