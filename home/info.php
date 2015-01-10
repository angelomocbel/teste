<?php
include_once '../classes/Sistema.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $dao = new Sistema();
    $cliente = $dao->getClienteBy('id', $id);
    $c = $cliente[0];
    $processos = $dao->getProcessoBy('cliente_id', $id);
    
?>

<table id="info">
        <tr>
            <td id="dados">
                <fieldset>
                    <legend>Dados</legend>
                    <table>
                        <tr><td><pequeno>Nome: </pequeno><?php echo $c->getNome(); ?></td></tr>
                        <tr><td><pequeno>RG: </pequeno><?php echo $c->getRG(); ?></td></tr>
                        <tr><td><pequeno>CPF: </pequeno><?php echo $c->getCPF(); ?></td></tr>
                        <tr><td><pequeno>Nascimento: </pequeno><?php echo $c->getNascimento(); ?></td></tr>
                        <tr><td><pequeno>Estado Civil: </pequeno><?php echo $c->getEstadocivil(); ?></td></tr>
                        <tr><td><pequeno>Endereço: </pequeno><?php echo $c->getEndereco().' - '.$c->getBairro(); ?></td></tr>
                        <tr><td><pequeno>Cidade: </pequeno><?php echo $c->getCidade().' - '.$c->getEstado(); ?></td></tr>
                        <tr><td><pequeno>Telefones: </pequeno><?php echo $c->getFone1().' | '.$c->getFone2(); ?></td></tr>
                        <tr><td><pequeno>Email: </pequeno><a href="mailto:<?php echo $c->getEmail(); ?>"><?php echo $c->getEmail(); ?></a></td></tr>
                        <tr><td><pequeno>Observações: </pequeno><?php echo $c->getObs(); ?></td></tr>
                    <tr><td></td></tr>
                    </table>
                    <input class="botao" type="button" onclick="location.href='/teste/home/?opcao=edit&id=<?php echo $id; ?>'" value="Editar dados"/>
                </fieldset>
            </td>
            <td id="acoes">
                <fieldset>
                    <legend>Processos</legend>
<?php
    if($processos != null){
        foreach ($processos as $c) {
            
        }
    }

?>               
                </fieldset>
            </td>
        </tr>
    </table>

<?php

}



?>