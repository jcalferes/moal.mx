<?php
include '../clases/imagen.php';
include '../DaoConnection/coneccion.php';
$cn = new coneccion();
$id=$_GET["id"];
$sql = "SELECT * FROM imagen i, producto p, ofertas o Where i.idImagen = p.idimagen and o.idProductoOferta= p.idProducto AND idProducto=$id";
$datos = mysql_query($sql, $cn->Conectarse());
// $imagen= new imagen();
// while($rs=mysql_fetch_array($datos)){
//     $imagen->setId($rs["id"]);
//     $imagen->setRuta($rs["ruta"]);
//     $imagen->setTipo($rs["tipo"]);
//      }
while ($rs = mysql_fetch_array($datos)) {
     echo "<center><img src='" . $rs["ruta"] . "' width=50% > "
             . "<p class='item-description'>" . $rs["nombreProducto"] . "</p></br>"
             . "<p class='item-description'>$" . $rs["Precio"] . "</p></br>"
             . "<p class='item-description'>" . $rs["descripcion"] . "</p></br></center>";
    
}