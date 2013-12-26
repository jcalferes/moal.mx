<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Nombre Empresa</title>
        <link rel="icon" type="image/png" href="#">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <!-- Bootstrap -->
        <link href="malosanu/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="malosanu/css/style.css" rel="stylesheet" media="screen">
        <script src="malosanu/js/jquery.js"></script>
        <script>
            function mi_funcion(a)                    
            {
            var algo = a;
$('#mostrarInfo').load('funciones/mostrarInfo.php?id='+algo);
               
            }

            $(document).ready(function() {
                $('#mostrar').load('funciones/cargarImagen.php');
            });
        </script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="js/bootstrap/html5shiv.js"></script>
          <script src="js/bootstrap/respond.min.js"></script>
        
        <![endif]-->

    </head>
    <body class="page-index">
        <div class="container" id="container">
            <a onclick="mi_funcion()"></a>
            <div class="row top">
                <nav class="navbar navbar-inverse" role="navigation" style="margin-top: -6px">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img class="" src="malosanu/img/moallogosm.png" style="width: 250px" ></a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php">Inicio</a></li>
                            <li><a href="contacto.php">Contacto</a></li>
                            <li><a href="">Otro</a></li>
                            <li><a href="">Otro</a></li>
                            <li><a href="">Otro</a></li>
                            <li><a href="">Otro</a></li>
                            <li><a href="">Otro</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="row bottom">
                <div class="col-lg-8 col-md-8 col-sm-7 col-left">
                    <div id="mostrarInfo">
                        
                    </div>
                    
                    
                  
                </div>
                <div class="col-lg-4 col-md-4 col-sm-5 col-right">
                    <div id="scroll-shadow"></div> 

                    <h1 class="visible-xs section-header">Promociones</h1>
                    <h1 class="visible-xs text-center spacer">___</h1>
                    <!-- Aqui dentro va el contenido de las promociones -->
                    <div  id="mostrar">

                    </div>
                    <!-- Fin del contenido de las promociones -->
                    <section class="row" id="Grid"></section>
                    <a class="btn btn-block scroll-top visible-xs">
                        <img src="malosanu/img/icon/icon-chevron.png" alt="Ir arriba">
                    </a>
                </div>
            </div>                        
        </div>  
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- FASTCLICK -->
        <script src="malosanu/js/plugins/fastclick/"></script>
        <!-- SMOOTH SCROLL -->
        <script src="malosanu/js/plugins/smooth-scroll/jquery.smooth-scroll.min.js"></script>
        <!-- MIXITUP -->
        <script src="malosanu/js/plugins/mixitup/jquery.mixitup.min.js"></script>
        <script src="malosanu/js/main.js"></script>
    </body>
</html>
