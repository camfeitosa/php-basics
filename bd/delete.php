<?php

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(empty($username) || empty($password)){
      exit("Preencha todos os campos");
    }

    try {
      require_once "./conexao-bd.php";

      $query = "DELETE FROM users WHERE nome = ? AND senha = ?";

      $stmt = $pdo->prepare($query);

      $stmt->execute([$username, $password]);

      header("Location: ./index.php");
      
    } catch (PDOException $e) {
      die("Falha ao inserir" . $e->getMessage());
    }
  }
  else{
    header("Location: ./index.php");
  }