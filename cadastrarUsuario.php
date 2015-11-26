<?php
include "conexao.php";

	$nome = $_POST["nome"];
	$telefone = $_POST["telefone"];
	$cpf = $_POST["cpf"];
	$datadenascimento = $_POST["data_nasc"];
	$endereco = $_POST["endereco"];
	$email = $_POST["emailNovo"];
	$senha = $_POST["senhaNova"];
	$md5 = md5($senha);
	$sql = "insert into usuario(nome,email,cpf, data_nasc, telefone, endereco, senha) 
		values('$nome','$email','$cpf','$datadenascimento','$telefone','$endereco','$md5')"; echo $sql;
	$res = mysqli_query($con,$sql);
	header("location: listarusuario.php");
?>	