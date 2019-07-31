<?php
require_once 'conexao.php';

if ($_REQUEST) {
    $cep        = $_REQUEST['cep']; 
    $rua        = $_REQUEST['rua']; 
    $bairro     = $_REQUEST['bairro']; 
    $cidade     = $_REQUEST['cidade']; 
    $estado     = $_REQUEST['estado']; 

   
    try {
        $query  = $conexao->prepare("INSERT INTO CEP(cep, rua, bairro, cidade, estado) VALUES (:cep, :rua, :bairro, :cidade, :estado)");  
        
        $inseriu = $query->execute([
            ":cep"          => $cep,
            ":rua"          => $rua,
            ":bairro"       => $bairro,
            ":cidade"       => $cidade,
            ":estado"       => $estado
        ]);
    } catch (PDOException $pdo) {
        $pdo->getMessage();
    }
}
?>


<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"/>
</head>

<body>

  <div class="banner">
    <img src="image/foto.jpg" title="mapa" />
  </div>

  <section class="consultaCep">
    <form class="form-horizontal" method="post">
      <fieldset class="col-md-9">
        <h3>Encontre seu endereço</h3>
        <div class="panel-body">
          <div class="form-group">
            <label class="col-md-2 control-label" id="nomeCep" for="CEP">CEP</label>
            <div class="col-md-3">
              <input
                id ="inputCep"
                name="cep"
                placeholder=" Somente números"
                class="form-control input-md"
                type="search"
                onkeypress="mascara(this, '#####-###')"
              />
            </div>
            <div class="col-md-2">
              <button
                id = "botaoPesquisar"
                type="button"
                class="btn btn-secondary"
                onclick="pesquisarCep(cep.value)"
              >
                Pesquisar
              </button>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label"
              >Endereço</label
            >
            <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-addon">Rua</span>
                <input
                  id="rua"
                  name="rua"
                  class="form-control"   
                  type="text"
                />
              </div>
            </div>

            <div class="col-md-3">
              <div class="input-group">
                <span class="input-group-addon">Bairro</span>
                <input
                  id="bairro"
                  name="bairro"
                  class="form-control"   
                  type="text"
                />
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label"></label>
            <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-addon">Cidade</span>
                <input
                  id="cidade"
                  name="cidade"
                  class="form-control"     
                  type="text"
                />
              </div>
            </div>

            <div class="col-md-3">
              <div class="input-group">
                <span class="input-group-addon">Estado</span>
                <input
                  id="estado"
                  name="estado"
                  class="form-control"
                  type="text"
                />
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label botaoSubmit" for="Salvar"></label>
              <div class="col-md-8">
                <button id="salvar" name="salvar" class="btn btn-secondary" type="Submit">Salvar</button>
              </div>
            </div>

          </div>
        </div>
      </fieldset>
    </form>
  </section>

  <script src="main.js"></script>

  <script>
  function mascara(t, mask){
    var i = t.value.length;
    var saida = mask.substring(1,0);
    var texto = mask.substring(i)
    if (texto.substring(0,1) != saida){
    t.value += texto.substring(0,1);
    }
  }
 </script>
  
</body>
