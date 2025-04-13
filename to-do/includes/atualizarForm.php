<?php
  require_once("./conexao-bd.php");

  $id = $_GET['id'] ?? null;

  if(!$id){
    header("Location: ./tarefas.php");
    exit();
  }

  $query = "SELECT * FROM tasks WHERE id = ?";
  $stmt = $pdo->prepare($query);
  $stmt->execute([$id]);
  
  $tarefas = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Atualizar</title>
</head>

<body>
  <main>
    <section class="flex flex-col items-center justify-center mt-8">
      <h1 class="mb-4 text-2xl font-semibold">Editar 📝</h1>

      <form action="atualizar.php" method="post" class="flex flex-col w-1/2 bg-slate-200 rounded-sm gap-2 px-6 py-4">
        <?php foreach($tarefas as $row): ?>

        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        
        <label for="titulo">Titulo: </label>
        <input type="text" name="titulo" placeholder="<?= $row['title'] ?>">
        <label for="descricao">Descrição: </label>
        <input type="text" name="descricao"  placeholder="<?= $row['description'] ?>">
        <select name="status" id="status">
          <option value="concluida">Concluida</option>
          <option value="pendente">Pendente</option>
        </select>
        
        <?php endforeach ?>
        <button>Atualizar</button>
      </form>
    </section>
  </main>
</body>
</html>