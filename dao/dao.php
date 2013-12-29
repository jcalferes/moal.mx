<?php

class dao {

    function insertarProducto(producto $p, imagen $i) {
        include '../DaoConnection/coneccion.php';
        $cn = new coneccion();
        $sql = "INSERT INTO producto(nombreProducto, precio, descripcionProducto)
                VALUES('" . $p->getNombreProducto() . "',
                '" . $p->getPrecioProducto() . "', 
                '" . $p->getDescripcionProducto() . "')";
        mysql_query($sql, $cn->Conectarse());
        $cn = new coneccion();
        $sql = "INSERT INTO imagen(ruta)
                VALUES('" . $i->getRuta() . "')";
        mysql_query($sql, $cn->Conectarse());
    }

    function validarLogin(usuario $u) {
//        include '../DaoConnection/coneccion.php';
        $paso = false;
        $cn = new coneccion();

        $sql = "SELECT * FROM admins WHERE usuario='" . $u->getUsuario() . "' AND password='" . $u->getPass() . "'";
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
