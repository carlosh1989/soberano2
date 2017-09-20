<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted "><i class="fa fa-user-plus fa-2x"></i> SOLICITANTE</h3>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-md-12">
        <form id="formulario" method="POST" action="<?php echo baseUrl ?>admin/solicitantes/create">
          <?php echo Token::field() ?>
          <div class="col-md-6">
            <div class="col-md-10">
              <input class="form-control" name="cedula" type="number" min="3" step="1" id="myInput" placeholder="Cédula de solicitante..">
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <a class="btn btn-block btn-default animated" href="javascript:{}" onclick="$('#formulario').submit();"><i class="fa fa-search fa-2x text-primary"></i></a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <br>
    <h5 class="text-muted text-primary text-center">
    <i class="fa fa-users"></i> SOLICITANTES
    </h5>
    <div class="row">
      <div class="col-md-12 table-responsive">
        <table class="table table-striped table-condensed animated fadeIn" data-striped="true">
          <thead>
            <tr class="bg-primary text-white">
              <th width="10%" class="text-uppercase">Cédula</th>
              <th width="30%" class="text-uppercase">Nombre</th>
              <th width="20%" class="text-uppercase">Telefono N°1</th>
              <th width="20%" class="text-uppercase">Telefono N°2</th>
              <th width="20%" class="text-uppercase">Ver</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach (Paginator($solicitantes) as $c): ?>
            <tr>
              <td class="text-uppercase"><?php echo $c->cedula ?></td>
              <td class="text-uppercase"><?php echo $c->nombre_apellido ?></td>
              <td class="text-uppercase"><?php echo $c->telefono1 ?></td>
              <td class="text-uppercase"><?php echo $c->telefono2 ?></td>
              <td class="text-uppercase" width="15%">
                <a class="btn btn-default" href="<?php echo baseUrl ?>admin/solicitantes/<?php echo $c->id ?>"><i class="fa fa-search text-primary"></i></a>
              </td>
            </tr>
            <?php endforeach ?>
          </tbody>
        </table>
        <div class="text-center">
        <?php echo Paginator($solicitantes); ?>   
        </div>
      </div>
    </div>
  </div>
</div>