<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moeda</title>
</head>
<body>
    <h2>Conversor de Moeda</h2>
    <form method="POST" action="">
        <label for="quantidade">Quantidade em Dólares (USD):</label>
        <input type="number" id="quantidade" name="quantidade" step="0.01" required><br><br>

        <label for="moeda_destino">Moeda de Destino:</label>
        <select id="moeda_destino" name="moeda_destino" required>
            <option value="BRL">Real Brasileiro (BRL)</option>
            <option value="EUR">Euro (EUR)</option>
            <option value="GBP">Libra Esterlina (GBP)</option>
            <option value="JPY">Iene Japonês (JPY)</option>
            <option value="AUD">Dólar Australiano (AUD)</option>
        </select><br><br>

        <button type="submit">Converter</button>
    </form>

<?php
$quantidade = 100; 
$moeda_destino = 'BRL'; 

$endpoint = "https://v6.exchangerate-api.com/v6/f911f365557cb769ec6c36da/latest/USD";

if(isset($data['conversion_rates'][$moeda_destino])) {

    $taxa_cambio = $data['conversion_rates'][$moeda_destino];
    $valor_convertido = $quantidade * $taxa_cambio;

    echo "Quantidade em Dólares: $" . $quantidade . "<br>";
    echo "Taxa de Câmbio: 1 USD = " . $taxa_cambio . " " . $moeda_destino . "<br>";
    echo "Valor Convertido: " . $valor_convertido . " " . $moeda_destino . "<br>";
} else {
    echo "Erro ao obter a taxa de câmbio para a moeda de destino.";
}