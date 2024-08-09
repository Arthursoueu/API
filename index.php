<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>API CEP</h1>
    <form method="post">
    <input type="text" name="cep" id="cep">
    <button type="submit">VERIFICAR</button>
    </form>

    <?php
    $cep = $_POST['cep'];
    $url = "https://viacep.com.br/ws/$cep/json/";
    $json = file_get_contents($url);
    $dados = json_decode($json, true);
    echo '<br>';
    echo 'Rua: '.$dados['logradouro'].'<br>';
    echo 'Complemento: '.$dados['complemento'].'<br>';
    echo 'Bairro: '.$dados['bairro'].'<br>';
    echo 'Cidade: '.$dados['localidade'].'/'.$dados['uf'];
    ?>
</body>
</html>