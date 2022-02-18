<?php
	
	//import do arquivo de configuração de variaveis
	require_once('../modulos/config.php');

	//import arquivo funções para calculos matemáticos	

	require_once('../modulos/calculos.php');

	//Declaração de variáveis
	$valor1 = (double) 0;
	$valor2 = (double) 0;
	$resultado =  (double) 0;
	$opcao = (string) null;

	//Validação para verificar se o botão foi clicado
	if(isset($_POST['btncalc']))
	{	
		//Recebe os dados do formulário
		$valor1 = $_POST['txtn1'];
		$valor2 = $_POST['txtn2'];
		
		//Validação de tratamento para caixa vazia
		if($_POST['txtn1'] == "" || $_POST['txtn2'] == "")
			echo(ERRO_MSG_CAIXA_VAZIA);	
		else
		{	
			//Validação de tratamento de erro para rdo sem escolha
			if(!isset($_POST['rdocalc']))
				echo(ERRO_MSG_OPERACAO_CALCULO);
			else
			{	
				//Validação chegada de string
				if(!is_numeric($valor1) || !is_numeric($valor2))
					echo(ERRO_MSG_CARACTER_INVALIDO_TEXTO);	
				else
				{
					//Apenas podemos receber o valor do rdo quando ele existir
					$opcao = strtoupper($_POST['rdocalc']);
					
					//Chamada da função de calculos matemáticos, passamos os valores, o tipo da operação e recebemos o valor do resultado
					$resultado = operacaoMatematica($valor1, $valor2, $opcao);
					
					
				}
				
			}
			
		}	
	}

?>

<html>
    <head>
       <title>Calculadora - Simples</title>
       <link rel="stylesheet" type="text/css" href="../css/style-calculadora.css">
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="../style.css">
       <script src="../hambruger.js" defer></script>
    </head>
        <body>
            <div class="container">
                <div class="header-calc">
                    <h1>Calculadora</h1>
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
                
                <div id="conteudo">
                    <div id="titulo">
                        Calculadora Simples
                    </div>
                    <div id="form">
                        <form name="frmcalculadora" method="post" action="calculadora.php">
                            Valor 1:<input type="text"  name="txtn1" value="<?=$valor1?>" > <br>
                            Valor 2:<input type="text" name="txtn2" value="<?=$valor2?>" > <br>
                            <div id="container_opcoes">
                                <input type="radio" name="rdocalc" value="somar" class="radio" <?=$opcao == 'SOMAR' ? 'checked' : null; ?>> Somar <br>
                                <input type="radio" name="rdocalc" value="subtrair" class="radio"<?=$opcao == 'SUBTRAIR' ? 'checked' : null; ?> > Subtrair <br>
                                <input type="radio" name="rdocalc" value="multiplicar" class="radio"<?=$opcao == 'MULTIPLICAR' ? 'checked' : null; ?> > Multiplicar <br>
                                <input type="radio" name="rdocalc" value="dividir" class="radio"<?=$opcao == 'DIVIDIR' ? 'checked' : null; ?>> Dividir <br>
                            </div>
                            <div class="botao">
                                <input type="submit" name="btncalc" value ="Calcular" class="btnCalc" >
                            </div>                    	
                            <div id="resultado">
                                <p><?=$resultado?></p>
                            </div>                
                        </form>
                    </div>
                            
                </div>  

            </div>      
                
            
        </body>

</html>
