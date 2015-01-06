<form id="novoCliente" method="post" action="../actions/form_cliente.php">
    <fieldset>
        <legend>Identificação</legend>
        <table class="campos">
            <tr>
                <td colspan="2"><label for="nome">Nome:</label></td>
                <td><label for="rg">RG:</label></td>
            </tr>
            <tr>
                <td colspan="2"><input type="text" name="nome" placeholder="Insira o nome completo" size="60"/></td>
                <td><input type="text" name="rg" id="rg"/></td>
            </tr>
            <tr>
                <td><label for="cpf">CPF:</label></td>
                <td><label for="nascimento">Data de Nasc.:</label></td>
                <td><label for="estadocivil">Estado Civil:</label></td>
            </tr>
            <tr>
                <td><input type="text" name="cpf" id="cpf" size="30"/></td>
                <td><input type="text" name="nascimento" id="nascimento"/></td>
                <td><select name="estadocivil"><option selected="" disabled="">Selecione...</option><option>SOLTEIRO</option><option>CASADO</option><option>SEPARADO</option><option>DIVORCIADO</option><option>VIÚVO</option></select></td>
            </tr>
        </table>
    </fieldset>

    <fieldset>
        <legend>Localização</legend>
        <table class="campos">
            <tr>
                <td><label for="endereco">Endereço:</label></td>
                <td> <label for="bairro">Bairro:</label></td>
            </tr>
            <tr>
                <td><input type="text" name="endereco" placeholder="Insira rua, avenida, travessa... seguido do número" size="60"/></td>
                <td><input type="text" name="bairro"/></td>
            </tr>
            <tr>
                <td><label for="cidade">Cidade:</label></td>
                <td><label for="uf">UF:</label></td>
            </tr>
            <tr>
                <td><input type="text" name="cidade"/></td>
                <td><select name="uf" >
                        <option value="AC">AC</option><option value="AC">AC</option><option value="AC">AC</option><option value="AM">AM</option>
                        <option value="BA">BA</option><option value="CE">CE</option><option value="DF">DF</option><option value="GO">GO</option>
                        <option value="ES">ES</option><option value="MA">MA</option><option value="MT">MT</option><option value="MS">MS</option>
                        <option value="MG">MG</option><option selected="" value="PA">PA</option><option value="PA">PA</option><option value="PR">PR</option>
                        <option value="PE">PE</option><option value="PI">PI</option><option value="RJ">RJ</option><option value="RN">RN</option>
                        <option value="RS">RS</option><option value="RO">RO</option><option value="RR">RR</option><option value="SP">SP</option>
                        <option value="SC">SC</option><option value="SE">SE</option><option value="TO">TO</option>
                    </select></td>
            </tr>
        </table>
    </fieldset>

    <fieldset>
        <legend>Contato</legend>
        <table class="campos">
            <tr>
                <td><label for="fone1">Telefone 1:</label></td>
                <td><label for="fone2">Telefone 2:</label></td>
            </tr>
            <tr>
                <td><input type="text" name="fone1"/></td>
                <td><input type="text" name="fone2"/></td>
            </tr>
            <tr>
                <td><label for="email">E-mail:</label></td>
                <td><label for="obs">Observações:</label></td>
            </tr>
            <tr>
                <td><input type="email" name="email"/></td>
                <td><textarea name="obs" rows="4" cols="61" placeholder="Observações sobre o cliente"></textarea></td>
            </tr>  
        </table>
    </fieldset>
    <input class="botao" type="submit" name="acao" value="Salvar"/>
    <input class="botao" type="reset" name="acao" value="Limpar"/>
</form>