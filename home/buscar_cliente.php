<form method="GET" action="index.php">
    <fieldset>
        <legend>Dados de Busca</legend>
        <table id="formulario">
            <tr><input type="hidden" name="opcao" value="busca" />
                <td><input type="search" name="busca" size="60"/></td>
                <td><input class="botao" type="submit" name="acao" value="Buscar"/></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="radio" name="tipo" value="nome" checked="checked" />Nome
                    <input type="radio" name="tipo" value="cpf" />CPF
                    <input type="radio" name="tipo" value="rg" />RG
                    <input type="radio" name="tipo" value="email" />E-mail
                </td>
            </tr>
        </table>
    </fieldset>
    
</form>
<?php
if (isset($_GET['acao'])) {
    $dao = new Sistema();
    $busca = $_GET['busca'];
    $tipo = $_GET['tipo'];
    $clientes = $dao->getClienteBy($tipo, $busca);
    if($clientes != null){
        echo "<fieldset><legend>Resultados para '$busca'</legend><table id='resultado'>";
        foreach ($clientes as $c){    
?>

    <tr>
        <td rowspan="2">
            <a href="/teste/home?opcao=info&id=<?php echo $c->getId();?>"><img width="50" src="../resource/img/info.png" alt=""/></a></td>
        <td>Nome: <?php echo $c->getNome(); ?></td>
        
    
    </tr>
    <tr>
        <td>CPF:  <?php echo $c->getCpf(); ?></td>
    </tr>
<?php
        }
        echo '</table></fieldset>';
    }else{
        echo "Nenhum registro encontrado para '$busca'";
    }   
}
?>