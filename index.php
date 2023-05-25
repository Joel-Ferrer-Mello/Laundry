<?php

/*
Site: Lavandarias BLU
Autor: FEMSoft, Joel Ferrer de Mello
2020
*/

$pagina = 'home';

if(isset($_GET['i'])){
	$pagina = addslashes($_GET['i']);
}

/* Carrega o geader.php */
include 'header.php';

/* Carrega a página escolhida pelo usuário */
switch ($pagina) {
	case 'home':
		include 'home.php';
		break;
	case 'funciona':
		include 'funciona.php';
		break;
	case 'pedidos':
		include 'pedidos.php';
		break;
	
	default:
		include 'home.php';
		break;
}

/* Carrega o footer.php */
include 'foother.php';