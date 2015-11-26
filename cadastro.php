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

    <style type="text/css">
      #cadastro{
        margin-top: 5%;
        width: 60%;
        height: auto;
        margin-left: 20%; 
        background-size: 50%;
        background-color:#E6E6FA;
        -moz-border-radius:7px;
        -webkit-border-radius:7px;
        border-radius:20px;
        padding: 36px;
      }
    </style>
	</head>
	<body>
    <div class="container">
    <div id="cadastro" width="100px" heigth="500px">
<form action="cadastrarUsuario.php" method="POST" class="">
              <div class="form-group">
                Email<br>
                <input type="text" name="emailNovo" placeholder="E-mail" class="form-control">
              </div>
              <div class="form-group">
                Senha<br>
                <input type="password" name="senhaNova" placeholder=" Senha" class="form-control">
              </div>
			<div class="form-group">
                Nome<br>
                <input type="text" name="nome" placeholder=" Nome" class="form-control">
              </div>
			 <div class="form-group">
                Telefone<br>
                <input type="text" name="telefone" placeholder=" Número" class="form-control">
              </div> 
			 <div class="form-group">
                CPF<br>
                <input type="text" name="cpf" placeholder="CPF" class="form-control">
              </div>  
			  <div class="form-group">
                Data de Nascimento<br>
                <input type="text" name="data_nasc" placeholder="Data de nascimento"class="form-control">
              </div> 
			  <div class="form-group">
                Endereço<br>
                <input type="text" name="endereco" placeholder="Endereço" class="form-control">
              </div> 
			  <button type="submit" class="btn btn-success">Cadastrar</button>
	</form>
    </div>
  </div>
	</body>
	</head>
</html>