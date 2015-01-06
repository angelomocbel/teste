<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php require_once '../classes/ClienteDAO.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if (isset($_GET['id'])) {
            $dao = new ClienteDAO();
            $id = $_GET['id'];
            $cliente = $dao->getById($id);
            if ($cliente != null) {
                $nome = $cliente->getNome();
                $cpf = $cliente->getCpf();
                print "<form c method='post' action='../actions/form_cliente.php'>
                <p>Nome:<input type='text' name='nome' value='$nome'/></p>
                <p>CPF:<input type='text' name='cpf' value='$cpf'/></p>
                <p><input type='submit' name='acao' value='Atualizar'/></p>
                </form>";
            }
            else{
                echo 'Id não encontrado';
            }
        } else {
            echo 'Id não informado';
        }
        ?>
    </body>
</html>
