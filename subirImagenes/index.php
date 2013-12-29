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
        <title>Nuevo Producto - MOAL</title>
        <link rel="icon" type="image/png" href="#">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <!-- Bootstrap -->
        <link href="../malosanu/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../malosanu/css/style.css" rel="stylesheet" media="screen">
        <script src="../malosanu/js/jquery.js"></script>
        <script type="text/javascript" src="functions.js"></script>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="js/bootstrap/html5shiv.js"></script>
          <script src="js/bootstrap/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="page-contact">
        <div class="container" id="container">
            <div class="row top">
                <nav class="navbar navbar-inverse" role="navigation" style="margin-top: -6px">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img class="" src="../malosanu/img/moallogosm.png" style="width: 250px" ></a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="indexadmin.php">Inicio</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="row bottom">
                <div class="col-lg-8 col-md-8 col-sm-7 col-left">
                    <section>
                        <div class="row text-center">
                            <div class="col-lg-12">
                                <!--el enctype debe soportar subida de archivos con multipart/form-data-->
                                <h1>Nuevo producto</h1>
                                <h1 class="spacer">___</h1>
                                <p>Ingrese los datos correspondientes al nuevo produto a publicar.</p>
                                <h4><span class="text-muted">Seccion de promociones</span></h4>
                                <hr>
                                <form role="form" enctype="multipart/form-data" class="formulario" id="formu">
                                    <div class="panel panel-default contact btn-footer">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="nombreProducto" name="nombreProducto" placeholder="Nombre del producto">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="PrecioProducto" name="PrecioProducto" placeholder="Precio del prducto">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="DescripcionProducto" name="DescripcionProducto" placeholder="Descripcion del produto">
                                            </div>
                                            <div class="form-group">
                                                <span class="">Selecione un imagen para adjuntar al producto:</span><br>

                                                <hr>
                                                <input class="form-control" name="archivo" type="file" id="imagen" />
                                                <hr>
                                                <!--div para visualizar mensajes-->
                                                <div class="messages"></div><br /><br />
                                                <!--div para visualizar en el caso de imagen-->
                                                <div class="showImage">
                                                    <span class="text-muted"><i>(La imagen de muestra, NO representa el tamaño real de la imagen subida)</i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <input class="btn btn-grey btn-lg btn-block" type="button" value="Guardar" id="botonazo"/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-5 col-right">
                    <div id="scroll-shadow"></div>
                    <section>
                        <div class="row">
                            <div class="col-lg-12">

                                <!--panel contact-->
                                <div class="panel panel-default item">
                                    <div class="panel-heading">
                                        <a href="#">

                                            <!--your image-->    
                                            <img class="img-responsive " style="margin: 0 auto" src="../malosanu/img/MoalLogo.png" alt="">

                                        </a>
                                    </div>
                                    <div class="panel-body">

                                        <!--your name-->
                                        <a href="#"><h4 class="item-title">...</h4></a>

                                        <!--your profession / where you live-->
                                        <p class="item-category">...</p>

                                        <!--your descritpion / why should we contact you-->
                                        <p class="item-description">...</p>
                                        <hr>

                                        <!--social networks-->
                                        <div class="item-social text-center">
                                            <a href="#"><img class="social" src="../malosanu/img/icon/icon-facebook.png" alt="Facebook"></a>
                                            <a href="#"><img class="social bis" src="../malosanu/img/icon/icon-twitter.png" alt="Twitter"></a>
                                            <a href="#"><img class="social" src="../malosanu/img/icon/icon-google.png" alt="Google plus"></a>
                                            <a href="#"><img class="social bis" src="../malosanu/img/icon/icon-linkedin.png" alt="Linkedin"></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>    
                    </section>
                    <a class="btn btn-block scroll-top visible-xs">
                        <img src="../malosanu/img/icon/icon-chevron.png" alt="Ir arriba">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- FASTCLICK -->
    <script src="../malosanu/js/plugins/fastclick/"></script>
    <!-- SMOOTH SCROLL -->
    <script src="../malosanu/js/plugins/smooth-scroll/jquery.smooth-scroll.min.js"></script>
    <!-- MIXITUP -->
    <script src="../malosanu/js/plugins/mixitup/jquery.mixitup.min.js"></script>
    <script src="../malosanu/js/main.js"></script>
</body>
</html>