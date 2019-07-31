function consultaCep() {
  document.querySelector("#rua").value = "";
  document.querySelector("#bairro").value = "";
  document.querySelector("#cidade").value = "";
  document.querySelector("#estado").value = "";
}

function conexaoApi(conteudo) {
  if (!("erro" in conteudo)) {
    document.querySelector("#rua").value = conteudo.logradouro;
    document.querySelector("#bairro").value = conteudo.bairro;
    document.querySelector("#cidade").value = conteudo.localidade;
    document.querySelector("#estado").value = conteudo.uf;
  } else {
    consultaCep();
    alert("CEP não encontrado.");
    document.querySelector("#cep").value = "";
  }
}

function pesquisarCep(valor) {
  var cep = valor.replace(/\D/g, "");
  if (cep !== "") {
    var validacaoCep = /^[0-9]{8}$/;

    if (validacaoCep.test(cep)) {
      var script = document.createElement("script");
      script.src = "//viacep.com.br/ws/" + cep + "/json/?callback=conexaoApi";
      document.body.appendChild(script);
    } else {
      consultaCep();
      alert("Formato de CEP inválido.");
    }
  } else {
    consultaCep();
  }
}
