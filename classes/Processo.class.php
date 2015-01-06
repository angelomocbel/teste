<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Processo
 *
 * @author migue_000
 */
//relatorios de audiencias e pericias descriminando o data, hora, cliente, processo, especia e vara.
class Processo {
    private $id;
    private $numero;
    private $vara;
    private $especie;
    private $status;
    private $cliente_id;
    
    public function getEspecie() {
        return $this->especie;
    }

    public function setEspecie($especie) {
        $this->especie = $especie;
    }

        public function getCliente_id() {
        return $this->cliente_id;
    }

    public function setCliente_id($cliente_id) {
        $this->cliente_id = $cliente_id;
    }
    
    public function getId() {
        return $this->id;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function __construct($numero, $especie) {
        $this->numero = $numero;
        $this->especie = $especie;
    }

}
