<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-user fa-2x"></i> FORMULARIO<b></b>
    </h3>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-lg-12">
        <form action="<?php echo baseUrl ?>recepcionista/atencion/<?php echo $usuario->id ?>" method="POST">
          <?php echo Token::field() ?>
          <input class="form-control" type="text" name="nombre" placeholder="NOMBRE" value="<?php echo $usuario->name ?>">
          <br>
          <input class="form-control" type="text" name="email" placeholder="EMAIL" value="<?php echo $usuario->email ?>">
          <br>
          <button class="btn btn-primary" type="submit">ENVIAR</button>
        </form>
      </div>
    </div>
  </div>
</div>