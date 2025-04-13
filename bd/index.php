<?php
  session_start();

  unset($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mysql</title>
</head>
<body>
  <h1>Cadastro</h1>

  <form action="form.php" method="post"> 
    <input type="text" name="username" placeholder="Seu nome">
    <input type="email" name="email" placeholder="Seu email">
    <input type="password" name="password" placeholder="******">
    <button type="submit">Enviar</button>
  </form>

  <h2>Atualizar</h2>
  <form action="update.php" method="post"> 
    <input type="text" name="username" placeholder="Seu nome">
    <input type="email" name="email" placeholder="Seu email">
    <input type="password" name="password" placeholder="******">
    <button type="submit">Atualizar</button>
  </form>

  <h2>Deletar</h2>
  <form action="delete.php" method="post"> 
    <input type="text" name="username" placeholder="Seu nome">
    <input type="password" name="password" placeholder="******">
    <button type="submit">Deletar</button>
  </form>

  <h2>Procurar</h2>
  <form action="search.php" method="post">
    <label for="search">Procurar user: </label>
    <input id="search" type="text" name="usersearch" placeholder="Procurar...">
    <button>Search</button>
  </form>


  <?php
    echo $_SESSION['username'] = "Camila"
  ?>
  
</body>
</html>