<form method="GET" action="index.php">
    <input type="hidden" name="opcao" value="busca" />
    <p>Busca:<input type="search" name="busca" size="60"/><input class="botao" type="submit" name="acao" value="Buscar"/></p>
    <input type="radio" name="tipo" value="nome" checked="checked" />Nome
    <input type="radio" name="tipo" value="cpf" />CPF
</form>
<?php
if (isset($_GET['acao'])) {
    $dao = new ClienteDAO();
    $busca = $_GET['busca'];
    $tipo = $_GET['tipo'];
    $clientes = $dao->get($tipo, $busca);
    foreach ($clientes as $c){
        echo $c;
    }
}
?>