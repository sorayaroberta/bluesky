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
	<?php
		include 'conexao.php';
		$sql="select * from usuario";
		$res = mysqli_query($con, $sql);
		echo "<table class=table>";
		echo "<tr>";
		echo "<td> Nome </td>";
		echo "<td> E-mail </td>";
		echo "<td> CPF </td>";
		while($l = $res ->fetch_assoc()){
			echo "<tr>";
			echo "<td>".$l['nome']."</td>";
			echo "<td>".$l['email']."</td>";
			echo "<td>".$l['cpf']."</td>";
			echo "</tr>";
		}
		echo "</table>";
	?>
	</body>
	</head>
</html>