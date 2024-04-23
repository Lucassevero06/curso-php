<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resposta</title>
</head>
<body>
    <?php
        $num = $_GET["num"];
        echo "<h1>Resultado final</h1>";
        echo "O número escolhido foi: " . $num . "<br>";
        echo "O seu antecessor é: " . ($num - 1) . "<br>";
        echo "O seu sucessor é: " . ($num + 1) . "<br>";
    ?>
</body>
</html>