<?php

/*************************************************************************************
 * Objetivo: Arquivo de funções matemáticas que poderá ser utilizado dentro do projeto
 * Autor: Vitor Aguiar
 * Data: 04/02/2002
 * Versão: 1.0
 **************************************************************************************/

function calcularMedia ($valor1, $valor2, $valor3, $valor4) {
    
    //Declaração de variaveis locais da função (todas as variaveis recebem os dados do argumento da function)
    $num1 = (double) $valor1;
    $num2 = (double) $valor2;
    $num3 = (double) $valor3;
    $num4 = (double) $valor4;   
    $media = (double) 0;

     //Operação media sendo realizada
    $media = ($num1 + $num2 + $num3 + $num4) / 4;

    //round() - permite ajustar a quantidade de casas decimais realizando o arredondamento
    $media = round($media,2);

    return $media; 

}


?>