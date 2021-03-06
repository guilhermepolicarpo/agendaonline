<html>
    <head>
        <?php 
            include('conexao.php');
            // A classe PDO prepara o comando a ser executado
            $prepara = $conexao_pdo->prepare('SELECT * FROM cidades');
            $prepara2 = $conexao_pdo->prepare('SELECT * FROM estados');
            // A classe PDO executa o comando
            $prepara->execute();
            $prepara2->execute();
        ?>
        <title>Agenda de Contatos Online - Cadastro de Cidade</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="estilo.css" rel="stylesheet" type="text/css">
        <script>
            (document.getElementById(nome).focus());
        </script>
    </head><body>
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
                        <li>
                            <a href="cadastro-contato.php">Novo Contato</a>
                        </li>
                        <li class="active dropdown">
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
                        <h1>Inserir Cidade</h1>
                        <form class="form-horizontal" role="form" action="inserir-cidade.php" method="POST">
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label class="control-label">Cidade</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" name="nome" class="form-control" placeholder="Nome completo" value="" autofocus="" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label class="control-label">Estado</label>
                                </div>
                                <div class="col-sm-10">
                                    <select class="form-control" name="estado">
                                        <?php  
                                            while ( $linha = $prepara2->fetch() ) 
                                            {
                                                echo "<option value=$linha[siglaEstado]>".$linha['nomeEstado']."</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">Salvar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12 text-center">
                        <br/>
                        <h2>Cidades Cadastradas</h2>
                        <br>            
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Cidade</th>
                              <th>Estado</th>
                              <th>Alterar</th>
                              <th>Deletar</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                              while ( $linha = $prepara->fetch() ) 
                              {
                                echo '<tr><td>'.$linha['nomeCidade'].'</td>';
                                echo '<td>'.$linha['siglaEstado'].'</td>';
                                echo '<td>Alterar</td><td>Deletar</td></tr>';
                              }
                            ?>
                          </tbody>
                        </table>
                    </div>
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