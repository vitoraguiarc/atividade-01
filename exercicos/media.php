<?php
    
    //import arquivo configuração de variaveis
    require_once('../modulos/config.php');
    
    //import arquivo função media
    require_once('../modulos/calculos.php');

    
    //Declaração de variavél nomeVar = (tipoDados) valorInical;
    $nota1 = (double) 0;
    $nota2 = (double) 0;
    $nota3 = (double) 0;
    $nota4 = (double) 0;
    $media = (double) 0;

    //Validação para tratar se o botão foi clicado
    if(isset($_POST["btncalc"])) 
    {
        //Recebendo dados utilizando o POST do formulario
        $nota1 = $_POST ["txtn1"];
        $nota2 = $_POST ["txtn2"];
        $nota3 = $_POST ["txtn3"];
        $nota4 = $_POST ["txtn4"];
     
            //Operadores Lógicos
                //OU - or, ||
                //E - and, &
                //Negação, !

            /*  is_numeric() - permite validar se o conteúdo é um número
                is_string() - permite validar se o conteúdo é uma string
                is_integer() - permite validar se o conteúdo é um inteiro
                is_double() ou is_float() - permite validar se o conteúdo é um número quebrado
                is_array() - permite validar se o conteúdo é um vetor ou uma matriz
                is_bool() - permite validar se o conteúdo é um booleano
                ... e outras opções de validação
            */

            //Tratamento de erro para validação de caixa vazia
            if($_POST["txtn1"] == "" || $_POST["txtn2"] == "" || $_POST["txtn3"] == "" || $_POST["txtn4"] == "")
            {
                echo(ERRO_MSG_NOTA_VAZIA);
            }else
            {   
                //Tratamento de erro para validção de caracteres não n
                if(!is_numeric($nota1) || !is_numeric($nota2) || !is_numeric($nota3) || !is_numeric($nota4))
                {
                    echo(ERRO_MSG_NAO_NUMERO);
                }else
                {
                    //Realizando o calculo da média
                    $media = calcularMedia($nota1,$nota2,$nota3,$nota4); 
                }
            
           
            }
        
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Média</title>
       <link rel="stylesheet" type="text/css" href="../css/style-media.css">
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="../style.css">
       <script src="../hambruger.js" defer></script>
       <meta charset="utf-8">
    </head>
        <body>
    
            <div class="container">
                <nav class="navbar">
                    <div class="hamburger-menu">
                        <div class="line line-1"></div>
                        <div class="line line-2"></div>
                        <div class="line line-3"></div>
                    </div>
                    
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="../exercicos/media.php" class="nav-link">Média</a>
                        </li>
                        <li class="nav-item">
                            <a href="../exercicos/calculadora.php" class="nav-link">Calculadora</a>
                        </li>
                        <li class="nav-item">
                            <a href="../exercicos/tabuada.php" class="nav-link">Tabuada</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Pares e Ímpares</a>
                        </li>    
                    </ul>
                </nav>
                <div id="conteudo">
                    <header id="titulo">
                        Calculo de Médias
                    </header>
                    <div id="form">
                        <form name="frmMedia" method="post" action="media.php">
                            <div>
                                <label>Nota 1:</label>
                                <input type="text" name="txtn1" value="<?=($nota1)?>"  > 
                            </div>
                            
                            <div>
                                <label>Nota 2:</label>
                                <input type="text" name="txtn2" value="<?=($nota2)?>" > 
                            </div>
                            
                            <div>
                                <label>Nota 3:</label>
                                <input type="text" name="txtn3" value="<?=($nota3)?>" > 
                            </div>
                            
                            <div>
                                <label>Nota 4:</label>
                                <input type="text" name="txtn4" value="<?=($nota4)?>" >
                            </div>
                            <div>
                                <input type="submit" name="btncalc" value ="Calcular" >
                                <div id="botaoReset">
                                    <a href="media.php">
                                        Novo Cálculo
                                    </a>    
                                </div>
                            </div>
                        </form>

                    </div>

                    <footer id="resultado">
                        A média é: <?=$media?>
                    </footer>
                    
                </div>
        
            
            </div>
                
            
        </body>

</html>