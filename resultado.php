<?php
$votos = json_decode(file_get_contents("dados.json"), true);
$total = array_sum($votos);
?>
<h2>Resultado da Enquete</h2>
<ul>
<?php foreach($votos as $linguagem => $quantidade): ?>
    <li><?= $linguagem ?>: <?= $quantidade ?> voto(s)
        (<?= round(($quantidade / $total) * 100, 1) ?>%)
    </li>
<?php endforeach; ?>
</ul>
<a href="index.html">Voltar</a>
