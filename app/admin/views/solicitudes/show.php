<link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/lightbox2/dist/css/lightbox.min.css">
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
    <a class="pull-right" href="<?php echo baseUrl ?>admin/solicitantes/<?php echo $solicitud->solicitante_id ?>">
      <i class="fa fa-search"></i><i class="fa fa-user fa-2x"></i>
    </a>
    </h4>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-lg-6 animated fadeIn">
        <table class="table table-user-information panel panel-default animated fadeIn">
          <tbody>
            <tr class="text-uppercase">
              <td width="40%" style="background: #E9E9E9;"><b><i class="fa fa-barcode"></i> Solicitud N°:</b></td>
              <td><?php echo $solicitud->cod ?></td>
            </tr>
            <tr class="text-uppercase">
              <td width="40%" style="background: #E0E0E0;"><b><i class="fa fa-user"></i> Solicitante:</b></td>
              <td><?php echo ucwords($solicitud->solicitante->nombre_apellido) ?></td>
            </tr>
            <?php if (isset($solicitud->beneficiario->cedula) and $solicitud->beneficiario->cedula): ?>
            <tr class="text-uppercase">
              <td width="40%" style="background: #E0E0E0;"><b><i class="fa fa-user"></i> Beneficiario:</b></td>
              <td>
                <a class="btn btn-default" onclick="datos_beneficiario()" href="#"><i class="fa fa-user"></i> VER</a></td>
              </tr>
              <script>
              function datos_beneficiario(argument) {
              swal(
              'Beneficiario',
              '<table class="table table-user-information panel panel-default animated fadeIn">'+
              '<tbody>' +
              '<tr class="text-uppercase">'+
              '<td width="40%" style="background: #E9E9E9;"><b><i class="fa fa-address-card-o"></i> CÉDULA:</b></td>'+
              '<td><?php echo $solicitud->beneficiario->cedula ?></td>'+
              '</tr>'+
              '<tr class="text-uppercase">'+
              '<td width="40%" style="background: #E0E0E0;"><b><i class="fa fa-address-card"></i>  NOMBRE°:</b></td>'+
              '<td><?php echo $solicitud->beneficiario->nombre_apellido ?></td>'+
              '</tr>'+
              '<tr class="text-uppercase">'+
              '<td width="40%" style="background: #E9E9E9;"><b><i class="fa fa-calendar-o"></i> F. NACIMIENTO:</b></td>'+
              '<td><?php echo $solicitud->beneficiario->fecha_nacimiento ?></td>'+
              '</tr>'+
              '</tbody>' +
              '</table>'
              )
              }
              </script>
              <?php endif ?>
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
                  <a class="btn btn-success" href="#"><i class="fa fa-share-square"></i> ENTREGADO</a>
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
            <i class="fa fa-file"></i> DOCUMENTOS CONSIGNADOS
            </h5>
          </div>
          <?php if ($solicitud->documentos_consignados[0]->id): ?>
          <style>
          .ul {
          list-style: none;
          }
          .ul li:before {
          content: '✓';
          font-size: 1.1em;
          }
          </style>
          <ul class="ul">
            <?php foreach ($solicitud->documentos_consignados as $key => $r): ?>
            <?php if ($r->requerimiento->prioridad == true): ?>
            <?php $required = "required" ?>
            <?php $requerido ="*" ?>
            <?php else: ?>
            <?php $required = "" ?>
            <?php $requerido ="" ?>
            <?php endif ?>
            <li><?php echo $r->requerimiento->nombre ?>
              <?php if ($requerido == "(Obligatorio)"): ?>
              <label class="text-danger"> <?php echo $requerido?></label>
              <?php else: ?>
              <label class="text-primary"> <?php echo $requerido?></label>
              <?php endif ?>
            </li>
            <?php endforeach ?>
          </ul>
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
        <div class="panel-body text-uppercase">
          <b>ENTREGADO POR:</b> <?php echo $solicitud->datos_entrega->responsable ?>
          <br>
          <b>lugar:</b> <?php echo $solicitud->datos_entrega->lugar ?>
          <br>
          <b>fecha:</b> <?php echo $solicitud->datos_entrega->fecha_entrega ?>
          <br>
          <b>Observación:</b> <?php echo $solicitud->datos_entrega->observacion ?>
          <?php if ($solicitud->datos_entrega->imagen): ?>
          <a class="example-image-link" href="<?php echo $solicitud->datos_entrega->imagen->imagen_grande ?>" data-lightbox="example-set"><img class="example-image img-responsive img-thumbnail" src="<?php echo $solicitud->datos_entrega->imagen->imagen_medio ?>" alt=""/></a>
          <?php else: ?>
          <h4>No hay imagenes</h4>
          <?php endif ?>
        </div>
        <br>
      </div>
      <?php endif ?>
    </div>
  </div>
  <script src="<?php echo baseUrl ?>assets/bower/lightbox2/dist/js/lightbox-plus-jquery.min.js"></script>