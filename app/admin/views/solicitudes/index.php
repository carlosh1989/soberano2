<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-clipboard fa-2x"></i> SOLICITUD</h3>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-md-12">
        <form id="formulario" method="GET" action="">
          <div class="col-md-6">
            <select name="tipo" class="form-control" onchange="this.form.submit()">
              <option value="1">TIPO SOLICITUD</option>
              <option value="">TODAS</option>
              <option value=""></option>
              <?php foreach ($tipos as $key => $t): ?>
              <option class="text-uppercase" value="<?php echo $t->id ?>"><?php echo $t->nombre ?></option>
              <?php endforeach ?>
            </select>
          </div>
        </form>
      </div>
    </div>
    <br>
    <h5 class="text-muted text-primary text-center text-uppercase">
    <i class="fa fa-folder-open-o" aria-hidden="true"></i>
    SOLICITUDES ABIERTAS
    <?php if (isset($tipo_seleccion) and $tipo_seleccion): ?>
      <a class="text-info"><?php echo $tipo_seleccion->nombre ?></a>
    <?php else: ?>
      
    <?php endif ?>
    </h5>
    <div class="row">
      <div class="col-md-12 table-responsive">
        <table class="table table-striped table-condensed animated fadeIn" data-striped="true">
          <thead>
            <tr class="bg-primary text-white">
              <th width="5%" class="text-uppercase">COD</th>
              <th width="5%" class="text-uppercase">Fecha</th>
              <th width="5%" class="text-uppercase">Cédula</th>
              <th width="22%" class="text-uppercase">Solicitante</th>
              <th class="text-uppercase">Telefono n°1</th>
              <th class="text-uppercase">Telefono n°2</th>
              <th width="1%" class="text-uppercase">Días</th>
              <th width="1%" class="text-uppercase">Ver</th>
              <th width="1%" class="text-uppercase">Cerrar</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach (Paginator($solicitudes) as $c): ?>
            <?php
            $fecha = $c->fecha_hora_asignado_consignado;
            list($date,$hora) = explode(' ', $fecha);
            list($ano,$mes,$dia)= explode('-', $date);
            ?>
            <tr id="tr<?php echo $c->id ?>">
              <td class="text-uppercase"><button class="btn btn-default">#<?php echo $c->id ?><?php echo $ano ?></button></td>
              <td class="text-center">
                <?php
                $fecha = $c->fecha_hora_asignado_consignado;
                list($date,$hora) = explode(' ', $fecha);
                list($ano,$mes,$dia)= explode('-', $date);
                echo $dia.'/'.$mes.'/'.$ano;
                ?>
              </td>
              <td class="text-uppercase">V-<?php echo $c->solicitante->cedula ?></td>
              <td class="text-uppercase">V-<?php echo $c->solicitante->nombre_apellido ?></td>
              <td class="text-uppercase"><?php echo $c->solicitante->telefono1 ?></td>
              <td class="text-uppercase"><?php echo $c->solicitante->telefono2 ?></td>
              <td class="text-uppercase text-center">
                <?php
                $dias = \Carbon\Carbon::parse($fecha)->diffInDays();
                ?>
                <button class="btn btn-primary"><?php echo $dias ?></button>
              </td>
              <td class="text-uppercase">
                <a class="btn btn-default" href="<?php echo baseUrl ?>admin/solicitudes/<?php echo $c->id ?>"><i class="fa fa-search text-primary"></i></a>
              </td>
              <td>
                <!--                 <form action="<?php echo baseUrl ?>admin/solicitudes/aprobar">
                  <?php echo Token::field() ?> -->
                  <input type="hidden" name="solicitud_id" value="<?php echo $c->id ?>">
                  <style>
                  .change-icon > .fa + .fa,
                  .change-icon:hover > .fa {
                  display: none;
                  }
                  .change-icon:hover > .fa + .fa {
                  display: inherit;
                  }
                  </style>
                  <?php $cerrar = 'cerrar'.$c->id ?>
                  <button onclick="<?php echo $cerrar ?>()" type="submit" class="btn btn-success change-icon">
                  <i class="fa fa-unlock-alt"></i>
                  <i class="fa fa-lock"></i>
                  </button>
                  <!-- </form> -->
                  <script>
                  function <?php echo $cerrar ?>(argument) {
                  swal({
                  title: 'Estatus?',
                  text: "La solicitud fue aprobada o rechazada?",
                  type: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Aprobada!',
                  cancelButtonText: 'Cancelada!',
                  confirmButtonClass: 'btn btn-success',
                  cancelButtonClass: 'btn btn-danger',
                  buttonsStyling: 'padding-left:5px;'
                  }).then(function () {
                  var solicitudID = <?php echo $c->id ?>;
                  var estatus = 2;
                  $.get("<?php echo baseUrl ?>admin/solicitudes/estatus", { solicitud_id:solicitudID, estatus:estatus}, function(data){
                  //alert(JSON.stringify(data));
                  });
                  $("#tr<?php echo $c->id ?>").remove();
                  }, function (dismiss) {
                  // dismiss can be 'cancel', 'overlay',
                  // 'close', and 'timer'
                  if (dismiss === 'cancel') {
                  swal({
                  title: 'Observación',
                  input: 'text',
                  showCancelButton: true,
                  confirmButtonText: 'Finalizar',
                  showLoaderOnConfirm: true,
                  preConfirm: function (email) {
                  return new Promise(function (resolve, reject) {
                  setTimeout(function() {
                  if (email === 'taken@example.com') {
                  reject('This email is already taken.')
                  } else {
                  resolve()
                  }
                  }, 2000)
                  })
                  },
                  allowOutsideClick: false
                  }).then(function (email) {
                  var solicitudID = <?php echo $c->id ?>;
                  var estatus = 3;
                  var observacion = email;
                  $.get("<?php echo baseUrl ?>admin/solicitudes/estatus", { solicitud_id:solicitudID, estatus:estatus, observacion:observacion }, function(data){
                  //alert(JSON.stringify(data));
                  });
                  $("#tr<?php echo $c->id ?>").remove();
                  })
                  }
                  })
                  }
                  </script>
                </td>
              </tr>
              <?php endforeach ?>
            </tbody>
          </table>
          <div class="text-center">
            <?php echo Paginator($solicitudes); ?>
          </div>
        </div>
      </div>
    </div>
  </div>