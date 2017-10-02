<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/sweetalert2/dist/sweetalert2.min.css">
        <script src="<?php echo baseUrl ?>assets/bower/sweetalert2/dist/sweetalert2.min.js"></script>
</head>
<body>
 <nav class="z-depth-2">
    <div class="nav-wrapper red darken-2 z-depth-2">
      <a href="#" class="brand-logo">SOBERANO</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">SOLICITUDES</a></li>
        <li><a href="badges.html">CONSULTAS</a></li>
        <li><a href="collapsible.html">LOGIN</a></li>
      </ul>
    </div>
  </nav>
<!--<img class="z-depth-2" width="100%" height="150px;" src="<?php echo baseUrl ?>assets/img/banner.jpg" alt=""> -->


<?php echo $content ?>
<!-- /container -->
<!-- MENSAJES FLASH SWEET ALERT 2 -->
<?php if (Message::hasMessages()): ?>
<?php echo Message::show() ?>
<?php endif ?>

        <!-- jQuery -->
   <script src="<?php echo baseUrl ?>assets/bower/jquery/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>




      <!-- Navbar
      ================================================== -->
 
<script>
        $(document).ready(function(){
      $('.slider').slider();
    });
</script>
  </body>
</html>

