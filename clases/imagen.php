<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of imagen
 *
 * @author Angel Solis
 */
class imagen {
    private $id;
    private $ruta;
    private $tipo;
    
    public function getId() {
        return $this->id;
    }

    public function getRuta() {
        return $this->ruta;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setRuta($ruta) {
        $this->ruta = $ruta;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }


}
