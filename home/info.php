<?php
include_once '../classes/Sistema.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $dao = new Sistema();
    $cliente = $dao->getClienteBy('id', $id);
    $c = $cliente[0];
    
?>
  
<fieldset>
    <table>
        <tr>
            <td colspan="2">Nome: <?php echo $c->getNome(); ?></td>
        </tr>
        <tr>
            <td>RG: <?php echo $c->getRG(); ?></td>
            <td>CPF: <?php echo $c->getCPF(); ?> </td>
        </tr>
        <tr>
            <td>Nascimento: <?php echo $c->getNascimento(); ?></td>
            <td>Estado Civil: <?php echo $c->getEstadocivil(); ?></td>
        </tr>
        <tr>
            <td colspan="2">Endereço: <?php echo $c->getEndereco().'-'.$c->getBairro(); ?></td>
        </tr>
        <tr>
            <td colspan="2"><?php echo $c->getCidade()."-".$c->getEstado(); ?></td>
        </tr>
        <tr>
            <td>Contatos: <?php echo $c->getFone1().' | '.$c->getFone2(); ?></td>
        </tr>
    </table>
</fieldset>
<?php

}



?>