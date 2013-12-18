<?php
include '../clases/imagen.php';
include '../DaoConnection/coneccion.php';
 $cn = new coneccion();
 $sql="SELECT * FROM imagen i, producto p, ofertas o Where i.idImagen = p.idimagen and o.idProductoOferta= p.idProducto order by rand()";
 $datos=  mysql_query($sql,$cn->Conectarse());
// $imagen= new imagen();
// while($rs=mysql_fetch_array($datos)){
//     $imagen->setId($rs["id"]);
//     $imagen->setRuta($rs["ruta"]);
//     $imagen->setTipo($rs["tipo"]);
//      }
while($rs=mysql_fetch_array($datos)){
 echo"<img src='".$rs["ruta"]. "' width=110 height=80>";
    
    
}

   
    
    
 
?>
