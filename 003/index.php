<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tipos primitivos de php</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
    
        // 0x = HEXADECIMAL, 0b = BINÁRIO, 0 = OCTAL
        // $num = 010;
        // echo "O valor da variável é $num";
    
        //$v = "Lucas";
        //var_dump($v);

		// $num = 7e2; //7 x 10(2)
		// echo "$num";

        // $vet = [6, 2.5, "Maria", 3, false];
        // var_dump($vet);

        class Pessoa {
            private string $nome;
        }

        $pessoa1 = new Pessoa;
        var_dump($pessoa1);

    ?>
</body>
</html>