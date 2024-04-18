<!-- QUATRO FORMATOS DE STRINGS -->

<!-- DOUBLE QUOTED:

//"Curso", "Lucas" etc. nas aspas duplas existe interpretação do conteudo exemplo: "PHP\u{1F418}" no navegador o que seria mostrado na tela é PHP e um emoji de elefante.

-->

<!-- SINGLE QUOTED:

//'Curso', 'Lucas' etc. Nas aspas simples não existe interpretação do conteudo exemplo: 'PHP\u{1F418}' no navegador o que seria mostrado na tela é PHP\u{1F418}.

-->

<!-- HEREDOC: -->

<!-- NOWDOC: -->

//OPERADOR DE CONCATENAÇÃO NO PHP É O .(ponto)

<?php 

    // //nesse exemplo,  que seria mostrado no echo é a interpretação da string, ou seja, mostraria na tela: Olá Lucas!
    // $nome1 = "Lucas";
    // echo "Olá $nome!";

    // //nesse exemplo,  que seria mostrado no echo é exatamente o que tem escrito na string, ou seja, mostraria na tela: Olá $nome!
    // $nome2 = "Lucas";
    // echo 'Olá $nome!';

    //$nome = "Lucas";
    //$sobrenome = "Gabriel";

    //echo $nome . $sobrenome;

    //const ESTADO = "RJ";
    
    //echo "Moro no ".ESTADO;

?>