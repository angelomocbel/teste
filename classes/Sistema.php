<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Sistema
 *
 * @author migue_000
 */
include_once 'Cliente.class.php';
include_once 'Processo.class.php';
include_once 'Database.class.php';
class Sistema extends Database {
    public function __construct() {
        parent::__construct();
    }
    
    public function saveCliente(Cliente $cliente){
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
    
    public function deleteCliente(Cliente $cliente){
        $pedido = $cliente->getQueryDelete();
        return $this->realizar($pedido);
    }
    
    public function getAllCliente(){
        $clientes = array();$pedido = Cliente::getQuerySelect();$resultado = $this->realizar($pedido);
        if(count($resultado) > 0){
            foreach ($resultado as $r){
                $clientes[]=$this->getCliente($r);
            }
            return $clientes;
        }
        return null;
    }
    
    
    public function getClienteBy($campo, $valor){
        $clientes = array();
        if($campo == 'nome'){
            $pedido = Cliente::getQuerySelectByName($valor);    
        }else{
            $pedido = Cliente::getQuerySelectBy($campo, $valor);
        }
        $resultado = $this->realizar($pedido);
        foreach ($resultado as $r){
            $clientes[]=$this->getCliente($r);
        }
        return $clientes;
    }
    
    public function getCliente($r){
        $id = $r['id'];$nome = $r['nome'];$rg = $r['rg'];$cpf = $r['cpf'];$nascimento = $r['nascimento'];$estadocivil = $r['estadocivil'];
        $endereco = $r['endereco'];$bairro = $r['bairro'];$cidade = $r['cidade'];$uf = $r['uf']; $fone1 = $r['fone1'];$fone2 = $r['fone2'];
        $email = $r['email'];$obs = $r['obs'];
        $c = new Cliente($nome, $rg, $cpf, $nascimento, $estadocivil, $endereco, $bairro, $cidade, $uf, $fone1, $fone2, $email, $obs);
        $c->setId($id);
        return $c;
    }
    
    public function saveProcesso(Processo $processo){
        $pedido = $processo->getQuerySelectBy('numero', $processo->getNumero());
        
        $resultado = $this->realizar($pedido);
        if(count($resultado) > 0){
            return 2; //CPF já cadastrado
        }else{
            $pedido = $processo->getQueryInsert();
            //echo $pedido;
            return $this->realizar($pedido);
        }
    }
    public function deleteProcesso(Processo $processo){
        $pedido = $processo->getQueryDelete();
        return $this->realizar($pedido);
    }
    
    public function getAllProcesso(){
        $processos = array();$pedido = Processo::getQuerySelect();$resultado = $this->realizar($pedido);
        if(count($resultado) > 0){
            foreach ($resultado as $r){
                $processos[]=$this->getProcesso($r);
            }
            return $processos;
        }
        return null;
    }
    
    
    public function getProcessoBy($campo, $valor){
        $processos = array();
        $pedido = Processo::getQuerySelectBy($campo, $valor);
        $resultado = $this->realizar($pedido);
        foreach ($resultado as $r){
            $processos[]=$this->getProcesso($r);
        }
        return $processos;
    }
    
    private function getProcesso($r){
        $numero = $r['numero'];
        $especie = $r['especie'];
        $vara = $r['vara'];
        $status = $r['status'];
        $data_audiencia = $r['data_audiencia'];
        $data_pericia = $r['data_pericia'];
        $pendencia_doc = $r['pendencia_doc'];
        $obs_pendencia = $r['obs_pendencia'];
        $cliente_id = $r['cliente_id'];
        $p = new Processo($numero, $especie, $vara, $status, $data_audiencia, $data_pericia, $pendencia_doc, $obs_pendencia, $cliente_id);
        return $p;
    }
}
