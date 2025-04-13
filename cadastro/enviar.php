<?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if(empty($nome) || empty($email) || empty($senha)){
      exit("Preencha todos os campos");
    }

    try {

      require_once("./conexao.php");

      $query = "INSERT INTO usuario (nome, email, senha) VALUES (?, ?, ?)";

      $stmt = $pdo->prepare($query);
      $stmt->execute([$nome, $email, $senha]);

      header("Location: ./index.php");

      die();

    } catch (PDOException $e) {
      die("Falha ao enviar" . $e->getMessage());
    }

  } else {
    header("Location: ./index.php");
    exit();
  }