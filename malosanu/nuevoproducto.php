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
        <title>Nombre Empresa - Contacto</title>
        <link rel="icon" type="image/png" href="#">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <!-- Bootstrap -->
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
        <link href="css/style.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="js/bootstrap/html5shiv.js"></script>
          <script src="js/bootstrap/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="page-contact">
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
                            <li><a href="">Inicio</a></li>
                            <li><a href="">Contacto</a></li>
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
                    <div>
                        <section>
                            <div class="row text-center">
                                <div class="col-lg-12">

                                    <!--input contact-->
                                    <h1>Nuevo producto</h1>
                                    <h1 class="spacer">___</h1>
                                    <p>Ingrese los datos correspondientes al nuevo produto a publicar.</p>
                                    <h4><span class="text-muted">Seccion de promociones</span></h4>
                                    <hr>
                                    <form role="form">
                                        <div class="panel panel-default contact btn-footer">
                                            <div class="panel-body">

                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="txtnombreproducto" placeholder="Nombre del producto" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Seleccione una imagen de producto</label>
                                                    <input type="file" class="form-control" id="flcfotoproducto"/> 
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" rows="5" id="txadescripcion" placeholder="Descripcion breve del producto"></textarea>
                                                </div>
                                            </div>
                                            <h4><span class="text-muted">Detalles de producto</span></h4>
                                            <hr>
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <textarea class="form-control textarea" rows="10" id="txadescripcion" placeholder="Descripcion del producto"></textarea>
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                                <input type="submit" class="btn btn-grey btn-lg btn-block" value="Guardar"/>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>   
                        </section>
                    </div>
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
                                            <img class="img-responsive item-img" src="img/contact/avatar-contact.jpg" alt="Avatar">

                                        </a>
                                    </div>
                                    <div class="panel-body">

                                        <!--your name-->
                                        <a href="#"><h4 class="item-title">Eldun malosanu</h4></a>

                                        <!--your profession / where you live-->
                                        <p class="item-category">Freelance web designer, in Los Angeles</p>

                                        <!--your descritpion / why should we contact you-->
                                        <p class="item-description">Iam virtutem ex consuetudine vitae sermonisque nostri nostri nostri, quicquid increpuisset, ad salutis suae dispendium existim.</p>
                                        <hr>

                                        <!--social networks-->
                                        <div class="item-social text-center">
                                            <a href="#"><img class="social" src="img/icon/icon-facebook.png" alt="Facebook"></a>
                                            <a href="#"><img class="social bis" src="img/icon/icon-twitter.png" alt="Twitter"></a>
                                            <a href="#"><img class="social" src="img/icon/icon-google.png" alt="Google plus"></a>
                                            <a href="#"><img class="social bis" src="img/icon/icon-linkedin.png" alt="Linkedin"></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>    
                    </section>
                </div>
            </div>                        
        </div>  

        <script src="../bootstrap/js/jquery.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <!-- FASTCLICK -->
        <script src="js/plugins/fastclick/fastclick.js"></script>
        <!-- SMOOTH SCROLL -->
        <script src="js/plugins/smooth-scroll/jquery.smooth-scroll.min.js"></script>
        <!-- MIXITUP -->
        <script src="js/plugins/mixitup/jquery.mixitup.min.js"></script>

        <script src="js/main.js"></script>
    </body>
</html>


