function clicarBotao(){
    let cep = document.getElementById("cep").value
    buscarDados(cep)
}

async function buscarDados(cep){
    let dados = await fetch(`https://viacep.com.br/ws/${cep}/json/`).then(Response=>Response.json());
    exibirDados(dados)
}

function exibirDados(dados){
    document.getElementById("endereco").value = dados.logradouro
    document.getElementById("bairro").value = dados.bairro
    document.getElementById("cidade").value = dados.localidade
    document.getElementById("estado").value = dados.uf
}