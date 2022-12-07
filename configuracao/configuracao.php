<?php include_once "../protege.php";?>

<!DOCTYPE html>
<html>
<head>
    <title>Configurações</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <link rel="stylesheet" type="text/css" href="/compara/estilo.css">
</head>
<body>
	<?php include_once $_SERVER['DOCUMENT_ROOT']."/compara/navbar/navbartop.php";?>

	<?php require_once "recuperar.php"?>

	<div class="container mt-5">
		<form class="row" method="POST" enctype="multipart/form-data">
			<div class="col-6 mb-3">
				<label class="form-label fw-bold">Nome</label>
				<input type="text" name="nome" class="form-control" value="<?php echo($nome);?>" required>
			</div>

			<div class="col-6 mb-3">
				<label class="form-label fw-bold">Sobrenome</label>
				<input type="text" name="sobrenome" class="form-control" value="<?php echo($sobrenome);?>" required>
			</div>

			<div class="col-6 mb-3">
				<label class="form-label fw-bold">Email</label>
				<input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo($email);?>" required>
			</div>

			<div class="col-6 mb-3">
				<label class="form-label fw-bold">Senha</label>
				<input type="password" name="senha" class="form-control" placeholder="Senha" value="<?php echo($senha);?>" required>
			</div>

			<div class="mb-3">
				<label class="form-label fw-bold">Foto de perfil</label>
				<input type="file" name="imagem" class="form-control">
			</div>

			<div class="mt-3">
				<input class="btn botao-vermelho btn-danger fw-bold" type="submit" name="salvar" value="Salvar">
			</div>

			<div class="mt-3">
				<?php echo("<a href='/compara/perfil/perfil.php?usuario=$_SESSION[entrar]' class='fw-bold links link-danger'>< VOLTAR</a>") ?>
			</div>
		</form>
	</div>
	
	<?php include_once $_SERVER['DOCUMENT_ROOT']."/compara/navbar/navbarbottom.php";?>
	
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>

<?php include "editar.php";?>