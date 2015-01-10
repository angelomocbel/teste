<?php
    include_once '../classes/Sistema.php';
    $dao = new Sistema();
    $mensagem = "";
    $cpf = "";
    $id;
    if(isset($_GET['cod'])){
        $codigo = $_GET['cod'];
        if($codigo == 1){
            $cpf = $_GET['cpf'];
            $cliente = $dao->getClienteBy('cpf', $cpf);
            $id = $cliente[0]->getId();
            $mensagem = "Cliente salvo com sucesso!";
            
            
?>
<sucess><?php echo $mensagem; ?></sucess>
<fieldset>
    <legend>Operações</legend>
    
    <table>
        <tr>
            <td>
                <input class="botao" type="button" value="Cadastrar um processo" onclick="location.href='/teste/home/?opcao=novoprocesso&cliente_id=<?php echo $id; ?>'"/>
                <input class="botao" type="button" value="Novo Cliente" onclick="location.href='/teste/home/?opcao=novo'"/>
                <input class="botao" type="button" value="Ver Info. do Cliente cadastrado" onclick="location.href='/teste/home/?opcao=info&id=<?php echo $id; ?>'"/>
            </td>
        </tr>
    </table>
</fieldset>
<?php
        }
        if($codigo == 2){
            $mensagem = "Erro: CPF já cadastrado no sistema!";
            
 ?>
<erro><?php echo $mensagem; ?></erro>
<fieldset>
    <legend>Operações</legend>
    
    <table>
        <tr>
            <td>
                <input class="botao" type="button" value="Voltar para o cadastro" onclick="history.back()"/>
                <input class="botao" type="button" value="Novo Cliente" onclick="location.href='/teste/home/?opcao=novo'"/>
            </td>
        </tr>
    </table>
</fieldset>
<?php
        }
        if($codigo == 0){
            $mensagem = "Erro: Não foi possível salvar o cliente!";
            
 ?>
<erro><?php echo $mensagem; ?></erro>
<fieldset>
    <legend>Operações</legend>
    
    <table>
        <tr>
            <td>
                <input class="botao" type="button" value="Voltar para o cadastro" onclick="history.back()"/>
                <input class="botao" type="button" value="Novo Cliente" onclick="location.href='/teste/home/?opcao=novo'"/>
            </td>
        </tr>
    </table>
</fieldset>
<?php
        }
    }
    
 ?>