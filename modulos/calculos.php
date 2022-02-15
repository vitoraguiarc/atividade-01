<?php

/*************************************************************************************
 * Objetivo: Arquivo de funções matemáticas que poderá ser utilizado dentro do projeto
 * Autor: Vitor Aguiar
 * Data: 04/02/2002
 * Versão: 1.0
 **************************************************************************************/

//funções projeto media
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

//funções projeto calculadora
function operacaoMatematica ($numero1, $numero2, $operacao) {

    //Declaração de variaveis locais da função (todas as variaveis recebem os dados do argumento da function)
    $num1 = (double) $numero1;
    $num2 = (double) $numero2;
    $tipoCalculo = (string) $operacao; 
    $result = (double) 0;

    //Processamento do calculo das operações com switch case
    switch ($tipoCalculo) 
    {
        case ('SOMAR'):
            $result = $num1 + $num2;
            break;
        case ('SUBTRAIR'):
            $result = $num1 - $num2;
            break;
        case ('MULTIPLICAR'):
            $result = $num1 * $num2;
            break;
        case ('DIVIDIR'):	
            if($num2 == 0)
                echo(ERRO_DIVISAO_COM_ZERO);
            else
                $result = $num1 / $num2;
            break;		
    }
        //round() - permite ajustar a quantidade de casas decimais realizando o arredondamento
        $result = round($result,2);
    
        return $result;

}

//Função para tabuada
function multiplicar($numerador, $multiplicador) 
    {

        //Declaração de variaveis locais da função
        $numNumerador = (int) $numerador;
        $numMultiplicador = (int) $multiplicador;
        $cont = (int) 0;
        $resultado = (string) null;
        $resultadoLocal = (int) 0;

        //Craindo looping com while para a realização da tabuada de acordo com os valores solicidadps
        while ($cont <= $numMultiplicador) {
            $resultadoLocal = $numNumerador * $cont;
            $resultado = $resultado . ("$numNumerador X $cont = " . ("$resultadoLocal") . '<br/>');
            $cont++;   
        }

        return $resultado;      
    }

//Funções projeto par ou impar
function par ($numeroInical, $numeroFinal) {
    $numI = (int) $numeroInical;
    $numF = (int) $numeroFinal;
    $resultado = (string) null;

    while ($numI <= $numF) {
        if ($numI % 2 == 0) {
            $resultado = $resultado . ($numI . '' . '<br/>');
        }
        $numI += 1;
    }
    return $resultado;


}


function impar ($numeroInical, $numeroFinal) {
    $numI = (int) $numeroInical;
    $numF = (int) $numeroFinal;
    $resultado = (string) null;

    while ($numI <= $numF) {
        if ($numI % 2 != 0) {
            $resultado = $resultado . ($numI . '' . '<br/>');
        }
        $numI += 1;
    }
    return $resultado;


}


?>