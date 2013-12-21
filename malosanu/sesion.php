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
        <title>Administracion - Nombre de la empresa</title>
        <link rel="icon" type="image/png" href="#">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <!-- Bootstrap -->
        <!--        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
                <link href="../bootstrap/css/bootstrap-theme.css" rel="stylesheet" media="screen">-->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
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
                <div class="col-lg-12 col-left">
                    <section>
                        <div class="row">
                            <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 ">
                                <!--input contact-->
                                <h1>Iniciar Sesion</h1>
                                <h1 class="spacer">___</h1>
                                <div class="panel panel-default contact btn-footer">
                                    <form class="form-signin" role="form">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label for="contactUsuario">Usuario</label>
                                                <input id="txtusuario" type="text" class="form-control" required autofocus>
                                            </div>
                                            <div class="form-group">
                                                <label for="contactPassword">Password</label>
                                                <input id="txtpass" type="password" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <!--<a class="btn btn-grey btn-lg btn-block">Iniciar Session</a>-->
                                            <input type="submit" class="btn btn-grey btn-lg btn-block" value="Iniciar Sesion"/>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>    
                    </section>
                </div>
            </div>                        
        </div>  
<!--        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../bootstrap/js/jquery.js"></script>-->
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
