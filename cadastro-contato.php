<html>
	<?php 
	    include('conexao.php');
	    // A classe PDO prepara o comando a ser executado
	    $prepara = $conexao_pdo->prepare('SELECT * FROM estados');
	    $prepara2 = $conexao_pdo->prepare('SELECT * FROM cidades');
	    // A classe PDO executa o comando
	    $prepara->execute();
	    $prepara2->execute();
  	?>
	<head>
	    <title>Agenda de Contatos Online - Cadastro de Contato</title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
	    rel="stylesheet" type="text/css">
	    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"
	    rel="stylesheet" type="text/css">
	    <link rel="stylesheet" type="text/css" href="css/estilo.css">
	    <script>
	      (document.getElementById(nome).focus());
	    </script>
	</head>
	<body>
	    <div class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="index.php"><span>Agenda de Contatos Online</span></a>
	        </div>
	        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li>
	              <a href="index.php">Home</a>
	            </li>
	            <li class="active">
	              <a href="cadastro-contato.php">Novo Contato</a>
	            </li>
	            <li class="dropdown">
	              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Adm <i class="fa fa-caret-down"></i></a>
	              <ul class="dropdown-menu" role="menu">
	                <li>
                  		<a href="cadastro-cidade.php">Cadastrar Cidade</a>
                	</li>               	
                	<li>
                  		<a href="cadastro-estado.php">Cadastrar Estado</a>
                	</li>
	              </ul>
	            </li>
	          </ul>
	        </div>
	      </div>
	    </div>
	    <div class="cover">
	      <div class="container">
	        <div class="row">
	          <div class="col-md-12 text-center">
	            <h1>Inserir Contato</h1>
	            <form class="form-horizontal" role="form" action="inserir-contato.php" method="POST">
	              <div class="form-group">
	                <div class="col-sm-2">
	                  <label class="control-label">Nome</label>
	                </div>
	                <div class="col-sm-10">
	                  <input name="nome" type="text" class="form-control" placeholder="Nome completo" value="" autofocus="" required="">
	                </div>
	              </div>
	              <div class="form-group">
	                <div class="col-sm-2">
	                  <label for="inputEmail3" class="control-label">Email</label>
	                </div>
	                <div class="col-sm-10">
	                  <input name="email" type="email" class="form-control" id="inputEmail3" placeholder="exemplo@hotmail.com">
	                </div>
	              </div>
	              <div class="form-group">
	                <div class="col-sm-2">
	                  <label class="control-label">Endereço</label>
	                </div>
	                <div class="col-sm-10">
	                  <input name="endereco" type="text" class="form-control" placeholder="Ex.: Rua Centro Oeste, 03 - Centro">
	                </div>
	              </div>
	              <div class="form-group">
	                <div class="col-sm-2">
	                  <label class="control-label">Estado</label>
	                </div>
	                <div class="col-sm-10">
	                  <select class="form-control" name="estado">
		                  <?php  
		                  	while ( $linha = $prepara->fetch() ) 
		                  	{
		                    	echo "<option value=$linha[siglaEstado]>".$linha['nomeEstado']."</option>";
		                    }
		                  ?>
	                  </select>
	                </div>
	              </div>
	              <div class="form-group">
	                <div class="col-sm-2">
	                  <label class="control-label">Cidade</label>
	                </div>
	                <div class="col-sm-10">
	                  <select class="form-control" name="cidade">
	                    <?php  
		                  	while ( $linha = $prepara2->fetch() ) 
		                  	{
		                    	echo "<option value=$linha[idCidade]>".$linha['nomeCidade']."</option>";
		                    }
		                ?>
	                  </select>
	                </div>
	              </div>
	              <div class="form-group">
	                <div class="col-sm-2">
	                  <label class="control-label">CPF/CNPJ</label>
	                </div>
	                <div class="col-sm-10">
	                  <input name="cpf" type="text" class="form-control" placeholder="Informe somente números" pattern="[0-9]{11}">
	                </div>
	              </div>
	              <div class="form-group">
	                <div class="col-sm-2">
	                  <label class="control-label">RG</label>
	                </div>
	                <div class="col-sm-10">
	                  <input name="rg" type="text" class="form-control" placeholder="RG">
	                </div>
	              </div>
	              <div class="form-group">
	                <div class="col-sm-2">
	                  <label class="control-label">Telefone/Celular</label>
	                </div>
	                <div class="col-sm-10">
	                  <input name="tel" type="tel" class="form-control" placeholder="Telefone/Celular" value="" autofocus="" required="">
	                </div>
	              </div>
	              <div class="form-group">
	                <div class="col-sm-2">
	                  <label class="control-label">Empresa</label>
	                </div>
	                <div class="col-sm-10">
	                  <input name="empresa" type="text" class="form-control" placeholder="Empresa">
	                </div>
	              </div>
	              <div class="form-group">
	                <div class="col-sm-2">
	                  <label class="control-label">Cargo</label>
	                </div>
	                <div class="col-sm-10">
	                  <input name="cargo" type="text" class="form-control" placeholder="Ex: Supervisor RH">
	                </div>
	              </div>
	              <div class="form-group">
	                <div class="col-sm-2">
	                  <label class="control-label">Web Site</label>
	                </div>
	                <div class="col-sm-10">
	                  <input name="website" type="text" class="form-control" placeholder="www.website.com.br">
	                </div>
	              </div>
	              <div class="form-group">
	                <div class="col-sm-2">
	                  <label class="control-label">Rede Social</label>
	                </div>
	                <div class="col-sm-10">
	                  <input name="redesocial" type="text" class="form-control" placeholder="facebook.com/fulano">
	                </div>
	              </div>
	              <div class="form-group">
	                <div class="col-sm-2">
	                  <label class="control-label">Aniversário</label>
	                </div>
	                <div class="col-sm-10">
	                  <input name="aniversario" type="date" class="form-control" placeholder="dd/mm/aaaa">
	                </div>
	              </div>
	              <div class="form-group">
	                <div class="col-sm-2">
	                  <label class="control-label">Tags</label>
	                </div>
	                <div class="col-sm-10">
	                  <input name="tags" type="text" class="form-control" placeholder="Ex.: Amigos, Faculdade, Funcionário">
	                </div>
	              </div>
	              <div class="form-group">
	                <div class="col-sm-2">
	                  <label class="control-label">Apelido</label>
	                </div>
	                <div class="col-sm-10">
	                  <input name="apelido" type="text" class="form-control" placeholder="Apelido">
	                </div>
	              </div>
	              <div class="form-group">
	                <div class="col-sm-2">
	                  <label class="control-label">Anotações</label>
	                </div>
	                <div class="col-sm-10">
	                  <textarea name="anotacoes" class="form-control"></textarea>
	                </div>
	              </div>
	              <div class="form-group">
	                <div class="col-sm-offset-2 col-sm-10">
	                  <button type="submit" class="btn btn-default">Salvar</button>
	                </div>
	              </div>
	            </form>
	          </div>
	        </div>
	      </div>
	    </div>
	    <footer class="section section-primary">
			<div class="container">
		        <div class="row">
					<div class="col-sm-6">
			            <h1>Agenda Online</h1>
			            <p>Guilherme Policarpo Silva - RA: 5113232</p>
					</div>
					<div class="col-sm-6">
			            <p class="text-info text-right">
			              <br>
			              <br>
			            </p>
			            <div class="row">
			              <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left">
			                <a href="#"><i class="fa fa-2x fa-fw fa-instagram text-inverse"></i></a>
			                <a href="#"><i class="fa fa-2x fa-fw fa-twitter text-inverse"></i></a>
			                <a href="#"><i class="fa fa-2x fa-fw fa-facebook text-inverse"></i></a>
			                <a href="https://github.com/guilhermepolicarpo/agendaonline"><i class="fa fa-2x fa-fw fa-github text-inverse"></i></a>
			              </div>
			            </div>
			            <div class="row">
			              <div class="col-md-12 hidden-xs text-right">
			                <a href="#"><i class="fa fa-2x fa-fw fa-instagram text-inverse"></i></a>
			                <a href="#"><i class="fa fa-2x fa-fw fa-twitter text-inverse"></i></a>
			                <a href="#"><i class="fa fa-2x fa-facebook fa-fw text-inverse"></i></a>
			                <a href="https://github.com/guilhermepolicarpo/agendaonline"><i class="fa fa-2x fa-fw fa-github text-inverse"></i></a>
			              </div>
			            </div>
			          </div>
		        </div>
	      	</div>
	    </footer>
	</body>
</html>