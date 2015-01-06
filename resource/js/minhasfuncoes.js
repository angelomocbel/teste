$(document).ready(function () {
    $("#nascimento").mask("99/99/9999");
    $("#cpf").mask("999.999.999-99");
    $("#rg").mask("9999999");
    $("#novoCliente").validate({
        // Define as regras
        rules: {
            nome: {
                // campoNome será obrigatorio (required) e terá tamanho minimo (minLength)
                required: true, minlength: 2
            },
            rg: {
                required: true, minlength: 7
            },
            cpf: {
                required: true, minlength: 11
            },
            estadocivil: {
                required: true
            },
            email: {
                // campoEmail será obrigatorio (required) e precisará ser um e-mail válido (email)
                required: false, email: true
            }
            
        },
        // Define as mensagens de erro para cada regra
        messages: {
            nome: {
                required: "Digite o seu nome",
                minlength: "O seu nome deve conter, no mínimo, 2 caracteres"
            },
            cpf: {
                required: "Digite o seu CPF",
                minlength: "O seu CPF deve conter, no mínimo, 11 caracteres"
            },
            estadocivil: {
                required: "Selecione um estado civil"
            },
            rg: {
                required: "Digite o seu RG",
                minlength: "O seu RG deve conter, no mínimo, 7 caracteres"
            },
            email: {
                required: "Digite o seu e-mail para contato",
                email: "Digite um e-mail válido"
            }            
        }
    });
});