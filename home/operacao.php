<?php
    $cod = $_GET['cod'];
    if($cod == 1){
    
?>

    <h3>Cliente Salvo com sucesso<br></h3>
    <input type="submit" value="Cadastrar Processo" name="novoprocesso" />
    <input type="button" value="Novo Cliente" name="novocliente" onclick="location.href='/teste/home/?opcao=novo'" />
    <input type="button" value="Voltar para o Início" name="home" onclick="location.href='/teste/home/'"/>


<?php

    }
    else{
       print 'nada';
    }
?>