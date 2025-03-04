<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>Portfólio Dev</title>
</head>

<body class="bg-zinc-900 text-gray-300">
    <header class="h-screen bg-[url(assets/images/bg-hero.png)] bg-cover bg-center">
        <div class="mx-auto max-w-5xl flex flex-col gap-5 items-center text-center pt-32">
            <div>
                <img src="assets/images/avatar.png" alt="Imagem de perfil do desenvolvedor">
            </div>
            <div class="max-w-4xl">
                <p class="text-lg">
                    Olá, muito prazer, meu nome é <span class="text-rose-500">Luiz Felipe</span> e sou
                </p>
                <h1 class="text-5xl font-bold text-white mb-4">
                    Desenvolvedor PHP
                </h1>
                <p class="text-lg">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla magni eveniet, dicta perspiciatis harum minus iste totam est provident dolor reiciendis! Quis autem, officiis vel veniam magnam eius cum in.
                </p>
            </div>
            <div class="flex flex-wrap gap-2">
                <span class="py-1 px-3 rounded-full bg-rose-400 font-semibold mr-1 text-rose-800">Git</span>
                <span class="py-1 px-3 rounded-full bg-zinc-400 font-semibold mr-1 text-zinc-800">GitHub</span>
                <span class="py-1 px-4 rounded-full bg-red-400 font-semibold mr-1 text-red-800">HTML</span>
                <span class="py-1 px-4 rounded-full bg-sky-400 font-semibold mr-1 text-sky-800">CSS</span>
                <span class="py-1 px-4 rounded-full bg-yellow-400 font-semibold mr-1 text-yellow-800">JavaScript</span>
                <span class="py-1 px-4 rounded-full bg-indigo-400 font-semibold mr-1 text-indigo-800">PHP</span>
            </div>
        </div>
    </header>

    <main class="mx-auto max-w-6xl">
        <section class="h-screen">
            <div class="text-center">
                <h2 class="text-rose-500 font-semibol text-lg mb-1">Meu Trabalho</h2>
                <h3 class="font-bold text-2xl">Veja meus projetos mais recentes</h3>
            </div>

            <div class="mt-10 grid grid-cols-2 gap-4">
                <div class="bg-zinc-800 p-4 rounded-md flex gap-4">
                    <div class="flex items-center justify-center bg-red-100 w-1/2">
                        <img src="assets/images/avatar.png" alt="" class="rounded-md h-42">
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="flex gap-3 items-center">
                            ✅ <h4 class="font-bold text-xl text-white">Projeto 1</h4> 
                            <span class="text-sm italic gray-200 font-semibold">(Finalizado em 2025)</span>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum pariatur sapiente eum.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="py-1 px-3 rounded-full bg-red-400 font-semibold mr-1 text-red-800 text-sm">HTML</span>
                            <span class="py-1 px-2 rounded-full bg-sky-400 font-semibold mr-1 text-sky-800 text-sm">CSS</span>
                            <span class="py-1 px-2 rounded-full bg-yellow-400 font-semibold mr-1 text-yellow-800 text-sm">JavaScript</span>
                            <span class="py-1 px-2 rounded-full bg-indigo-400 font-semibold mr-1 text-indigo-800 text-sm">PHP</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="h-screen bg-[url(assets/images/bg-contact.png)] bg-cover bg-center pt-32">
        <div class="text-center">
            <h2 class="text-violet-400 font-semibol text-lg mb-1">Meu Trabalho</h2>
            <h3 class="font-bold text-2xl mb-2">Veja meus projetos mais recentes</h3>
            <p>Gostou dos meus projeos e quer trocar uma ideia, só acompanhar meus tranalhos</p>
        </div>

        <div class="mt-10 mx-auto max-w-md">
            <ul class="flex flex-col gap-4">
                <a href="#" class="bg-zinc-700 p-5 rounded-md flex justify-between items-center border border-sky-500">
                    <li class="flex items-center gap-2">
                        <img src="assets/icons/linkedin-icon.png" alt="">
                        Linkedin
                    </li>
                    <div>
                        <img src="assets/icons/seta-icon.png" alt="">
                    </div>
                </a>

                <a href="#" class="bg-zinc-700 p-5 rounded-md flex justify-between items-center border border-sky-500">
                    <li class="flex items-center gap-2">
                        <img src="assets/icons/instagram-icon.png" alt="">
                        Instagram
                    </li>
                    <div>
                        <img src="assets/icons/seta-icon.png" alt="">
                    </div>
                </a>

                <a href="#" class="bg-zinc-700 p-5 rounded-md flex justify-between items-center border border-sky-500">
                    <li class="flex items-center gap-2">
                        <img src="assets/icons/github-icon.png" alt="">
                        GitHub
                    </li>
                    <div>
                        <img src="assets/icons/seta-icon.png" alt="">
                    </div>
                </a>

                <a href="#" class="bg-zinc-700 p-5 rounded-md flex justify-between items-center border border-sky-500">
                    <li class="flex items-center gap-2">
                        <img src="assets/icons/email-icon.png" alt="">
                        Email
                    </li>
                    <div>
                        <img src="assets/icons/seta-icon.png" alt="">
                    </div>
                </a>
            </ul>
        </div>
    </footer>
</body>

</html>