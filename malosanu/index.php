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
                <div class="col-lg-8 col-md-8 col-sm-7 col-left">
                    <div class="name"><a href="">Nombre Empresa</a></div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-5 col-right">
                    <nav>
                        <ul class="list-inline" id="menu">
                            <li class="active">
                                <a href="index.php">Inicio</a>
                            </li><!--
                            --><li>
                                <a href="contac.php">Contacto</a>
                            </li><!--
                            --><li>
                            </li><!--
                            --><li>
                                <a href="#"><img class="social" src="img/icon/icon-facebook.png" alt="facebook"></a>
                                <a href="#"><img class="social" src="img/icon/icon-twitter.png" alt="twitter"></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="row bottom">
                <div class="col-lg-8 col-md-8 col-sm-7 col-left">
                    <div>
                        <section>
                            <div class="row text-center" >
                                <div class="col-lg-12">
                                    <!-- Aqui dentro todo el contenido dinamico -->

                                    <!-- Fin de la seccionde contenido dinamico -->
                                </div>
                            </div>   
                        </section>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-5 col-right">
                    <div id="scroll-shadow"></div> 

                    <h1 class="visible-xs section-header">Promociones</h1>
                    <h1 class="visible-xs text-center spacer">___</h1>
                    <!-- =============================AQUI EMPIESA EL CODIGO DE UN CUADRO========================== 
                    <section class="row" id="Grid">
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6 mix web-design">
                                                    <div class="panel panel-default item">
                                                        <div class="panel-heading">
                                                            <a href="project-example.html">
                        
                                                                
                                                                <img class="img-responsive item-img" src="img/work/projet-example-1.png" alt="Work 1">
                        
                                                            </a>
                                                        </div>
                                                        <div class="panel-body">
                        
                                                           
                                                            <a href="project-1.html"><h4 class="item-title">Project Title</h4></a>
                        
                                                            
                                                            <p class="item-category">Logotype</p>
                        
                                                            
                                                            <p class="item-description">Iam virtutem ex consuetudine vitae sermonisque nostri nostri nostri</p>
                                                            <hr>
                        
                                                            
                                                            <p class="item-tags">
                                                                <a href="#">illustration</a> ,
                                                                <a href="#">graphic design</a> ,
                                                                <a href="#">website</a>
                                                            </p>
                        
                                                        </div>
                                                    </div>
                                                </div>
                    </section>
                         =============================AQUI TERMINA EL CODIGO DE UN CUADRO========================== -->
                    <!-- Aqui dentro va el contenido de las promociones -->
                    <div  id="mostrar">

                    </div>
                    <!-- Fin del contenido de las promociones -->
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
