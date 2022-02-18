<?php
    
    //import arquivo função par ou impar
    require_once('../modulos/calculos.php');

    //import arquivo configuração de variaveis
    require_once('../modulos/config.php');


    //Declaração de variaveis
    $valorInicial = (int) 0;
    $valorFinal = (int) 0;
    $resultadoImpar = (string) null;
    $resultadoPar = (string) null;


    //Validação de campos (click botão, inical maior que final e etc...)
    if (isset($_POST["btncalc"])) {
        $valorInicial = $_POST ["inicial"];
        $valorFinal = $_POST ["final"];

        if ($valorInicial > $valorFinal) 
            echo (ERRO_MSG_INICIAL_MAIOR);
        else {
            if ($valorInicial == $valorFinal)
                echo (ERRO_MSG_INICIAL_IGUAL_FINAL);
            else {
                if ($valorInicial == null || $valorFinal == null) 
                {
                    echo (ERRO_MSG_SELECTED_VAZIA);
                } else {
                        $resultadoPar = par($valorInicial, $valorFinal);
                        $resultadoImpar = impar($valorInicial, $valorFinal);
                       }
                }
            
            } 

    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style-par-impar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
    <script src="../hambruger.js" defer></script>
    <title>Pares e ímpares</title>
</head>
<body>      

    <div class="container">
        <div class="header-par-impar">
            <h1>Pares e Ímpares</h1>
        </div>
        <nav class="navbar">
            <div class="hamburger-menu">
                <div class="line line-1"></div>
                <div class="line line-2"></div>
                <div class="line line-3"></div>
            </div>       
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="../index.html" class="nav-link">Home</a>
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
    
        <div id="conteudo-par-impar">
            <header id="titulo">
                Calculo de Médias
            </header>
            <div id="form">
                <form name="frmImparPar" action="par-impar.php" method="post">
                    <div class="container-select">
                        <label class="label-par-impar">Nº inicial:</label>
                        <select name="inicial" class="select-impar-par">
                        <option value="">Por favor selecione um número</option>
                        <?php
                                $inicial = 0;
                                while ($inicial <= 500) {
                                    echo '<option value="'.$inicial.'">'.$inicial.'</option>';
                                    $inicial++;
                                }
                        ?> 
                        </select>
                    </div>
                    <div class="container-select">
                        <label class="label-par-impar">Nº final:</label>
                        <select name="final" class="select-impar-par" >
                        <option value="" class="label-par-impar">Por favor selecione um número</option>
                        <?php
                                $final = 100;
                                while ($final <= 1000) {
                                    echo '<option value="'.$final.'">'.$final.'</option>';
                                    $final++;
                                }
                        ?> 
                        </select>
                        <div class="botoes">
                            <input type="submit" name="btncalc" value ="Calcular" class="btnCalc"  >
                        
                        <a href="par-impar.php">
                            <input type="submit" name="reset" value="Novo Cálculo" class="btnCalc">
                        </a>    
                        
                        </div>   
                        
                    </div>
                    <div class="resultado"> 
                        <div id="resultado-par">
                            <p class="resultado-label">Resultado Pares</p class="resultado-par-impar"><?= $resultadoPar; ?>
                        </div>  
                        <div id="resultado-impar">
                            <p class="resultado-label">Resultado Ímpares</p class="resultado-par-impar"><?= $resultadoImpar; ?>
                    </div>
                    </div>
                </form>
        <div>
        
        
    </div>

    
    
</body>
</html>