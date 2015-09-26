<html>
  <?php 
    include('conexao.php');
    // A classe PDO prepara o comando a ser executado
    $prepara = $conexao_pdo->prepare('SELECT * FROM contatos');
    // A classe PDO executa o comando
    $prepara->execute();
  ?>
  <head>
    <title>Agenda de Contatos Online</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/estilo.css" rel="stylesheet" type="text/css">
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
          <a class="navbar-brand" href="index.php">Agenda de Contatos Online</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
              <a href="index.php">Home</a>
            </li>
            <li>
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
            <h1>Contatos</h1>
            <br>            
            <table class="table">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Telefone/Celular</th>
                  <th>Endereço</th>
                  <th>E-mail</th>
                  <th>Apelido</th>
                  <th>Alterar</th>
                  <th>Deletar</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  while ( $linha = $prepara->fetch() ) {
                    echo '<tr><td>'.$linha['nomeContato'].'</td>';
                    echo '<td>'.$linha['celularContato'].'</td>';
                    echo '<td>'.$linha['enderecoContato'].'</td>';
                    echo '<td>'.$linha['emailContato'].'</td>';
                    echo '<td>'.$linha['apelidoContato'].'</td>';
                    echo '<td>Alterar</td><td>Deletar</td></tr>';
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <footer class="section section-primary">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h1>Agenda Online</h1>
            <p>Guilherme Policarpo Silva - 5113232</p>
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