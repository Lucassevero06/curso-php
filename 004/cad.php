<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $nome = $_REQUEST["nome"];
            $sobrenome = $_REQUEST["sobrenome"];
            echo "<p>É um prazer te conhecer, $nome $sobrenome! Este é o meu site!</p>";
        ?>
    </main>
</body>
</html>