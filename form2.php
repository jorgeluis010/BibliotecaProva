<?php

if (isset($_POST["submit"]))

{
    include_once("config.php");

    $nome = $_POST['nome'];
    $numero_registro = $_POST['numero_registro'];
    $data_nascimento = $_POST['data_nascimento'];
    $endereco = $_POST['endereco'];
    $numero_telefone = $_POST['numero_telefone'];
    $email = $_POST['email'];

    $response = mysqli_query($conexao, "INSERT INTO usuario(nome, numero_registro, data_nascimento, endereco, numero_telefone, email) VALUES('$nome', '$numero_registro', '$data_nascimento', '$endereco', '$numero_telefone', '$email')");    

}


?>




<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

<main>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="form1.php">Livros</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="form2.php">Usuário</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <div class="form">
        <form action="form2.php" method="post">

            <h2>Formulário</h2>

            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Inserir Nome"><br><br>

            <label for="numero_registro">RG</label>
            <input type="text" name="numero_registro" id="numero_registro" placeholder="Inserir RG"><br><br>

            <label for="data_nascimento">Data de Nascimento</label>
            <input type="date" name="data_nascimento" id="data_nascimento" placeholder=""><br><br>

            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" id="endereco" placeholder="Inserir endereço"><br><br>

            <label for="numero_telefone">Telefone</label>
            <input type="text" name="numero_telefone" id="numero_telefone" placeholder="Inserir Telefone"><br><br>
            
            <label for="email">E-Mail</label>
            <input type="text" name="email" id="email" placeholder="Inserir e-mail"><br><br>

            <input type ="submit" name= "submit">
        </form>
    </div>

</main>
 
    
</body>
</html>