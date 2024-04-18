<!-- QUATRO FORMATOS DE STRINGS -->

<!-- DOUBLE QUOTED:

//"Curso", "Lucas" etc. nas aspas duplas existe interpretação do conteudo exemplo: "PHP\u{1F418}" no navegador o que seria mostrado na tela é PHP e um emoji de elefante.

-->

<!-- SINGLE QUOTED:

//'Curso', 'Lucas' etc. Nas aspas simples não existe interpretação do conteudo exemplo: 'PHP\u{1F418}' no navegador o que seria mostrado na tela é PHP\u{1F418}.

-->

<!-- HEREDOC:

//O heredoc permite você trabalhar com blocos de textos maiores sem se preocupar em escapar aspas duplas ou simples. Isto porque ele utiliza um demarcador “tagueado” identificando o começo e no final de cada string. Ele, assim como a aspas duplas, permite que você trabalhe com variáveis dentro da string. O heredoc irá interpretar a varíavel perfeitamente, sem concatenações e etc.

-->

<!-- NOWDOC:

//O nowdoc tem utilização bem semelhante ao heredoc, porém, ele não consegue interpretar variáveis ou caracteres de controle. Este comando é compatível a partir do php 5.3. Para utilizá-lo segue a mesma lógica, com um pequeno detalhe, aqui o identificador inicial deve ter aspas simples.

-->

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