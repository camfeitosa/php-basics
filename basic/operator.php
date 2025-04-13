<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  $a = "Bye";
  $b = "World";
  $c = $a . " " . $b;

  echo $c;
  echo "<br>";

  // operador
  echo 10 ** 2;
  echo (1 + 2) * 10;

  echo "<br>";

  // adicionar na própria variavel
  $d = 2;
  // $d = $d + 4;
  $d += 3;

  $e = "5";

  if($d == $e){
    echo "São iguais";
  } else {
    echo "diferentes";
  }

  if ($d === $e){
    echo "Tipos e valores iguais";
  }else{
    echo "Diferentes";
  }

 // (or -> ||) (and -> &&)  

 $f = 1;
 echo $f++;
 echo $f;

?>
</body>
</html>

