<?php
$arquivo = "dados.json";

if (!file_exists($arquivo)) {
    $votos = ["PHP" => 0, "Python" => 0, "JavaScript" => 0];
} else {
    $votos = json_decode(file_get_contents($arquivo), true);
}

if (isset($_POST['linguagem'])) {
    $opcao = $_POST['linguagem'];
    $votos[$opcao]++;
    file_put_contents($arquivo, json_encode($votos));
}

header("Location: resultado.php");
exit;
?>
