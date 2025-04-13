<?php
require_once("./conexao-bd.php");

$query = "SELECT * FROM tasks";

$stmt = $pdo->query($query);
$tarefas = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Tarefas</title>
</head>

<body>
  <main>
    <section class="flex flex-col items-center mt-8">
      <h1 class="text-2xl font-semibold mb-4">Tarefas: 📝</h1>
      <?php foreach ($tarefas as $row): ?>
        <div class="flex flex-col w-1/2 bg-slate-100 px-6 py-2 rounded-sm">
          <p><?= $row['id'] ?></p>
          <p><?= $row['title'] ?></p>
          <p><?= $row['description'] ?></p>
          <p><?= $row['status'] ?></p>
          <p class="mb-4 border-b pb-4 border-slate-300 "><?= $row['created_at'] ?></p>

          <div>
            <a href="delete.php?id=<?= $row['id'] ?>" class="text-red-500">Excluir</a>
            <a href="atualizarForm.php?id=<?= $row['id'] ?>" class="text-green-700">Editar</a>
          </div>
          <!-- <form action="delete.php" method="post" style="display:inline;">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <button type="submit" class="text-red-500">Excluir</button>
          </form> -->
        </div>
      <?php endforeach; ?>
    </section>
  </main>
</body>

</html>