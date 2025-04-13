<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>For</title>
</head>

<body>
  <div class="flex flex-col items-center justify-center pt-10">

    <h1 class="text-4xl pb-4 font-bold text-purple-800">Nerd<span class="text-green-700">Monster</span></h1>

    <form class="flex flex-col m-auto bg-slate-200 w-1/2 p-6 rounded-md" action="index.php" method="post">
      <label for="counter">Insira um número para multiplicar: </label>
      <input type="number" name="counter" required>
      <input class="w-1/2 mt-4 bg-slate-400 rounded-lg py-1 text-white" type="submit" value="Start">
    </form>

    <div class="bg-slate-300 flex flex-col w-1/2 px-8 rounded-md">

      <?php
      // pega o valor enviado pelo formulário
      $counter = $_POST["counter"];

      for ($i = 1; $i<=10; $i++){
        echo "<p>{$i} x {$counter} = " . $i * $counter . "</p>";
      }
      ?>
    </div>

  </div>
</body>
</html>