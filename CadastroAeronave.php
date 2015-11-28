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
<form action="CadastrarAeronave.php" method="POST" class="">
			<div class="form-group">
                Modelo da aeronave<br>
                <input type="text" name="nome_aeronave" class="form-control">
              </div>
            <div class="form-group">
                Quantidade de assentos:<br>
                <input type="text" name="quant_assentos" class="form-control">
              </div>
            <div class="form-group">
                Cidade de origem:<br>
                <input type="text" name="cidadeorigem"  class="form-control">
              </div>
			<div class="form-group">
                Cidade de destino:<br>
                <input type="text" name="cidadedestino"  class="form-control">
              </div>
            <div class="form-group">
                Número de assentos:<br>
                <input type="int" name="num_assentos"  class="form-control">
              </div>
			  <button type="submit" class="btn btn-success">Cadastrar</button>
		 </form>
	</body>
	</head>
</html>