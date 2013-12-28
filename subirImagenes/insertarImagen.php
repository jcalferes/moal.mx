<?php
include '../clases/producto.php';
include '../Dao/dao.php';
$dao = new dao();

$producto= new producto();

$data = json_decode(stripslashes($_POST['data']));

    
    
    $producto->setNombreProducto($data[0]);
    $producto->setPrecioProducto($data[1]);
    $producto->setDescripcionProducto($data[2]);
 
   
    


$datos = $dao->insertarProducto($data[0], $usuario, $data[1]);

