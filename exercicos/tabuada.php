<?php
    //importando
    require_once('../modulos/calculos.php');
    require_once('../modulos/config.php');

    //Declaração de variaveis
    $valorTabuada = (int) 0;
    $valorContador = (int) 0;
    $resultadoTabuada = (string) null;
    
    //Validação para tratar se o botão foi clicado
    if(isset($_POST["btncalc"]))
    {   
        //Recebendo dados utilizando o POST do formulario
        $valorTabuada = $_POST ["txtn1"];
        $valorContador = $_POST ["txtn2"];
        $resultadoTabuada = "";

        if($_POST["txtn1"] == "" || $_POST["txtn2"] == "")
            echo (ERRO_MSG_CAIXA_VAZIA_TABUADA);
        else
        {
            if(!is_numeric($valorTabuada) || !is_numeric($valorContador))
                echo (ERRO_MSG_CARACTER_ENTRADA_TABUADA);
            else
            {
                if($valorContador == 0 || $valorTabuada == 0)
                    echo (ERRO_MSG_TABUADA_ZERO);
                else {
                    $resultadoTabuada = multiplicar($valorTabuada, $valorContador);
                }
            }
        }
        
    }
        
?>

<!DOCTYPE html>
<html lang="pt - BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style-tabuada.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
    <script src="../hambruger.js" defer></script>
    <title>Tabuada</title>
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
                    <a href="../exercicos/par-impar.php" class="nav-link">Pares e Ímpares</a>
                </li>    
            </ul>
        </nav>
        <div id="conteudo">
            <div id="titulo">
                Tabuada
            </div>
            <div id="form">
                <form name="frmTabuada" action="tabuada.php" method="post">
                    <div class="label">
                        Tabuada: <input type="text" name="txtn1" value="<?=($valorTabuada)?>"> <br>
                        Contador: <input type="text" name="txtn2" value="<?=($valorContador)?>"> <br>
                    </div>
                    <div>
                        <input type="submit" name="btncalc" value ="Calcular" >
                        <div id="botaoReset">
                            <a href="tabuada.php">
                                <input type="submit" name="reset" value="Novo Cálculo">
                            </a>    
                        </div>
                    </div>
                </form>
                <div class="resultado"> 
                        <div id="resultado-tabuada">
                            <p> <?php echo($resultadoTabuada); ?></p>
                        </div>         
                </div>
            </div>
        </div>
    </div>
    
    
</body>
</html>