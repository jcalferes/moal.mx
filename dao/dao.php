<?php

class dao{

function insertarProducto(producto $p){
     include '../DaoConnection/coneccion.php';
        $cn = new coneccion();
        $sql = "INSERT INTO producto(nombreProducto, precioProducto, descripcionProducto)
                VALUES('" . $calificaciones->getUsuario() . "',
                '" . $p->getNombreProducto() . "',
                '" . $p->getPrecioProducto() . "', 
                '" . $p->getDescripcionProducto() . "')";
        mysql_query($sql, $cn->Conectarse());
    
    
}



    function validarLogin(usuario $u) {
//        include '../DaoConnection/coneccion.php';
        $paso = false;
        $cn= new coneccion();
        
        $sql = "SELECT * FROM usuario WHERE usuario='" . $u->getUsuario() . "' AND pass='" . $u->getPass() . "'";
        $dato = mysql_query($sql, $cn->Conectarse());
        $columnas = mysql_affected_rows();
        if ($columnas > 0) {
            $paso = true;
        } else {
            $paso = false;
        }
        $cn->cerrarBd();
        return $paso;
    }
    
    
    function genera_md5($clave) {
        $codificado = md5($clave);
        return $codificado;
    }

    

}
