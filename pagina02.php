<?php

$numero1 = 0;
$numero2 = 0;

if(isset($_POST{"bt_numero1"})){

    $numero1 = $_POST{"bt_numero1"};
    $numero2 = $_POST{"bt_numero2"};

    echo("O numero recebido foi :" . $numero1);
    echo("<br>");
    echo("O numero recebido foi :" . $numero2);
}


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior Numero</title>

</head>

<body>
    <h1>pagina02</h1>

    <a href="tabela.php">Voltar</a>
</body>

</html>