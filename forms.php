<?php

if(isset($_POST["submit"])){

    include_once("config.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $data_nascimento = $_POST['data-nascimento'];
    $escolaridade = $_POST['escolaridade'];
    $instituicao_anterior = $_POST['instituicao-anterior'];

    $dados = mysqli_query($conexao,"INSERT INTO usuario(nome,telefone,cep,logradouro,cidade,estado,
    data_nascimento,email,escolaridade,instituicao_anterior) 
    VALUES ('$nome','$telefone','$cep','$endereco','$cidade','$estado',
    '$data_nascimento','$email','$escolaridade','$instituicao_anterior')");

}






?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style-forms.css">
    <title>Formulário</title>
</head>

<body>
    <main>
        <div class="w-50 h-50 box-maior">
            <form class="row" action="forms.php" method="post">
                <h2 class="titulo-forms">Formulario de Cadastro de Aluno</h2>
                <div class="col-md-12">
                    <label class="form-label">Nome Completo</label>
                    <input type="text" name="nome" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="inputCity">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Telefone</label>
                    <input type="text" name="telefone"  class="form-control" >
                </div>
                <div class="col-md-6">
                    <label class="form-label">CEP</label>
                    <input type="text" name="cep" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Estado</label>
                    <input type="text" name="estado" class="form-control">
                </div>
                <div class="col-12">
                    <label class="form-label">Logradouro</label>
                    <input type="text" name="endereco" class="form-control" placeholder="Ex: Rua X, 13">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Cidade</label>
                    <input type="text" name="cidade" class="form-control">
                </div> 
                <div class="col-md-6">
                    <label class="form-label">Data de Nascimento</label>
                    <input type="date" name="data-nascimento" class="form-control" name="data-nascimento" >
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Escolaridade</label>
                    <select id="inputState" name="escolaridade" class="form-select">
                        <option selected>...</option>
                        <option>Ensino Médio/Técnico Incompleto</option>
                        <option>Ensino Médio/Técnico</option>
                        <option>Ensino Superior Incompleto</option>
                        <option>Ensino Superior</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Instituição Anterior</label>
                    <input type="text" name="instituicao-anterior" class="form-control" id="inputPassword4">
                </div>
                <hr>

                <div class="col-12 mt-3">
                  <button type="submit" name="submit" class="btn btn-outline-light position-absolute top-30 start-50 translate-middle">Cadastrar</button>
                </form>
            </div>
            <script src="app.js"></script>
        </main>
    </body>
    
    </html>