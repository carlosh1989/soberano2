<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-file fa-2x"></i> INDEX DEL MODULO admin<b></b>
    <a class="btn btn-default pull-right" href="<?php echo baseUrl ?>admin/cuentas/create"><i class="fa fa-plus-square text-primary"></i><i style="color:#777;"> Agregar Usuario</i></a>    </h3>
  </div>
  <div class="panel-body">
    <div class="col-md-12 table-responsive">
      <table class="table table-striped table-condensed animated fadeIn" data-striped="true">
        <thead>
          <tr class="bg-primary text-white">
            <th width="" class="text-uppercase">Nombre</th>
            <th width="" class="text-uppercase">Role</th>
            <th width="" class="text-uppercase">Organismo</th>
            <th width="" class="text-uppercase">Creado</th>
            <th width="" class="text-uppercase">Opciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($usuarios as $key => $u): ?>
          <tr>
            <td><?php echo $u->name ?></td>
            <td><?php echo $u->role ?></td>
            <td><?php echo $u->organismo->tipo ?></td>
            <td><?php echo $u->created_at ?></td>
          </tr>
          <?php endforeach ?>
        </tbody>
      </table>
      <div class="text-center">
        <?php echo Paginator($usuarios); ?>
      </div>
    </div>
  </div>
</div>
</div>