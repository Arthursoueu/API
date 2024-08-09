<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>API TEMPERATURA</h1>
    <form method="post">
    <input type="text" name="cidade" id="cidade">
    <button type="submit">VERIFICAR</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $cidade = urlencode($_POST['cidade']);
        $url = "http://api.weatherapi.com/v1/current.json?key=dda86d9df0e84aa8863123253240908&q=$cidade&aqi=no";
        $json = file_get_contents($url);
        $dados = json_decode($json, true);
        if (isset($dados)) {
            echo '<br>';
            echo 'temperatura: '.$dados["current"]['temp_c'].'<br>';
            echo 'Cidade: '.$dados['location']['name'].'/'.$dados['location']['region'];
            echo '<br>';
            echo '<img src="'.$dados['current']['condition']['icon'].'">';
        }
    }
    ?>