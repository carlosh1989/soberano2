<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-user fa-2x"></i> <?php echo $titulo ?><b></b>
    </h3>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-lg-12">
        <?php foreach ($usuarios as $key => $u): ?>
            <b>nombre:</b> <?php echo $u->name ?>
        <?php endforeach ?>
      </div>
    </div>
  </div>
</div>