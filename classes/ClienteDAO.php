<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClienteDAO
 *
 * @author Miguel Home
 */
include_once 'Database.class.php';
include_once 'Cliente.class.php';
class ClienteDAO extends Database {
    public function __construct() {
        parent::__construct();
    }
    
    public function save(Cliente $cliente){
        $pedido = $cliente->getQuerySelectBy('cpf', $cliente->getCpf());
        
        $resultado = $this->realizar($pedido);
        if(count($resultado) > 0){
            return 2; //CPF já cadastrado
        }else{
            $pedido = $cliente->getQueryInsert();
            //echo $pedido;
            return $this->realizar($pedido);
        }
    }
    
    public function delete(Cliente $cliente){
        $pedido = $cliente->getQueryDelete();
        return $this->realizar($pedido);
    }
    
    public function getAll(){
        $clientes = array();
        $pedido = Cliente::getQuerySelect();
        $resultado = $this->realizar($pedido);
        if(count($resultado) > 0){
            foreach ($resultado as $r){
                $clientes[]=$this->getCliente($r);
            }
            return $clientes;
        }
        return null;
    }
    
    
    public function get($campo, $valor){
        $clientes = array();
        if($campo == 'id' || $campo == 'cpf'){
            $pedido = Cliente::getQuerySelectBy($campo, $valor);
        }
        if($campo == 'nome'){
            $pedido = Cliente::getQuerySelectByName($valor);    
        }
        $resultado = $this->realizar($pedido);
        foreach ($resultado as $r){
            $clientes[]=$this->getCliente($r);
        }
        return $clientes;
    }
    
    public function getCliente($r){
        $id = $r['id'];
        $nome = $r['nome'];
        $rg = $r['rg'];
        $cpf = $r['cpf'];
        $nascimento = $r['nascimento'];
        $estadocivil = $r['estadocivil'];
        $endereco = $r['endereco'];
        $bairro = $r['bairro'];
        $cidade = $r['cidade'];
        $uf = $r['uf'];
        $fone1 = $r['fone1'];
        $fone2 = $r['fone2'];
        $email = $r['email'];
        $obs = $r['obs'];
        $c = new Cliente($nome, $rg, $cpf, $nascimento, $estadocivil, $endereco, $bairro, $cidade, $uf, $fone1, $fone2, $email, $obs);
        $c->setId($id);
        return $c;
    }
}
