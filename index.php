<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/icons/icon.png" type="image/x-icon">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>Portfólio Dev</title>
    <style>
        body, html {
            overflow-x: hidden;
        }
    </style>
</head>

<body class="bg-zinc-900 text-gray-300 pl-4 pr-4">
   <?php include("componentes/header.php"); ?>

    <main class="mx-auto max-w-6xl">
        <section class="pt-32 md:p-0">
            <div class="text-center">
                <h2 class="text-rose-500 font-semibol text-lg mb-1">Meu Trabalho</h2>
                <h3 class="font-bold text-2xl">Veja meus projetos mais recentes</h3>
            </div>

            <div class="mt-10 grid grid gap-4 md:grid-cols-2">
                <?php include("componentes/projetos.php"); ?>
            </div>
        </section>
    </main>

    <?php include("componentes/footer.php"); ?>
</body>

<script src="assets/js/index.js"></script>

</html>