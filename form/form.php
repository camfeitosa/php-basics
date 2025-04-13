<?php

// Informa o método 
// var_dump($_SERVER["REQUEST_METHOD"]);

if ($_SERVER["REQUEST_METHOD"] == "POST")  {
  
  // evita que coloquem códigos em js no form
  $name = htmlspecialchars( $_POST["name"]);
  $email = htmlspecialchars( $_POST["email"]);
  $color = htmlspecialchars( $_POST["favcolor"]);

  // evitar que envie um input vazio
  if(empty($name) || empty($email) || empty($color)){
    exit();
    header("Location: ./index.php");
  }

  echo "These are the data, that the user submitted";
  echo "<br>";
  echo $name;
  echo "<br>";
  echo $email;
  echo "<br>";
  echo $color;

  header("Location: ./index.php");

} else {
  header("Location: ./index.php");
}


// Forma de achar o form
if(isset($_POST["submit"])){

};