<style type="text/css">
.input-controls {
margin-top: 10px;
border: 1px solid transparent;
border-radius: 2px 0 0 2px;
box-sizing: border-box;
-moz-box-sizing: border-box;
height: 32px;
outline: none;
box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
}
#searchInput {
background-color: #fff;
font-family: Roboto;
font-size: 15px;
font-weight: 300;
margin-left: 12px;
padding: 0 11px 0 13px;
text-overflow: ellipsis;
width: 50%;
}
#searchInput:focus {
border-color: #4d90fe;
}
</style>
<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-folder fa-2x"></i> SOLICITUD NÚMERO:<?php echo $solicitud->cod ?></h3>
  </div>
  <br>
  <div class="panel-body">
    <form action="<?php echo baseUrl ?>admin/solicitudes/entregar_proceso" method="POST">
      <?php echo Token::field() ?>
      <input type="hidden" name="solicitud_id" value="<?php echo $solicitud_id ?>">
      <div class="row">
        <div class="col-lg-3">
          <div class="form-group">
            <input class="form-control" type="text" name="responsable" placeholder="Responsable" required/>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="form-group">
            <input class="form-control" type="text" name="lugar" placeholder="Lugar" required/>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="form-group">
            <input class="datepicker" type="text" name="fecha_entrega" placeholder="Fecha entrega" required/>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="form-group">
          <select name="portada" class="form-control" required>
            <option value="">En portada?</option>
            <option value="0">No</option>
            <option value="1">Si</option>
          </select>
          </div>
        </div>
        <script>
        $('.datepicker').pickadate({
        // Escape any “rule” characters with an exclamation mark (!).
        format: 'dd/mm/yyyy',
        formatSubmit: 'dd/mm/yyyy',
        hiddenPrefix: 'prefix__',
        hiddenSuffix: '__suffix'
        })
        </script>
      </div>
      <br>
      <div class="row">
          <div class="col-md-2">
            <div class="form-group">
              <script src="//api.filestackapi.com/filestack.js" type="text/javascript"></script>
              <input class="btn btn-primary" name="imagenEntrega" onchange="cambiarImagen(event.fpfile.url)" data-fp-services="COMPUTER,URL" data-fp-button-text="Ingresar Imagen" data-fp-maxsize="1000000" data-fp-container="modal" data-fp-crop-max="400, 300" data-fp-crop-force="true" data-fp-mimetypes="image/*" data-fp-apikey="A1nL8omiAR8W7pHi3cotzz" type="filepicker">
            </div>
          </div>
          <div id="imagenSubidaDiv" class="col-md-10">
            <img id="imagenSubida" src="" alt="">
          </div>
      </div>
      <script>
      function cambiarImagen(data)
      {
      //alert(data);
      $('#imagenSubida').addClass('panel panel-default');
      $('#imagenSubida').attr('src','https://process.filestackapi.com/AhTgLagciQByzXpFGRI0Az/resize=w:250/quality=value:70/compress/'+data);
      $('#imagenSubidaDiv').addClass('animated bounceInDown');
      }
      </script>
      <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/trumbowyg/dist/ui/trumbowyg.min.css">
      <script src="<?php echo baseUrl ?>assets/bower/trumbowyg/dist/trumbowyg.min.js"></script>
      <div class="row">
        <div class="col-lg-12">
          <textarea name="observacion" class="editor">
          </textarea>
        </div>
      </div>
      <button onclick="enviar()" id="botonSubmit" type="submit" class="btn btn-primary pull-right"><i class="fa fa-share-square"></i> CONFIRMAR ENTREGA<i class="fa fa-check"></i></button>
    </form>
  </div>
</div>
<script>
$('.editor').trumbowyg({
lang: 'es'
});
</script>