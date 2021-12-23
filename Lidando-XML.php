<?php
 
// Transformando arquivo XML em Objeto
$xml = simplexml_load_file('materias.xml');
 
// Exibe as informações do XML
echo 'Título: ' . $xml->titulo . '<br>';
'<br>';
 
// Percorre todos os registros de vendas
foreach($xml->materia as $m):
	echo 'Sigla: ' . $m->sigla . '<br>';
	echo 'Professor: ' . $m->professor . '<br>';
	echo 'Status: ' . $m->status . '<br>';

	echo '<hr>';
endforeach;
?>   
