<?php 

$diccionario = array(
		'title'=>'POO y MVC en PHP',
		'keywords'=>'poo, mvc, php, arquitectura de software',
		'description'=>'El paradigma de la programación orientada a objetos con el
		patrón arquitectónico MVC en PHP',
		'data_content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
		'footer'=>'Esto es un pie de página'
		);
$template = file_get_contents('./view/template_01.html');
foreach ($diccionario as $key => $value) {
	$template = str_replace('{'.$key.'}', $value, $template);	
 }
 print $template;
?>
