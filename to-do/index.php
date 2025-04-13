<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Form</title>
</head>
<body>
  <main>
    <section class="flex flex-col items-center justify-center h-[100vh]">

      <h1 class="text-2xl font-semibold mb-4">Adicionar tarefas ✅</h1>

      <form class="bg-slate-200 w-1/2 flex flex-col p-4 gap-2" action="includes/enviar.php" method="post">
        
        <label for="titulo">Título</label>
        <input type="text" id="titulo" name="titulo">

        <label for="descricao">Decrição</label>
        <input type="text" id="descricao" name="descricao">

        <button class="w-1/2 bg-slate-300 rounded-lg p-2 mt-6 hover:bg-slate-400">Adicionar</button>
      </form>
    </section>
  </main>
</body>
</html>