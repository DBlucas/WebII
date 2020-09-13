<?php 

//Sequencia de Fibonacci em php

//função que gera a sequência de fibonacci e retorna em array
function SeqFibo($q, $zero = false){
	if($q >= 2){ 
		$f = ($zero) ? [0,1] : [1,1]; 
		for($i = 2; $i < $q; $i++){
			$f[$i] = $f[$i-1] + $f[$i-2];		
		}
		return $f;
	}
	return ($q == 1) ? [1] : [];
}
 
//exibindo os primeiros 20 números da sequência de fibonacci (começando por 0)
$fib = SeqFibo(40, true);
foreach($fib as $v){
	echo (end($fib) == $v) ? $v : $v.', ';	
}