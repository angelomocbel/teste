<?php
    include_once '../classes/Sistema.php';
    if(isset($_GET['numero'])){
        $numero = $_GET['numero'];
        $dao = new Sistema();
        $processo = $dao->getProcessoBy('numero', $numero);
        $p = $processo[0];
        
?>

<table id="info">
    <tr>
        <td id="dados">
            <fieldset>
                    <legend>Dados</legend>
                    <table>
                        <tr><td><pequeno>Número: </pequeno><?php echo $p->getNumero(); ?></td></tr>
                        <tr><td><pequeno>Espécie: </pequeno><?php echo $p->getEspecie(); ?></td></tr>
                        <tr><td><pequeno>Vara: </pequeno><?php echo $p->getVara(); ?></td></tr>
                        <tr><td><pequeno>Status: </pequeno><?php echo $p->getStatus(); ?></td></tr>
                        <tr><td><pequeno>Audiência: </pequeno><?php echo $p->getData_audiencia(); ?></td></tr>
                        <tr><td><pequeno>Perícia: </pequeno><?php echo $p->getData_pericia(); ?></td></tr>
                        <tr><td><pequeno>Documentos Pendentes: </pequeno>
                            <?php if($p->getPendencia_doc()){
                                    echo 'SIM';
                                }else{
                                    echo 'NÃO';
                                }    
                            ?>
                        </td></tr>
                        <tr><td><pequeno>Observações: </pequeno><?php  ?></td></tr>
                    <tr><td></td></tr>
                    </table>
                    <input class="botao" type="button" onclick="location.href='/teste/home/?opcao=edit&id=<?php echo $numero; ?>'" value="Editar dados"/>
                </fieldset>
        </td>
    </tr>
</table>

<?php
    }