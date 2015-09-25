<?php 

	include 'conexao.php';


	//recebendo variavel via post
	$nomeContato = $_POST['nome'];
	$emailContato = $_POST['email'];
	$enderecoContato = $_POST['endereco'];
	$estadoContato = $_POST['estado'];
	$cidadeContato = $_POST['cidade'];
	$cpf_cnpjContato = $_POST['cpf'];
	$rgContato = $_POST['rg'];
	$celularContato = $_POST['tel'];
	$empresaContato = $_POST['empresa'];
	$cargoContato = $_POST['cargo'];
	$websiteContato = $_POST['website'];
	$redesocialContato = $_POST['redesocial'];
	$nascimentoContato = $_POST['aniversario'];
	$tagsContato = $_POST['tags'];
	$apelidoContato = $_POST['apelido'];
	$anotacoesContato = $_POST['anotacoes'];


	$inserir = $conexao_pdo->prepare("INSERT INTO contatos (nomeContato, emailContato, enderecoContato, estadoContato, cidadeContato, cpf_cnpjContato, rgContato, celularContato, empresaContato, cargoContato, websiteContato, redesocialContato, nascimentoContato, tagsContato, apelidoContato, anotacoesContato) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

	$dados = array($nomeContato, $emailContato, $enderecoContato, $estadoContato, $cidadeContato, $cpf_cnpjContato, $rgContato, $celularContato, $empresaContato, $cargoContato, $websiteContato, $redesocialContato, $nascimentoContato, $tagsContato,	$apelidoContato, $anotacoesContato);
	$cadastra = $inserir->execute($dados);

	header("Location: ./");
	
 ?>