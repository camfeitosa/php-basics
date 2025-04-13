<?php

  if($_SERVER["REQUEST_METHOD"] == "POST"){

    $title = $_POST["titulo"];
    $description = $_POST["descricao"];

    try {
      require_once("./conexao-bd.php");

      $query = "INSERT INTO tasks (title, description) VALUES (?, ?);";

      $stmt = $pdo->prepare($query);
      $stmt->execute([$title, $description]);

      header("Location: ./tarefas.php");
      
      die();

    } catch (PDOException $e) {
      die("Falha ao inserir" . $e->getMessage());
    }
  }
else{
  header("Location: ../index.php");
}