<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <script src="<?php echo baseUrl ?>assets/bower/jquery/dist/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/sweetalert2/dist/sweetalert2.min.css">
        <script src="<?php echo baseUrl ?>assets/bower/sweetalert2/dist/sweetalert2.min.js"></script>
        
    </head>
    <body>
        <nav class="z-depth-2">
            <div class="nav-wrapper red darken-2 z-depth-2">
                <img style="margin-top: -10px;" width="80px;" src="<?php echo baseUrl ?>assets/img/gobarinas.png" alt="">
                <a href="#" class="brand-logo">SOBERANO</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="<?php echo baseUrl ?>home/principal">INICIO</a></li>
                    <li><a href="<?php echo baseUrl ?>home/principal/consulta">CONSULTAS</a></li>
                    <li><a href="<?php echo baseUrl ?>auth/login">LOGIN</a></li>
                </ul>
            </div>
        </nav>
        <!--<img class="z-depth-2" width="100%" height="150px;" src="<?php echo baseUrl ?>assets/img/banner.jpg" alt=""> -->
        <!-- jQuery -->

        <?php echo $content ?>
        <!-- /container -->
        <!-- MENSAJES FLASH SWEET ALERT 2 -->
        <?php if (Message::hasMessages()): ?>
        <?php echo Message::show() ?>
        <?php endif ?>
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