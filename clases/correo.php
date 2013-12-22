<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Correo
 *
 * @author comod_000
 */
class correo {

    private $mensaje;
    private $para;
    private $asunto;
    private $de;

    public function getMensaje() {
        return $this->mensaje;
    }

    public function getPara() {
        return $this->para;
    }

    public function getAsunto() {
        return $this->asunto;
    }

    public function getDe() {
        return $this->de;
    }

    public function setMensaje($mensaje) {
        $this->mensaje = $mensaje;
    }

    public function setPara($para) {
        $this->para = $para;
    }

    public function setAsunto($asunto) {
        $this->asunto = $asunto;
    }

    public function setDe($de) {
        $this->de = $de;
    }

}
