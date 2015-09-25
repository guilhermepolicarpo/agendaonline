<?php 

	include 'conexao.php';


	//recebendo variavel via post
	$siglaEstado = $_POST['sigla'];
	$nomeEstado = $_POST['nome'];


	$inserir = $conexao_pdo->prepare("INSERT INTO estados (siglaEstado, nomeEstado) VALUES (?, ?)");

	$dados = array($siglaEstado, $nomeEstado);
	$cadastra = $inserir->execute($dados);

	header("Location: ./cadastro-estado.php");

 ?>	