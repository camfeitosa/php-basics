<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $id = $_POST['id'];
  $title = $_POST["titulo"];
  $description = $_POST["descricao"];
  $status = $_POST["status"];

  if(empty($title) || empty($description) || empty($status)){
    exit("Preencha todos os campos");
  }

  try {
    require_once("./conexao-bd.php");

    $query = "UPDATE tasks SET title = ?, description = ?, status = ? WHERE id = ?";

    $stmt = $pdo->prepare($query);
    $stmt->execute([$title, $description, $status, $id]);

    header("Location: ./tarefas.php");

    die();
  } catch (PDOException $e) {
    die("Falha ao atualizar" . $e->getMessage());
  }
} else {
  header("Location: ../tarefas.php");
}
