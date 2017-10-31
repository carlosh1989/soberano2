<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-plus-square fa-2x"></i> VISTA DEL MODULO admin<b></b>
    </h3>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-lg-12">
        <form id="formCheckPassword" action="<?php echo baseUrl ?>admin/cuentas" method="POST">
          <?php echo Token() ?>
          <div class="col-lg-12">
            <div class="col-lg-4">
              <input class="form-control" type="text" name="name" placeholder="NOMBRE">
            </div>
            <div class="col-lg-4">
              <input class="form-control" type="text" name="email" placeholder="EMAIL">
            </div>
            <div class="col-lg-4">
              <select name="role" class="form-control" name="role" id="">
                <option value="admin">ADMIN</option>
                <option value="aliado">ALIADO</option>
                <option value="operador">OPERADOR</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-lg-12">
          <?php echo Token::field() ?>
          <div class="col-lg-12">
            <div class="col-lg-4">
              <input id="password" name="password" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'tiene que tener minimo 6 caracteres.' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" placeholder="CLAVE" required>
            </div>
            <div class="col-lg-4">
              <input id="password_two" name="password_two" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'La clave no coinciden.' : '');" placeholder="VERIFICAR CLAVE" required>
            </div>
            <div class="col-lg-4">
              <select id="municipioSelect" class="form-control" name="organismo_id" required/>
                <option value="">ORGANISMOS</option>
                <?php foreach ($organismos as $key => $or): ?>
                <option value="<?php echo $or->id ?>"><?php echo $or->nombre ?></option>
                <?php endforeach ?>
              </select>
            </div>
            <br>
            <br>
            <button class="btn btn-primary pull-right" type="submit"><i class="fa fa-save fa-2x"></i></button>
          </form>
        </div>
      </div>
    </div>
    <script>
    $("#formCheckPassword").validate({
    rules: {
    password: {
    required: true,
    minlength: 6,
    maxlength: 10,
    } ,
    cfmPassword: {
    equalTo: "#password",
    minlength: 6,
    maxlength: 10
    }
    },
    messages:{
    password: {
    required:"the password is required"
    }
    }
    });
    </script>