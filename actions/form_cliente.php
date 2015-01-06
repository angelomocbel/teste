<?php
require_once '../classes/ClienteDAO.php';
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
        $dao = new ClienteDAO();
        $codigo = $dao->save($cliente);
        if($codigo){
            header("Location:/teste/home?opcao=retorno&cod=$codigo&cpf=$cpf");
        }
        else{
            header("Location:/teste/home?opcao=retorno&cod=$codigo");
        }
    }
}
else{
    header("Location:/teste/");
}