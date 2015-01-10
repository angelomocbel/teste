<?php
    include_once '../classes/Sistema.php';
    if(isset($_GET['cliente_id'])){
        $id = $_GET['cliente_id'];
        $dao = new Sistema();
        $r = $dao->getClienteBy('id', $id);
        $cliente = $r[0];
        $nome = $cliente->getNome();
   
?>
<form id="novoProcesso" method="post" action="../actions/form_cliente.php">
    <input type="hidden" value="<?php echo $id; ?>" name="cliente_id"/>
    <fieldset>
        <legend>Dados do Processo de <?php echo $nome; ?></legend>
        <table class="campos">
           
            <tr>
                <td><label for="numero">Número:</label></td>
                <td><label for="especie">Espécie:</label></td>
                <td><label for="vara">Vara:</label></td>
            </tr>
            <tr>
                <td><input type="text" name="numero" id="numero" size="25"/></td>
                <td><select name="especie"><option selected="" disabled="">Selecione...</option><option>APOSENTADORIA</option><option>PENSÃO</option></select></td>
                <td><input type="text" name="vara" id="vara"/></td>
            </tr>
            
            <tr>
                <td><label for="status">Status:</label></td>
                <td><label for="data_audiencia">Data da Audiência:</label></td>
                <td><label for="data_pericia">Data da Perícia:</label></td>
            </tr>
            <tr>
                <td><select name="status"><option selected="" disabled="">Selecione...</option><option>AGUARDANDO</option><option>EM PERICIA</option><option>EM AUDIENCIA</option><option>FINALIZADO</option></select></td>
                <td><input type="text" name="data_audiencia" id="data_audiencia"/></td>
                <td><input type="text" name="data_pericia" id="data_pericia"/></td>
            </tr>
            
            <tr>
               <td><label for="pendencia_doc">Documentos Pendentes:</label></td>
               <td colspan="2"><label for="obs_pendencia">Descrição:</label></td>
            </tr>
            
            <tr>
                <td><input type="checkbox" name="pendencia_doc" id="pendencia_doc" value="1"/>Sim</td>
                <td colspan="2"><textarea name="obs_pendencia" rows="4" cols="61" placeholder="Descrição dos Documentos"></textarea></td>
            </tr>
        </table>
    </fieldset>

    

  
    <input class="botao" type="submit" name="acao" value="Salvar Processo"/>
    <input class="botao" type="reset" name="acao" value="Limpar"/>
</form>


<?php

    }
    else{
        echo 'Erro: Id não informado';
    }