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
        <script src="../resource/js/jquery-2.1.1.js" type="text/javascript"></script>
        <script src="../resource/js/jquery.validate.js" type="text/javascript"></script>
        <script src="../resource/js/jquery.maskedinput.js" type="text/javascript"></script>
        <script src="../resource/js/minhasfuncoes.js" type="text/javascript"></script>
        <link href="../resource/css/novoestilo.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <div id="corpo">
        <table id="geral" >
            <tr>
                <td id="banner" colspan="2">Banner</td>
            </tr>
            <tr>
                <td id="menu" rowspan="2">
                    <ul id="opcoes">
                        <li><a title="Cadastrar Novo Cliente" href="?opcao=novo"><img src="../resource/img/novo_add.png" alt="novo_cliente"/></a></li>
                        <li><a title="Realizar Buscas" href="?opcao=busca"><img src="../resource/img/novo_search.png" alt=""/></a></li>
                        <li><a title="Exibir Relatórios" href="?opcao=lista"><img src="../resource/img/novo_list.png" alt=""/></a></li>
                        <li><a title="Configurações do Advoc" href="?opcao=config"><img src="../resource/img/novo_settings.png" alt=""/></a></li>
                    </ul>
                    
                    
                    
                    
                </td>
                <td id="titulo">Titulo da operação</td>
            </tr>
            <tr>
                <td id="conteudo">
                    <?php
                    if (isset($_GET['opcao'])) {
                        switch ($_GET['opcao']) {
                            case 'novo':
                                include './formulario_novocliente.php';
                                break;
                            case 'busca':
                                include './buscar_cliente.php';
                                break;
                            case 'retorno':
                                include './operacao.php';
                                break;
                            default:
                                echo 'Operação inválida';
                        }
                    } else {
                        echo 'Selecione uma operação';
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td id="rodape" colspan="2">Rodapé</td>
            </tr>
        </table>
        </div>
    </body>
</html>
