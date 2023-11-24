<?php

if (isset($_POST["submit"]))

{
    include_once("config.php");

    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $n_pgs = $_POST['n_pgs'];
    $n_exemplares_disp = $_POST['n_exemplares_disp'];

    $response = mysqli_query($conexao, "INSERT INTO livro(titulo, autor, editora, n_pgs, n_exemplares_disp) VALUES('$titulo', '$autor', '$editora', '$n_pgs', '$n_exemplares_disp') ");

        
  
  }


?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
    <link rel="stylesheet" href="form1.css">
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
            <form action="form1.php" method="post">

                <h2>Livros</h2>

                <label for="titulo">Título</label>
                <input type="text" name="titulo" id="titulo" placeholder="Insira o título"><br><br>

                <label for="autor">Autor</label>
                <input type="text" name="autor" id="autor" placeholder="Digite o nome do autor"><br><br>
                
                <label for="editora">Editora</label>
                <input type="text" name="editora" id="editora" placeholder="Digite o nome da editora"><br><br>
                
                <label for="n_pgs">Páginas</label>
                <input type="text" name="n_pgs" id="n_pgs" placeholder="Digite o n° de páginas"><br><br>
                
                <label for="n_exemplares_disp">Exemplares</label>
                <input type="text" name="n_exemplares_disp" id="n_exemplares_disp" placeholder="Exemplares Disponíveis"><br><br>
                
                <input type="submit" name="submit">

            </form>

            <script>

            </script>
        </div>
    </main>
    
</body>
</html>