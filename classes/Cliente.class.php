<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cliente
 *
 * @author Miguel Home
 */
class Cliente {
    private $id;
    private $nome;
    private $rg;
    private $cpf;
    private $nascimento;
    private $estadocivil;
    private $endereco;
    private $bairro;
    private $cidade;
    private $uf;
    private $fone1;
    private $fone2;
    private $email;
    private $obs;
    
    
    private $processos;
    
    public function addProcesso($processo){
        if($this->processos == NULL){
            $this->processos = array();
        }
        $this->processos[] = $processo;
    }
    
    public static function getQuerySelectByName($valor){
        return "SELECT * FROM `cliente` WHERE nome LIKE '%$valor%';";
    }
    
    public function getQueryInsert(){
        return "INSERT INTO `cliente`"
        . "(`nome`,`rg`,`cpf`,`nascimento`,`estadocivil`,`endereco`,`bairro`,`cidade`,`uf`,`fone1`,`fone2`,`email`,`obs`) VALUES "
        . "('$this->nome','$this->rg','$this->cpf','$this->nascimento','$this->estadocivil',"
        . "'$this->endereco','$this->bairro','$this->cidade','$this->uf',"
        . "'$this->fone1','$this->fone2','$this->email','$this->obs');";
    }
    public function getQueryDelete(){
        return "DELETE FROM `cliente` WHERE id = '$this->id';";
    }
    public static function getQuerySelect(){
        return "SELECT * FROM `cliente`;";
    }
    
    public static function getQuerySelectBy($campo, $valor){
        return "SELECT * FROM `cliente` WHERE $campo = '$valor';";
    }
    public function __construct($nome, $rg, $cpf, $nascimento, $estadocivil, $endereco, $bairro, $cidade, $uf, $fone1, $fone2, $email, $obs) {
        $this->nome = $nome;
        $this->rg = $rg;
        $this->cpf = $cpf;
        $this->nascimento = $nascimento;
        $this->estadocivil = $estadocivil;
        $this->endereco = $endereco;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->uf = $uf;
        $this->fone1 = $fone1;
        $this->fone2 = $fone2;
        $this->email = $email;
        $this->obs = $obs;
    }

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getRg() {
        return $this->rg;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getNascimento() {
        $data = explode("-", $this->nascimento);
        return $data[2].'/'.$data[1].'/'.$data[0];
    }

    function getEstadocivil() {
        return $this->estadocivil;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getEstado() {
        return $this->uf;
    }

    function getTelefone() {
        return $this->fone1;
    }

    function getCelular() {
        return $this->fone2;
    }

    function getEmail() {
        return $this->email;
    }

    function getObs() {
        return $this->obs;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setRg($rg) {
        $this->rg = $rg;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setNascimento($nascimento) {
        $this->nascimento = $nascimento;
    }

    function setEstadocivil($estadocivil) {
        $this->estadocivil = $estadocivil;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setEstado($estado) {
        $this->uf = $estado;
    }

    function setTelefone($telefone) {
        $this->fone1 = $telefone;
    }

    function setCelular($celular) {
        $this->fone2 = $celular;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setObs($obs) {
        $this->obs = $obs;
    }

    
    public function __toString() {
        $data = $this->getNascimento();
        $string = "Id: $this->id<br/>"
                . "Nome: $this->nome<br/>"
                . "CPF: $this->cpf<br/>"
                . "Nascimento: $data<br/>";
        return $string;
    }
}
