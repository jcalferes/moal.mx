<?php

include '../dao/dao.php';
include '../clases/producto.php';
include '../clases/imagen.php';
$dao = new dao();
$producto = new producto();
$imagen = new imagen();
//comprobamos que sea una petición ajax
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

    //obtenemos el archivo a subir
    $producto->setNombreProducto($_POST["nombreProducto"]);
    $producto->setPrecioProducto($_POST["PrecioProducto"]);
    $producto->setDescripcionProducto($_POST["DescripcionProducto"]);
    $file = $_FILES['archivo']['name'];

    //comprobamos si existe un directorio para subir el archivo
    //si no es así, lo creamos
    if (!is_dir("../images/"))
        mkdir("../images/", 0777);

    //comprobamos si el archivo ha subido
    if ($file && move_uploaded_file($_FILES['archivo']['tmp_name'], "../images/" . $file)) {
        $direccion = "../images/" . $file;
        $imagen->setRuta($direccion);
        $dao->insertarProducto($producto, $imagen);
        sleep(3); //retrasamos la petición 3 segundos
        echo $file; //devolvemos el nombre del archivo para pintar la imagen
    }
} else {
    throw new Exception("Error Processing Request", 1);
}