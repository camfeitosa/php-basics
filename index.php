<?php
 include("./basicww/variavel.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>
<body>
  <main>
    <h1>Olá!</h1>
    <?=
      "<h2>Hello World!!</h2>"
    ?>

    <section>
      <?php if(true){ ?>
        <p>Um texto aqui</p>
      <?php } ?>
    </section>

    <section>
      <?php
        if(true){
          echo "<p>Um texto aqui</p>";
        }
      ?>
    </section>

    <p>Isso é um <?= 'ótimo' ?> paragrafo </p>
    <?= 'Paragrafo' ?>
  </main>
</body>
</html>