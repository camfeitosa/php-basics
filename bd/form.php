<?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if(empty($username) || empty($email) || empty($password)){
      exit("Preencha todos os campos");
    }

    try {
      require_once "conexao-bd.php";

      $query = "INSERT INTO users (nome, email, senha) VALUES (?, ?, ?)";

      $stmt = $pdo->prepare($query);
      $stmt->execute([$username, $email, $password]);

      header("Location: ./index.php");

      die();

    } catch (PDOException $e) {
      die("Query failed:" . $e->getMessage());
    }
  } 
  else{
    header("Location: ./index.php");
  }

?>