<?php 
$paragrafo = "Questo è un paragrafo molto ma molto corto...";
$lunghezza_paragrafo = strlen($paragrafo);
echo $paragrafo;
echo $lunghezza_paragrafo;
$parolaPassata = $_GET["parola"];
echo "<pre>";
var_dump($parolaPassata);
echo "</pre>";
$paragrafoFiltrato = str_replace($parolaPassata, "***", $paragrafo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p style="color: blue;">INSERISCI UNA PAROLA DA CENSURARE</p>
    <form action="index.php" method="get">
        <input type="text" id="parola" name="parola">
        <input type="submit" value="Submit">
    </form>

    <?php
    if(str_contains ( $paragrafoFiltrato, "***" )){
        echo $paragrafoFiltrato;
        echo strlen($paragrafoFiltrato);
    };
    ?>
</body>
</html>