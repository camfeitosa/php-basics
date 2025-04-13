<?php 
 $lista = ["Maçã", "Banana", "Melancia", "Uva"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php page</title>
</head>
<body>
  <main>
    <?php foreach($lista as $fruta): ?>
      <div><?=$fruta?></div>
      <div><?echo $fruta ?></div>
    <?php endforeach ?>
  </main>
</body>
</html>
