<link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/trumbowyg/dist/ui/trumbowyg.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
<script src="<?php echo baseUrl ?>assets/bower/trumbowyg/dist/trumbowyg.min.js"></script>
<script language="javascript">
$(document).ready(function(){
$('.monto').maskMoney({prefix:'Bs. ', allowNegative: true, thousands:'.', decimal:',', affixesStay: true});
});
</script>
<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-money fa-2x"></i> MONTO DE BOLIVARES APROBADOS</h3>
  </div>
  <br>
  <div class="panel-body">
    <form action="<?php echo baseUrl ?>admin/solicitudes/monto_aprobado" method="POST">
      <?php echo Token::field() ?>
      <input type="hidden"  name="solicitud_id" value="<?php echo $solicitud_id ?>">
      <div class="row">
        <div class="col-lg-12">
          <div class="form-group">
            <input class="monto" id="monto" type="text" name="monto_aprobado" class="form-control" placeholder="Monto Aprobado" required>
          </div>
        </div>
      </div>
      <br>
      <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-money"></i> <i class="fa fa-check"></i> APROBAR MONTO</button>
    </form>
  </div>
</div>
