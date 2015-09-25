<?php 

	include 'conexao.php';


	//recebendo variavel via post
	$nomeCidade = $_POST['nome'];
	$siglaEstado = $_POST['estado'];
	

	$inserir = $conexao_pdo->prepare("INSERT INTO cidades (nomeCidade, siglaEstado) VALUES (?, ?)");

	$dados = array($nomeCidade, $siglaEstado);
	$cadastra = $inserir->execute($dados);

	header("Location: ./cadastro-cidade.php");

 ?>	