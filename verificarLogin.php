<?php

include './clases/usuario.php';
include './dao/dao.php';
include 'DaoConnection/coneccion.php';
$usuario = new usuario();

$dao = new dao();
$usuario->setUsuario($_GET["usua"]);
$usuario->setPass($dao->genera_md5($_GET["pass"]));
$existe = $dao->validarLogin($usuario);
if ($existe == true) {
    echo " <script>
             document.location.href='indexadmin.php';
        </script>";
//    header('Location: index.php');
} else {
    echo "<script> alertify.error('Usuario o Password incorrecto')</script>";
}
