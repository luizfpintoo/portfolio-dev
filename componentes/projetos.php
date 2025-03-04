<?php

$projetosPortfolio = [
    [
        "titulo" => "Meu Portfólio",
        "ano" => 2025,
        "finalizado" => true,
        "descricao" => "Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica"
    ],
    [
        "titulo" => "Projeto teste",
        "ano" => 2025,
        "finalizado" => false,
        "descricao" => "Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica"
    ],
];

?>



<?php foreach ($projetosPortfolio as $projetoportifolio): ?>
    <div class="bg-zinc-800 p-4 rounded-md flex gap-4">
        <div class="flex items-center justify-center bg-red-100 w-1/2">
            <img src="assets/images/avatar.png" alt="" class="rounded-md h-42">
        </div>
        <div class="flex flex-col gap-4">
            <div>
                <?php if ($projetoportifolio["finalizado"]) : ?>
                    <h4 class="font-bold text-xl text-white"><?= $projetoportifolio["titulo"]; ?></h4>
                    ✅ <span class="text-sm italic gray-200 font-semibold">(Finalizado em <?= $projetoportifolio["ano"]; ?>)</span>
                <?php else: ?>
                    <h4 class="font-bold text-xl text-white"><?= $projetoportifolio["titulo"]; ?></h4>
                    👨‍💻 <span class="text-sm italic gray-200 font-semibold">(Em Desenvolvimento)</span>
                <?php endif; ?>
            </div>
            <p>
                <?= $projetoportifolio["descricao"]; ?>
            </p>
            <div class="flex flex-wrap gap-2">
                <span class="py-1 px-3 rounded-full bg-red-400 font-semibold mr-1 text-red-800 text-sm">HTML</span>
                <span class="py-1 px-2 rounded-full bg-sky-400 font-semibold mr-1 text-sky-800 text-sm">CSS</span>
                <span class="py-1 px-2 rounded-full bg-yellow-400 font-semibold mr-1 text-yellow-800 text-sm">JavaScript</span>
                <span class="py-1 px-2 rounded-full bg-indigo-400 font-semibold mr-1 text-indigo-800 text-sm">PHP</span>
            </div>
        </div>
    </div>
<?php endforeach; ?>