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
   echo "<div class='col-lg-6 col-md-12 col-sm-12 col-xs-6 mix web-design'>
                            <div class='panel panel-default item'>
                                <div class='panel-heading'>
                                    <a href='project-example.html'>

                                        <!--work image-->
                                        <img src='".$rs["ruta"]. "' width=100% > 
                                    </a>
                                </div>
                                <div class='panel-body'>

                                    <!--work title-->
                                    <a href='project-1.html'><h4 class='item-title'>".$rs["nombreProducto"]."</h4></a>

                                    <!--work short description-->
                                    <p class='item-description'>".$rs["descripcion"]."</p>
                                    <hr>

                                    <!--work tags-->
                                    <p class='item-tags'>
                                       <!-- <a href='#'>illustration</a> ,-->
                                       <!-- <a href='#'>graphic design</a> ,-->
                                        <!--<a href='#'>website</a>-->
                                    </p>

                                </div>
                            </div>
                        </div>";
// echo"<img src='".$rs["ruta"]. "' width=50% > ";
    
    
}

   
    
    
 

