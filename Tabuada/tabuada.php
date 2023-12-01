<?php

$tabuada=2;
for ($i=1;$i<10;$i++){

    $resultado=$i * $tabuada;
    echo "<br>"
    echo"$i x $tabuada= $resultado";
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="pagina02.php" method="post">
        <h1>Tabuada</h1>
        <label for="">Digite sua tabuada</label>
        <input type="text" name="bt_numero1">
        <br>
        <input type="submit">
    </form>
</body>

</html>