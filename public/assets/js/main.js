
/**
 * Desabilita os campos de cadastro
 */
function desabilitarCamposCadastro(){

    if(document.querySelector(".titulo").innerHTML === "Cadastro!") {
        document.querySelector("#usuario-pessoa").style.display = "none";
        document.querySelector("#usuario-juridico").style.display = "none";
        document.querySelector("#abilitar-botoes-envio").style.display = "none";
        $('#cpf').mask('000.000.0000-00');
        $('.rg').mask('00.000.000');
        $('.cep').mask('00.000-000');
        $('.numero').mask('0000');
    }        
}

/**
 * Verificando qual tipo de cadastro abilitar
 */
function abilitarTipoCadastro() {
    var tipoCadastro = document.querySelector("#tipoCadastro");
    
    if(tipoCadastro.selectedIndex ==  1) {
        document.querySelector("#usuario-juridico").style.display = "none";
        document.querySelector("#usuario-pessoa").style.display = "block";
        document.querySelector("#abilitar-botoes-envio").style.display = "block";
    }else if(tipoCadastro.selectedIndex ==  2) {
        document.querySelector("#usuario-pessoa").style.display = "none";
        document.querySelector("#usuario-juridico").style.display = "block";
        document.querySelector("#abilitar-botoes-envio").style.display = "block";
    }else {
        document.querySelector("#abilitar-botoes-envio").style.display = "none";
        document.querySelector("#usuario-pessoa").style.display = "none";
        document.querySelector("#usuario-juridico").style.display = "none";        
    }
}

//Chamado funcoes
desabilitarCamposCadastro();