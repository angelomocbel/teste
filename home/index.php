<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php require_once '../classes/Sistema.php';
    $titulo = 'Bem-vindo, selecione uma opção no menu lateral';
    $pagina = "";
    if (isset($_GET['opcao'])) {
        switch ($_GET['opcao']) {
            case 'novo':
                $titulo = 'Cadastrar Novo Cliente';
                $pagina = './formulario_novocliente.php';
                break;
            case 'novoprocesso':
                $titulo = 'Cadastrar Novo Processo';
                $pagina =  './formulario_novoprocesso.php';
                break;
            case 'busca':
                $titulo = 'Buscar Clientes';
                $pagina = './buscar_cliente.php';
                break;
            case 'operacao':
                $titulo = "Operações"; 
                $pagina = './operacao.php';
                break;
            case 'operacao_processo':
                $titulo = "Operações de processo"; 
                $pagina = './operacao_processo.php';
                break;
             case 'info':
                $titulo = "Informações do Cliente"; 
                $pagina = './info.php';
                break;
             case 'infoprocesso':
                $titulo = "Informações do Processo"; 
                $pagina = './info_processo.php';
                break;
            default:
                $titulo = "Desculpe, página não encontrada";
                $pagina = "";
        }
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="../resource/js/jquery-2.1.1.js" type="text/javascript"></script>
        <script src="../resource/js/jquery.validate.js" type="text/javascript"></script>
        <script src="../resource/js/jquery.maskedinput.js" type="text/javascript"></script>
        <script src="../resource/js/minhasfuncoes.js" type="text/javascript"></script>
        <link href="../resource/css/novoestilo.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" href="../resource/img/favicon.png">
        <title>M&M Advocacia Previdenciária</title>
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
                        <li><a title="Voltar para o Início" href="?"><img src="../resource/img/home.png" alt="home"/></a></li>
                        <li><a title="Cadastrar Novo Cliente" href="?opcao=novo"><img src="../resource/img/novo_add.png" alt="novo_cliente"/></a></li>
                        <li><a title="Realizar Buscas" href="?opcao=busca"><img src="../resource/img/novo_search.png" alt=""/></a></li>
                        <li><a title="Exibir Relatórios" href="?opcao=lista"><img src="../resource/img/novo_list.png" alt=""/></a></li>
                        <li><a title="Configurações do Advoc" href="?opcao=config"><img src="../resource/img/novo_settings.png" alt=""/></a></li>
                    </ul>
                    
                    
                    
                    
                </td>
                <td id="titulo">
                    <?php echo $titulo; ?>
                </td>
            </tr>
            <tr>
                <td id="conteudo">
                   
                    <?php
                        if($pagina != ""){
                            include_once $pagina;
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
