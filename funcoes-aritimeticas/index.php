<!-- FUNÇÕES ARITMÉTICAS DO PHP -->

<!-- VALOR ABSOLUTO -->

<?php 
    $res1 = abs(-2000);
    echo $res1;
    //a resposta é 2000, pois o valor absoluto é o valor de um numero sem seu operador (+ ou -)
?>

<!-- CONVERSÃO -->

<?php 
    $res2 = base_convert(254, 10, 8);
    echo $res2;
    // a resposta é 376
    $res3 = base_convert(254, 10, 16);
    echo $res3;
    // a resposta é FE
    $res4 = base_convert(254, 10, 2);
    echo $res4;
    // a resposta é 11111110
?>

<!-- FUNÇÕES DE ARREDONDAMENTO:

ceil(), floor(), round() -->

<!-- HIPOTENUSA:

hypot() -->

<!-- DIVISÃO INTEIRA:

intdiv() -->

<!-- VALOR MINIMO E MAXIMO DE UMA SEQUENCIA -->

<?php 
    $res5 = min(5, 10);
    echo $res5;
    //a resposta é 5
    $res6 = max(5, 10);
    echo $res6;
    //a resposta é 10
    $res7 = min(1, 5, 10, 15, 20, 30, 40);
    echo $res7;
    //a resposta é 1
    $res8 = max(1, 5, 10, 15, 20, 30, 40);
    echo $res8;
    //a resposta é 40
?>

<!-- VALOR DE PI -->

<?php 
    $res9 = pi();
    echo $res9;
    //a resposta é 3,1415926535898
    $res10 = M_PI; //M_PI é uma constante já declarada do php
    echo $res10;
    //a resposta é 3,1415926535898
?>

<!-- FUNÇÃO DE POTENCIA --> 

<?php 
    $res11 = 5 ** 2;
    echo $res11;
    //a respota é 25
    $res12 = pow(5, 2);
    echo $res12;
    //a respota é 25
?>

<!-- SENO, COSSENO E TANGENTE:

sin(), cos(), tan() -->

<!-- RAIZ QUADRADA -->

<?php 
    $res13 = sqrt(81);
    echo $res13;
    //a resposta é 9
    $res14 = 81 ** (1/2);
    echo $res14;
    //a resposta é 9
    $res15 = 27 ** (1/3); //raiz cubica
    echo $res15;
    //a resposta é 3
?>