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
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/style.css" rel="stylesheet" media="screen">
        <script src="../bootstrap/js/jquery.js"></script>
        <script src="../bootsTrap/js/bootstrap.js"></script>
        <script>
            $(document).ready(function() {
                $('#mostrar').load('cargarImagen.php');
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

            <div class="row top">
                <nav class="navbar navbar-inverse" role="navigation" style="margin-top: -2px">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Nombre de la Empresa</a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php">Inicio</a></li>
                            <li><a href="contac.php">Contacto</a></li>
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
                    <!--Aqui empiza el codigo a poner el el ECHO-->
                    <!--<div>
                                            <section>
                                                <div class="row text-center" >
                                                    <div class="col-lg-12">
                                                         Aqui dentro todo el contenido de la pagina (imagenes, texto, etc...)
                                                    </div>
                                                </div>   
                                            </section>
                                        </div>-->
                    <!--Aqui termina el codio para poner en el ECHO-->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-5 col-right">
                    <div id="scroll-shadow"></div> 

                    <h1 class="visible-xs section-header">Promociones</h1>
                    <h1 class="visible-xs text-center spacer">___</h1>

                    <!-- Aqui dentro va el contenido de las promociones -->
                    <div  id="mostrar">

                    </div>
                    <!-- Fin del contenido de las promociones -->
                    <!--<section class="row" id="Grid">-->
                    </section>
                    <a class="btn btn-block scroll-top visible-xs">
                        <img src="img/icon/icon-chevron.png" alt="Scroll top">
                    </a>
                </div>
            </div>                        
        </div>  
        <script src="js/jquery.js"></script>
        <!-- FASTCLICK -->
        <script src="js/plugins/fastclick/fastclick.js"></script>
        <!-- SMOOTH SCROLL -->
        <script src="js/plugins/smooth-scroll/jquery.smooth-scroll.min.js"></script>
        <!-- MIXITUP -->
        <script src="js/plugins/mixitup/jquery.mixitup.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
