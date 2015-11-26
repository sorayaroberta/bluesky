<?php
include "conexao.php";

	$nome = $_POST["nome_aeronave"];
	$quant_assentos = $_POST["quant_assentos"];
	$Cidade_origem = $_POST["cidadeorigem"];
	$Cidade_destino = $_POST["cidadedestino"];
	$sql = "insert into aeronave(nome,quant_assentos,cidade_origem, cidade_destino) 
		values('$nome','$quant_assentos','$Cidade_origem','$Cidade_destino')"; echo $sql;
	$res = mysqli_query($con,$sql);
	header("location: listaraeronave.php");
?>	