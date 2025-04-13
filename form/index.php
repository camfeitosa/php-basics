<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="form.php" method="post">
    <input type="text" name="name" placeholder="Digite seu nome">
    <input type="email" name="email" placeholder="Digite seu email">

    <select name="favcolor" id="favcolor">
      <option value="blue">Blue</option>
      <option value="yellow">Yellow</option>
      <option value="red">Red</option>
    </select>

    <button type="submit" name="submit">Enviar</button>
  </form>
</body>
</html>