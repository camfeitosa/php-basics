<?php

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if(empty($username) || empty($email) || empty($password)){
      exit("Preencha todos os campos");
    }

    try {
      require_once "./conexao-bd.php";

      $query = "UPDATE users SET nome = ?, email = ?, senha = ? WHERE id = 2 ";

      $stmt = $pdo->prepare($query);

      $stmt->execute([$username, $email, $password]);

      header("Location: ./index.php");
      
    } catch (PDOException $e) {
      die("Falha ao inserir" . $e->getMessage());
    }
  }
  else{
    header("Location: ./index.php");
  }