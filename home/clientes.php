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
            $dao = new ClienteDAO();
            $clientes = $dao->getAll();
            if($clientes != null){
                foreach ($clientes as $c){
                    echo $c;
                }
            }else{
                echo 'Sem clientes cadastrados';
            }
        ?>
    </body>
</html>
