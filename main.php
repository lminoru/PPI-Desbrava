<?php include_once("Biblioteca/cabecalho.inc")  ?>

<?php 
switch ($pagAtual) {
	case 'exercicios':
		include_once("Biblioteca/exercicios.inc")
		break;

		'provas':
		include_once("Biblioteca/provas.inc")
		break;

		'amigos':
		include_once("Biblioteca/amigos.inc")
		break;
	
	default:
		include_once("Biblioteca/home.inc")
		break;
}
?>


<?php include_once("Biblioteca/rodape.inc")  ?>

