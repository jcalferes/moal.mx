<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of producto
 *
 * @author Angel Solis
 */
class producto {
    private $nombreProducto;
    private $precioProducto;
    private $descripcionProducto;
    public function getNombreProducto() {
        return $this->nombreProducto;
    }

    public function getPrecioProducto() {
        return $this->precioProducto;
    }

    public function getDescripcionProducto() {
        return $this->descripcionProducto;
    }

    public function setNombreProducto($nombreProducto) {
        $this->nombreProducto = $nombreProducto;
    }

    public function setPrecioProducto($precioProducto) {
        $this->precioProducto = $precioProducto;
    }

    public function setDescripcionProducto($descripcionProducto) {
        $this->descripcionProducto = $descripcionProducto;
    }


}
