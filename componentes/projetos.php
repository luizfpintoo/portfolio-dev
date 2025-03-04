<?php

$projetosPortfolio = [
    [
        "titulo" => "Meu Portfólio",
        "ano" => 2025,
        "finalizado" => true,
        "descricao" => "Projeto de Portfólio desenvolvido para mostrar meus projetos pessoais e profissionais.",
        "stack" => ["HTML", "Tailwindcss", "Javascript", "PHP"],
        "img" => "assets/images/portfolio.png"
    ],
    [
        "titulo" => "Meu Portfólio",
        "ano" => 2025,
        "finalizado" => true,
        "descricao" => "Projeto de Portfólio desenvolvido para mostrar meus projetos pessoais e profissionais.",
        "stack" => ["HTML", "Tailwindcss", "Javascript", "PHP"],
        "img" => "assets/images/portfolio.png"
    ],
];

$filtro = array_filter($projetosPortfolio, function($projeto){
    return $projeto;
});

?>



<?php 
$cores = ["red", "sky", "yellow", "violet", "blue"];
foreach ($filtro as $projetoportifolio): 
?>
    <div class="bg-zinc-800 p-4 rounded-md flex flex-col gap-4 md:flex-row">
        <div class="flex items-center justify-center md:w-1/2">
            <img src="<?= $projetoportifolio["img"]; ?>" alt="" class="rounded-md">
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
                <?php foreach($projetoportifolio["stack"] as $key => $stack): ?>
                <span class="py-1 px-3 rounded-full bg-<?= $cores[$key]; ?>-400 font-semibold mr-1 text-<?= $cores[$key]; ?>-800 text-sm"><?= $stack; ?></span>
                <? endforeach; ?>
            </div>
        </div>
    </div>
<?php endforeach; ?>