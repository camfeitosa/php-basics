<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $usersearch = $_POST["usersearch"];

  try {
    require_once "./conexao-bd.php";

    $query = "SELECT * FROM comentarios WHERE nome = ? ";

    $stmt = $pdo->prepare($query);
    $stmt->execute([$usersearch]);

    $results = $stmt->fetchAll( PDO::FETCH_ASSOC);

  } catch (PDOException $e) {
    die("Falha ao inserir" . $e->getMessage());
  }
}
else{
  header("Location: ./index.php");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Procurar</title>
</head>

<body>
  <h3>Resultados</h3>

  <?php
    if(empty($results)){
      echo "<div>";
      echo "<p> There were no results </p>";
      echo "</div>";
    } else {
      foreach($results as $row){
        echo htmlspecialchars($row["nome"]);
        echo htmlspecialchars($row["mensagem"]);
        echo htmlspecialchars($row["criacao"]);
      }
    }
  ?>
</body>

</html>