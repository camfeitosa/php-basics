<?php
  include_once("./conexao.php");

  $query =  "SELECT * FROM usuario";
  $stmt = $pdo->query($query);

  $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
</head>
<body>
  <main>
    <section>
      <form action="enviar.php" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome">

        <label for="email">Email: </label>]
        <input type="email" name="email" id="email">

        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha">

        <button type="submit">Enviar</button>
      </form>

      <a href="./lista.php">Lista</a>
    </section>

    <section>
      <?php foreach($usuarios as $usuario): ?>
        <p><?= $usuario["nome"] ?></p>
      <?php endforeach ?>
    </section>
  </main>
</body>
</html>