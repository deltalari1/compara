<?php
	require_once $_SERVER['DOCUMENT_ROOT']."/compara/conecta.php";
	
	$id_usuario = $_GET["usuario"];

	if ($conn){
		$sql = "SELECT nome, sobrenome, email, senha FROM usuarios WHERE id = $id_usuario";

		// stmt = abreviacao de statement
		$stmt = mysqli_prepare($conn, $sql);

		/* definindo os parametros (?) da consulta	(i - int, f - float, s - string)*/
		//mysqli_stmt_bind_param($stmt, "i", $id_usuario);

		mysqli_execute($stmt);

		// armazenando o resultado da consulta na variavel
		$resultado = mysqli_stmt_get_result($stmt);

		// a edicao vai retornar apenas uma linha, pois a busca é pela primary key da tabela
		if (mysqli_num_rows($resultado) == 1) {
			// pega os dados relativos a linha que retornou e armazenada na variável abaixo
			$usuario = mysqli_fetch_array($resultado);
			
			$nome 	= $usuario["nome"];
			$sobrenome = $usuario["sobrenome"];
			$email	= $usuario["email"]; 
			$senha = $usuario["senha"];
		} else {
			echo ("Usuário não encontrado.");
		}
	} else {
		die("Falha na conexão " . mysqli_connect_error() );
	}
?>