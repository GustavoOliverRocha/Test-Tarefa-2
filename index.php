<?php

/**
 * 2 -Função Primos($inicial,$final)
 		Crie uma função que receba como parâmetro 2 números  inteiros (inicial e final)  e retorne um array com os números primos estão compreendidos entre o valor inicial e o final, desprezando o número inicial e final recebidos como parâmetro. 
*/

 		function primos($inicial, $final)
 		{
 			$num_primos = [];

 			$divisores = 0;

 			for($i = $inicial+1; $i < $final; $i++)
 			{
 				for($i2 = 2; $i2 < $final; $i2++)
 				{	
 					if(($i % $i2) === 0)
 						$divisores++;
 				}

 				if($divisores === 1)
 					array_push($num_primos,$i);

 				$divisores = 0;
 				$i2 = 2;

 			}
 			//echo $divisores;
 			foreach($num_primos as $n)
 			{
 				echo "<h1>".$n."</h1>";
 			}
 		}
 		
 		primos(1,13);