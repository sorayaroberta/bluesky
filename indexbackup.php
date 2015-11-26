<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>Companhia aérea BlueSKY</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/estilo.css">
		<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
		<script src='js/bootstrap.min.js' type="text/javascript"></script>
	</head>
	<body>
		<nav class="navbar navbar-inverse" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">BlueSKY </a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Ver voo<b class="caret"></b></a>
							
						</li>
						<li><a href="CadastroPassagens.php">Passagens</a></li>
						<li><a href="CadastroAeronave.php">Aeronave</a></li>
						<li><a href= "cadastro.php"> Cadastre-se </a></li> 
					</ul>
					<form class="navbar-form navbar-right" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Pesquisar">
						</div>
						<button type="submit" class="btn btn-default">Pesquisar</button>
					</form>
				</div>
			</div>
		</nav> <!-- final do navbar -->
		<div class="wrapper" role="main">
			<div class="container">
				<div class="row">
					<div id="conteudo" class="col-md-9">
						<div class="artigo" role="article">
							<div class="row">
								<div class="col-md-4">
									<a href="#" title="">
										<img src="http://blog.tnh1.ne10.uol.com.br/nidelins/files/2014/12/recife2.jpg" alt="">
									</a>
								</div>
								
								<div class="col-md-8">
									<h2><a href="#">Recife</a></h2>
									<p>
										Conheça a história de umas das cidades que marcou
										a história do Brasil.
									</p>
									<a href="#">Saiba mais</a>
								</div>
							</div><!-- div row conteudo -->
						</div>
						<div class="artigo" role="article">
							<div class="row">
								<div class="col-md-4">
									<a href="#" title="">
										<img src="http://img.dicasdehoteis.net/2014/10/rio-de-janeiro-melhores-hoteis.jpg" alt="">
									</a>
								</div>
								<div class="col-md-8">
									<h2><a href="#">Rio de Janeiro</a></h2>
									<p>
										Venha conhecer a cidade maravilhosa onde está localizada uma das
										sete maravilhas do mundo.
									</p>
									<a href="#">Saiba mais</a>
								</div>
							</div><!-- div row conteudo -->
						</div>
					</div><!-- div conteudo -->

					<!-- Sidebar -->
					

				</div><!-- div row container -->
			</div><!-- div container -->
		</div><!-- div wrapper -->
		<footer> <!-- Aqui e a area do footer -->
			<div class="container">
				<div class="row">
					
					<div id="redesSociais" class="col-md-3">
						<h4>Redes Sociais</h4>
						<ul>
							<li><a href="#">Facebook</a></li>
							<li><a href="#">Googleplus</a></li>
							<li><a href="#">Twitter</a></li>
						</ul>
					</div> <!-- Aqui e a area das redes sociais -->
					<div id="logoFooter" class="col-md-offset-3 col-md-3">
						<h2>BlueSKY</h2>
					</div> <!-- Aqui e a area da logo do rodape -->
				</div>
			</div>
		</footer>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p>&copy; Todos os direitos reservados.</p>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>