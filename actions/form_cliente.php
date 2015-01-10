<?php
require_once '../classes/Sistema.php';
if(isset($_POST['acao'])){
    if($_POST['acao'] == 'Salvar'){
       $nome = $_POST['nome'];
        $rg = $_POST['rg'];
        $cpf = $_POST['cpf'];
        $nascimento = $_POST['nascimento'];
        $estadocivil = $_POST['estadocivil'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $uf = $_POST['uf'];
        $fone1 = $_POST['fone1'];
        $fone2 = $_POST['fone2'];
        $email = $_POST['email'];
        $obs = $_POST['obs'];
        
        $data = explode("/", $nascimento);
        $nascimento = $data[2].'-'.$data[1].'-'.$data[0];
        
        $cliente = new Cliente($nome, $rg, $cpf, $nascimento, $estadocivil, $endereco, $bairro, $cidade, $uf, $fone1, $fone2, $email, $obs);
        $dao = new Sistema();
        $codigo = $dao->saveCliente($cliente);
        if($codigo){
            header("Location:/teste/home?opcao=operacao&cod=$codigo&cpf=$cpf");
        }
        else{
            header("Location:/teste/home?opcao=operacao&cod=$codigo");
        }
    }
    if($_POST['acao'] == 'Salvar Processo'){
        $numero = $_POST['numero'];
        $especie = $_POST['especie'];
        $vara = $_POST['vara'];
        $status = $_POST['status'];
        $data_pericia = $_POST['data_pericia'];
        $data_audiencia = $_POST['data_audiencia'];
        if(isset($_POST['pendencia_doc'])){
            $pendencia_doc = $_POST['pendencia_doc'];
        }else{
            $pendencia_doc = 0;
        }
        $obs_pendencia = $_POST['obs_pendencia'];
        $cliente_id = $_POST['cliente_id'];
        
        if($data_audiencia != null){
            $vetor = explode("-", $data_audiencia);
            $data = explode("/", $vetor[0]);
            $data_audiencia = $data[2].'-'.$data[1].'-'.$data[0].' '.$vetor[1].':00';
        }
        if($data_pericia != null){
            $vetor = explode("-", $data_pericia);
            $data = explode("/", $vetor[0]);
            $data_pericia = $data[2].'-'.$data[1].'-'.$data[0].' '.$vetor[1].':00';
        }
        $processo = new Processo($numero, $especie, $vara, $status, $data_audiencia, $data_pericia, $pendencia_doc, $obs_pendencia, $cliente_id);
        $dao = new Sistema();
        $codigo = $dao->saveProcesso($processo);
        //echo $codigo;
        if($codigo){
            header("Location:/teste/home?opcao=operacao_processo&cod=$codigo&numero=$numero&cliente_id=$cliente_id");
        }
        else{
            header("Location:/teste/home?opcao=operacao_processo&cod=$codigo&cliente_id=$cliente_id");
        }
    }
}
else{
    header("Location:/teste/");
}