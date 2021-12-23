<?php

//string json (array contendo 3 elementos, nesse caso, matérias do curso de ADS)
$json_str = '{"materias": '.
		'[{"nome":"Banco de dados II", "status":"Aprovado"},'.
		'{"nome":"Projeto Integrado", "status":"Aprovado"},'.
		'{"nome":"Programação Web Dinâmica", "status":"Prova Final"}'.
		']}';

//faz o parsing da string, criando o array "materias"
$jsonObj = json_decode($json_str);
$materias = $jsonObj->materias;

//navega pelos elementos do array, imprimindo cada matéria e seus status
foreach ( $materias as $m )
    {
	echo "nome: $m->nome - status: $m->status<br>";
    }
?>