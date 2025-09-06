<?php
$produtos = [
    "Arroz" => 25.90,
    "Feijão" => 9.50,
    "Macarrão" => 6.20,
    "Óleo" => 8.70,
    "Açúcar" => 5.40
];

$total = 0;

foreach ($produtos as $nome => $preco) {
    echo "Produto: $nome - Preço: R$ " . number_format($preco, 2, ',', '.') . "<br>";
    $total += $preco;
}

echo "<br><strong>Valor total: R$ " . number_format($total, 2, ',', '.') . "</strong>";
?>
