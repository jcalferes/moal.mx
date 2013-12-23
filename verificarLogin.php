<?php
include './clases/usuario.php';
include './dao/dao.php';
$usuario = new usuario();
$dao = new dao();
$usuario->setUsuario($_GET["usua"]);
$usuario->setPass($dao->genera_md5($_GET["pass"]));
$existe=$dao->validarLogin($usuario);
if($existe == true){
    header('Location: index.php');
}else{
    echo "<script> alertify.error('mal')</script>";
}
