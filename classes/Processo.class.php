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
    private $numero;
    private $especie;
    private $vara;
    private $status;
    private $data_audiencia;
    private $data_pericia;
    private $pendencia_doc;
    private $obs_pendencia;
    private $cliente_id;
    
    function getNumero() {
        return $this->numero;
    }

    function getEspecie() {
        return $this->especie;
    }

    function getVara() {
        return $this->vara;
    }

    function getStatus() {
        return $this->status;
    }

    function getData_audiencia() {
        return $this->data_audiencia;
    }

    function getData_pericia() {
        return $this->data_pericia;
    }

    function getPendencia_doc() {
        return $this->pendencia_doc;
    }

    function getObs_pendencia() {
        return $this->obs_pendencia;
    }

    function getCliente_id() {
        return $this->cliente_id;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setEspecie($especie) {
        $this->especie = $especie;
    }

    function setVara($vara) {
        $this->vara = $vara;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setData_audiencia($data_audiencia) {
        $this->data_audiencia = $data_audiencia;
    }

    function setData_pericia($data_pericia) {
        $this->data_pericia = $data_pericia;
    }

    function setPendencia_doc($pendencia_doc) {
        $this->pendencia_doc = $pendencia_doc;
    }

    function setObs_pendencia($obs_pendencia) {
        $this->obs_pendencia = $obs_pendencia;
    }

    function setCliente_id($cliente_id) {
        $this->cliente_id = $cliente_id;
    }
    
    public function __construct($numero, $especie, $vara, $status, $data_audiencia, $data_pericia, $pendencia_doc, $obs_pendencia, $cliente_id) {
        $this->numero = $numero;
        $this->especie = $especie;
        $this->vara = $vara;
        $this->status = $status;
        $this->data_audiencia = $data_audiencia;
        $this->data_pericia = $data_pericia;
        $this->pendencia_doc = $pendencia_doc;
        $this->obs_pendencia = $obs_pendencia;
        $this->cliente_id = $cliente_id;
    }


    
    
}
