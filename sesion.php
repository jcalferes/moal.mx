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
        <link href="malosanu/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="malosanu/css/style.css" rel="stylesheet" media="screen">
        <link href="alertify3/themes/alertify.core.css" rel="stylesheet" media="screen">
        <link href="alertify3/themes/alertify.default.css" rel="stylesheet" media="screen">

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
                        <a class="navbar-brand" href="#"><img class="" src="malosanu/img/moallogosm.png" style="width: 250px" ></a>
                    </div>
                </nav>
            </div>
            <div class="row bottom">
                <div class="col-lg-12 col-left">
                    <section>
                        <div class="row">
                            <div class="col-lg-4 col-lg-offset-4  col-md-4  col-md-offset-4 col-sm-5 col-sm-offset-4  ">
                                <!--input contact-->
                                <h1>Iniciar Sesion</h1>
                                <h1 class="spacer">___</h1>
                                <div class="panel panel-default contact btn-footer">

                                    <div class="panel-body">
                                        <form class="form-signin" role="form">
                                            <div class="form-group">
                                                <label for="contactUsuario">Usuario</label>
                                                <input id="txtusuario" type="text" class="form-control" required="bababa" autofocus>
                                            </div>
                                            <div class="form-group">
                                                <label for="contactPassword">Password</label>
                                                <input id="txtpass" type="password" class="form-control" required>
                                            </div>
                                    </div>
                                    </form>
                                    <div class="panel-footer">
                                        <!--<a class="btn btn-grey btn-lg btn-block">Iniciar Session</a>-->
                                        <input id="iniciar" type="submit" class="btn btn-grey btn-lg btn-block" value="Iniciar Sesion"/>
                                    </div>

                                </div>
                            </div>
                        </div>    
                    </section>
                </div>
            </div>                        
        </div>  
        <script src="malosanu/js/jquery.js"></script>
        <script src="alertify3/lib/alertify.min.js"></script>
        <!-- FASTCLICK -->
        <script src="malosanu/js/plugins/fastclick/"></script>
        <!-- SMOOTH SCROLL -->
        <script src="malosanu/js/plugins/smooth-scroll/jquery.smooth-scroll.min.js"></script>
        <!-- MIXITUP -->
        <script src="malosanu/js/plugins/mixitup/jquery.mixitup.min.js"></script>
        <script src="malosanu/js/main.js"></script>
        <script>
            $(document).ready(function() {
                $('#iniciar').click(function() {
                    var usua = $("#txtusuario").val();
                    var pass = $('#txtpass').val();
                    if (usua != "" && pass != "") {
                        $(this).load("verificarLogin.php?usua=" + usua + "&pass=" + pass);
                    } else {
                    }
                
                
                });
            });
        </script>
    </body>
</html>
