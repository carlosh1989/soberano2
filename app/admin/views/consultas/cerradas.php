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
    SOLICITUDES CERRADAS
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
              <th width="10%" class="text-uppercase">Cédula</th>
              <th width="22%" class="text-uppercase">Solicitante</th>
              <th class="text-uppercase">Telefono n°1</th>
              <th class="text-uppercase">Telefono n°2</th>
              <th width="1%" class="text-uppercase">Ver</th>
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
              <td class="text-uppercase">
                <a class="btn btn-default" href="<?php echo baseUrl ?>admin/solicitudes/<?php echo $c->id ?>"><i class="fa fa-search text-primary"></i></a>
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