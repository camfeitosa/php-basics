<?php
  require_once("./conexao-bd.php");

  $id = $_GET['id'] ?? null;

  if (!$id){
    header("Location: ./tarefas.php");
  }

  $query = "DELETE FROM tasks WHERE id = ?";

  $stmt = $pdo->prepare($query);
  $stmt->execute([$id]);

  header("Location: ./tarefas.php");

  die();
?>