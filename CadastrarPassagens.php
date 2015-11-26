<?php
include "conexao.php";

	$local_origem = $_POST["local_origem"];
	$local_destino = $_POST["local_destino"];
	$horario_saida = $_POST["horario_saida"];
	$horario_chegada = $_POST["horario_chegada"];
	$situacao = $_POST["situacao"];
	$data_saida = $_POST["data_saida"];
	$data_chegada = $_POST["data_chegada"];
	$num_assentos = $_POST["num_assentos"];
	$sql = "insert into passagens(local_origem,local_destino,horario_saida, horario_chegada,situacao, data_saida, data_chegada,num_assentos ) 
		values('$local_origem','$local_destino','$horario_saida','$horario_chegada','$situacao', '$data_saida','$data_chegada','$num_assentos')"; echo $sql;
	$res = mysqli_query($con,$sql);
	echo $sql;
	header("location: ListarPassagens.php");
?>	