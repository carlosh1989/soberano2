<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title></title>
    <!--     <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/jasny-bootstrap/dist/css/jasny-bootstrap.min.css">
    -->
    <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/bootstrap-theme-paper/paper.css">
    
    <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/components-font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/sweetalert2/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/bootstrap-side-navbar/source/assets/stylesheets/navbar-fixed-side.css">
    <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/animate.css/animate.min.css">
    <script src="<?php echo baseUrl ?>assets/bower/sweetalert2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/bootstrap-table/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/pickadate/lib/themes/default.css">
    <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/pickadate/lib/themes/default.date.css">
    <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/pickadate/lib/themes/default.time.css">
    <script src="<?php echo baseUrl ?>assets/bower/bootstrap-table/dist/bootstrap-table.min.js"></script>
    <script src="<?php echo baseUrl ?>assets/bower/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo baseUrl ?>assets/bower/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo baseUrl ?>assets/bower/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
    <script src="<?php echo baseUrl ?>assets/bower/inputmask/dist/jquery.inputmask.bundle.js"></script>
    <script src="<?php echo baseUrl ?>assets/bower/inputmask/dist/inputmask/phone-codes/phone.js"></script>
    <script src="<?php echo baseUrl ?>assets/bower/inputmask/dist/inputmask/phone-codes/phone-be.js"></script>
    <script src="<?php echo baseUrl ?>assets/bower/inputmask/dist/inputmask/phone-codes/phone-ru.js"></script>
    <script src="<?php echo baseUrl ?>assets/bower/inputmask/dist/inputmask/bindings/inputmask.binding.js"></script>
    <script src="<?php echo baseUrl ?>assets/bower/inputmask/dist/inputmask/bindings/inputmask.binding.js"></script>
    <script src="<?php echo baseUrl ?>assets/bower/pickadate/lib/picker.js"></script>
    <script src="<?php echo baseUrl ?>assets/bower/pickadate/lib/picker.time.js"></script>
    <script src="<?php echo baseUrl ?>assets/bower/pickadate/lib/picker.date.js"></script>
    <script src="<?php echo baseUrl ?>assets/bower/pickadate/lib/translations/es_ES.js"></script>
    
    <style>
    body{
    background-color: #222;
    }
    .table {
    border-bottom:0px !important;
    }
    .table th, .table td {
    border: 1px !important;
    }
    .fixed-table-container {
    border:0px !important;
    }
    input[type="button"] {
    transition: all .3s;
    border: 1px solid #ddd;
    padding: 3px 10px;
    text-decoration: none;
    border-radius: 5px;
    font-size: 15px;
    }
    input[type="button"]:not(.active) {
    background-color:transparent;
    }
    .active {
    background-color: #299BFF;
    color :#fff;
    }
    input[type="button"]:hover:not(.active) {
    background-color: #ddd;
    }
    </style>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-lg-2">
          <nav class="navbar navbar-default navbar-fixed-side">
            <div class="container">
              <div class="navbar-header bg-primary text-white">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a style="color:#fff;height: 73px;" class="navbar-brand text-white" href="#">
                  <!-- <img style="width: 47px;" id="profile-img" class="profile-img-card" src="" /> --><i class="fa fa fa-users fa-2x"></i> Soberano</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                      <li><a class="text-uppercase" href="#" id="" data-toggle="collapse" data-target="#opcionesMenu" aria-expanded="false"><i class="fa fa-user-circle"></i> 
                      <?php  
                      $usuario = Session::get('current_user');
                      echo $usuario['name'];
                      ?>
                      </a>
                      <ul class="nav collapse" id="opcionesMenu" role="menu" aria-labelledby="btn-1">
                        <li><a href="<?php echo baseUrl ?>auth/login/logout"><i class="fa fa-power-off"></i> Salir</a></li>
                      </ul>
                    </li>
                  </ul>
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="<?php echo baseUrl ?>"><i class="fa fa-folder-open"></i> INGRESAR SOLICITUD</a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                      <li><a href="#" id="" data-toggle="collapse" data-target="#consultasMenu" aria-expanded="false"><i class="fa fa-clipboard"></i> CONSULTAS</a>
                      <ul class="nav collapse" id="consultasMenu" role="menu" aria-labelledby="btn-1">
                      <li><a href="<?php echo baseUrl ?>admin/consultas/solicitante"><i class="fa fa-user"></i> SOLICITANTE</a></li>
                        <li><a href="<?php echo baseUrl ?>admin/consultas/solicitud"><i class="fa fa-clipboard"></i> SOLICITUD</a></li>
                      </ul>
                    </li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                      <li><a href="#" id="" data-toggle="collapse" data-target="#solicitudesMenu" aria-expanded="false"><i class="fa fa-clipboard"></i> SOLICITUDES</a>
                      <ul class="nav collapse" id="solicitudesMenu" role="menu" aria-labelledby="btn-1">
                      <li><a href="<?php echo baseUrl ?>admin/solicitudes"><i class="fa fa-unlock"></i> ABIERTAS</a></li>
                        <li><a href="<?php echo baseUrl ?>admin/consultas/cerradas"><i class="fa fa-lock"></i> CERRADAS</a></li>
                        <li><a href="<?php echo baseUrl ?>admin/consultas/aprobadas"><i class="fa fa-check-square"></i> APROBADAS</a></li>
                        <li><a href="<?php echo baseUrl ?>admin/consultas/rechazadas"><i class="fa fa-window-close"></i> RECHAZADAS</a></li>
                        <li><a href="<?php echo baseUrl ?>admin/consultas/entregadas"><i class="fa fa-window-close"></i> ENTREGADAS</a></li>
                      </ul>
                    </li>
                  </ul>
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="<?php echo baseUrl ?>admin/estadisticas"><i class="fa fa-area-chart"></i> ESTADISTICAS</a></li>
                  </ul>
                </div><!--/.nav-collapse -->
              </div>
            </nav>
          </div>
          <div class="col-sm-9 col-lg-10">
            <!-- <img width="100%" height="130px;" src="<?php echo baseUrl ?>/assets/img/banner.jpg" alt=""> -->
            <br>
            <?php echo $content ?>
          </div>
        </div>
      </div>
      <!-- /container -->
      <!-- MENSAJES FLASH SWEET ALERT 2 -->
      <?php if (Message::hasMessages()): ?>
      <?php echo Message::show() ?>
      <?php endif ?>
      <?php if (Message::hasQuestion()): ?>
      <?php echo Message::showQuestion() ?>
      <?php endif ?>
      <script type="text/javascript">
      // get the table element
      var $table = document.getElementById("tablePagination"),
      // number of rows per page
      $n = 5,
      // number of rows of the table
      $rowCount = $table.rows.length,
      // get the first cell's tag name (in the first row)
      $firstRow = $table.rows[0].firstElementChild.tagName,
      // boolean var to check if table has a head row
      $hasHead = ($firstRow === "TH"),
      // an array to hold each row
      $tr = [],
      // loop counters, to start count from rows[1] (2nd row) if the first row has a head tag
      $i,$ii,$j = ($hasHead)?1:0,
      // holds the first row if it has a (<TH>) & nothing if (<TD>)
        $th = ($hasHead?$table.rows[(0)].outerHTML:"");
        // count the number of pages
        var $pageCount = Math.ceil($rowCount / $n);
        // if we had one page only, then we have nothing to do ..
        if ($pageCount > 1) {
        // assign each row outHTML (tag name & innerHTML) to the array
        for ($i = $j,$ii = 0; $i < $rowCount; $i++, $ii++)
        $tr[$ii] = $table.rows[$i].outerHTML;
        // create a div block to hold the buttons
      $table.insertAdjacentHTML("afterend","<div id='buttons'></div");
      // the first sort, default page is the first one
      sort(1);
      }
      // ($p) is the selected page number. it will be generated when a user clicks a button
      function sort($p) {
      /* create ($rows) a variable to hold the group of rows
      ** to be displayed on the selected page,
      ** ($s) the start point .. the first row in each page, Do The Math
      */
      var $rows = $th,$s = (($n * $p)-$n);
      for ($i = $s; $i < ($s+$n) && $i < $tr.length; $i++)
      $rows += $tr[$i];
      
      // now the table has a processed group of rows ..
      $table.innerHTML = $rows;
      // create the pagination buttons
      document.getElementById("buttons").innerHTML = pageButtons($pageCount,$p);
      // CSS Stuff
      document.getElementById("id"+$p).setAttribute("class","active");
      }
      // ($pCount) : number of pages,($cur) : current page, the selected one ..
      function pageButtons($pCount,$cur) {
      /* this variables will disable the "Prev" button on 1st page
      and "next" button on the last one */
      var $prevDis = ($cur == 1)?"disabled":"",
      $nextDis = ($cur == $pCount)?"disabled":"",
      /* this ($buttons) will hold every single button needed
      ** it will creates each button and sets the onclick attribute
      ** to the "sort" function with a special ($p) number..
      */
      $buttons = "<input type='button' value='&lt;&lt; Prev' onclick='sort("+($cur - 1)+")' "+$prevDis+">";
      for ($i=1; $i<=$pCount;$i++)
      $buttons += "<input type='button' id='id"+$i+"'value='"+$i+"' onclick='sort("+$i+")'>";
      $buttons += "<input type='button' value='Next &gt;&gt;' onclick='sort("+($cur + 1)+")' "+$nextDis+">";
      return $buttons;
      }
      </script>
    </body>
  </html>