<?php
$alunos = [
    "Ana" => 8.5,
    "Bruno" => 6.0,
    "Carla" => 9.0,
    "Diego" => 5.5,
    "Fernanda" => 7.2
];

$totalNotas = 0;
$qtdAlunos = count($alunos);

echo "<h3>Notas dos Alunos</h3>";

foreach ($alunos as $nome => $nota) {
    $totalNotas += $nota;

    if ($nota >= 7) {
        echo "$nome - Nota: $nota - <span style='color:blue;'>APROVADO</span><br>";
    } else {
        echo "$nome - Nota: $nota - <span style='color:red;'>REPROVADO</span><br>";
    }
}

$media = $totalNotas / $qtdAlunos;

echo "<br><strong>Média da turma: " . number_format($media, 2, ',', '.') . "</strong>";
?>
