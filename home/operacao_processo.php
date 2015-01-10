<?php
    include_once '../classes/Sistema.php';
    $dao = new Sistema();
    $mensagem = "";
    $numero = "";
    $id;
    if(isset($_GET['cod'])){
        $codigo = $_GET['cod'];
        $cliente_id = $_GET['cliente_id'];
        if($codigo == 1){
            $numero = $_GET['numero'];
            $mensagem = "Processo salvo com sucesso!";
            
            
?>
<sucess><?php echo $mensagem; ?></sucess>
<fieldset>
    <legend>Operações</legend>
    
    <table>
        <tr>
            <td>
                <input class="botao" type="button" value="Novo processo para o mesmo cliente" onclick="location.href='/teste/home/?opcao=novoprocesso&cliente_id=<?php echo $cliente_id; ?>'"/>
                <input class="botao" type="button" value="Novo Cliente" onclick="location.href='/teste/home/?opcao=novo'"/>
                <input class="botao" type="button" value="Ver Info. do Processo cadastrado" onclick="location.href='/teste/home/?opcao=info_processo&numero=<?php echo $numero; ?>'"/>
            </td>
        </tr>
    </table>
</fieldset>
<?php
        }
        if($codigo == 2){
            $mensagem = "Erro: Processo já cadastrado no sistema!";
            
 ?>
<erro><?php echo $mensagem; ?></erro>
<fieldset>
    <legend>Operações</legend>
    
    <table>
        <tr>
            <td>
                <input class="botao" type="button" value="Voltar para o cadastro" onclick="history.back()"/>
                <input class="botao" type="button" value="Novo processo para o mesmo cliente" onclick="location.href='/teste/home/?opcao=novoprocesso&cliente_id=<?php echo $cliente_id; ?>'"/>
            </td>
        </tr>
    </table>
</fieldset>
<?php
        }
        if($codigo == 0){
            $mensagem = "Erro: Não foi possível salvar o processo!";
            
 ?>
<erro><?php echo $mensagem; ?></erro>
<fieldset>
    <legend>Operações</legend>
    
    <table>
        <tr>
            <td>
                <input class="botao" type="button" value="Voltar para o cadastro" onclick="history.back()"/>
                <input class="botao" type="button" value="Novo processo para o mesmo cliente" onclick="location.href='/teste/home/?opcao=novoprocesso&cliente_id=<?php echo $cliente_id; ?>'"/>
            </td>
        </tr>
    </table>
</fieldset>
<?php
        }
    }
    
 ?>