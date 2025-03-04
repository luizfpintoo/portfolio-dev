<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>Portfólio Dev</title>
</head>

<body class="bg-zinc-900 text-gray-300 pl-4 pr-4">
   <?php include("componentes/header.php"); ?>

    <main class="mx-auto max-w-6xl">
        <section class="h-screen">
            <div class="text-center">
                <h2 class="text-rose-500 font-semibol text-lg mb-1">Meu Trabalho</h2>
                <h3 class="font-bold text-2xl">Veja meus projetos mais recentes</h3>
            </div>

            <div class="mt-10 grid grid-cols-2 gap-4">
                <?php include("componentes/projetos.php"); ?>
            </div>
        </section>
    </main>

    <?php include("componentes/footer.php"); ?>
</body>

</html>