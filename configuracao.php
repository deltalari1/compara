<!DOCTYPE html>
<html>
<head>
    <title>Cadastro | Compara!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="estilo.css">
	<script src="https://kit.fontawesome.com/73333f2213.js" crossorigin="anonymous"></script>
</head>
<body>

    <nav class="navbar fixed-top navbar-expand-md navbar-dark fundo-customizado">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">
				<img src="logo_branco.png" width="150" height="60" alt="">
			</a>

			<button class="navbar-toggler rounded-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fas fa-bars fa-1x"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbar">
				<div class="me-auto">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle texto-negrito" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorias</a>
							<ul class="dropdown-menu rounded-0">
								<li><a class="dropdown-item" href="#">Alimentação</a></li>
								<li><a class="dropdown-item" href="#">Moda</a></li>
								<li><a class="dropdown-item" href="#">Beleza</a></li>
								<li><a class="dropdown-item" href="#">Entretenimento</a></li>
								<li><a class="dropdown-item" href="#">Saúde</a></li>
							</ul>
						</li>
					</ul>
				</div>
				
				<div class="me-md-3">
					<button type="button" class="btn btn-secondary rounded-0 d-none d-md-block text-nowrap texto-negrito">Adicionar oferta</button>
				</div>

				<div>
					<form class="d-flex" role="search">
						<input class="form-control border-0 rounded-0 " type="search" placeholder="Pesquisar oferta..." aria-label="Pesquisar oferta">
						<button class="btn btn-light border-0 rounded-0" type="submit"">
							<span class="fas fa-search"></span>
						</button>
					</form>
				</div>
				
				<div class="ms-md-2">
					<ul class="navbar-nav d-none d-md-block">
						<li class="nav-item dropdown">
							<a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="fas fa-user-alt fa-1x"></i>
							</a>
							<ul class="dropdown-menu dropdown-menu-end rounded-0">
								<li><a class="dropdown-item" href="#">Perfil</a></li>
								<li><a class="dropdown-item" href="configuracao.php">Configurações</a></li>
								<li><a class="dropdown-item" href="#">Sair</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>


    <?php 
		// primeiro é preciso buscar as informacoes do registro a ser editado
		$id_usuario = $_GET['id_usuario'];

		$conn = mysqli_connect("127.0.0.1", "root", "", "compara");

		if ($conn) {
			/* neste exemplo estamos apenas tratando a entrada de dados da URL */
			 
			// definindo a consulta que será executada
			$sql = "SELECT * FROM usuarios WHERE id = ?";

			// stmt = abreviacao de statement
			$stmt = mysqli_prepare($conn, $sql);

			/* definindo os parametros (?) da consulta
				i - int
				f - float
				s - string
			*/
			mysqli_stmt_bind_param($stmt, "i", $id_usuario);

			// executar a consulta
			mysqli_execute($stmt);

			// armazenando o resultado da consulta na variavel
			$resultado = mysqli_stmt_get_result($stmt);

			// a edicao vai retornar apenas uma linha, pois a busca é pela primary key da tabela
			if (mysqli_num_rows($resultado) == 1) {

				// pega os dados relativo a linha que retornou e armazenada na variável abaixo
				$usuario = mysqli_fetch_array($resultado);

				// pegando o valor dos campos e salvando em variaveis para preencher o formulário
				$nome 	= $usuario["nome"];
				$sobrenome 	= $usuario["sobrenome"];
				$email	= $usuario["email"]; 
				$senha = $usuario["senha"];
				$foto = $usuario["foto"]; // necessário para pré-selecionar o grupo de um contato

				$uploadfile = "";

				


			} else {
				echo ("user não encontrado");
			}
		} else {
			die("Falha na conexão " . mysqli_connect_error() );
		}
	?>


    <div class="container">
		<br>
		<br>
		<br>
		<br>
        <div class="row justify-content-center align-items-center" >
            <div class="col-auto col-lg-5">
                <div class="form-box registration-form p-md-5 p-3">
                    <div class="form-title">
                        <h2 class="fw-bold mb-3">EDITE SEU PERFIL</h2>
                    </div>
                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="form-floating mb-3">
                            <input type="text" name="nome" class="form-control form-control-sm" placeholder="Nome" id="floatingInput" value="<?php echo ($nome); ?>">
                            <label for="floatingInput">Nome</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="Text" name="sobrenome" class="form-control form-control-sm" placeholder="Sobrenome" id="floatingInput" required value="<?php echo ($sobrenome); ?>">
                            <label for="floatingInput">Sobrenome</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control form-control-sm" placeholder="Email" id="floatingInput" required value="<?php echo ($email); ?>" >
                            <label for="floatingInput">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="senha" class="form-control form-control-sm" placeholder="Senha" id="floatingPassword" required value="<?php echo ($senha); ?>">
                            <label for="floatingPassword">Senha</label>
                        </div>
						<div class="form-floating mb-3">
                            <input type="file" name="foto" class="form-control form-control-sm" placeholder="foto" id="floatingPassword" required value="<?php echo ($foto); ?>">
                            <label for="floatingInput">Foto de perfil</label>
                        </div>
                        <div class="mt-3">
                            <input class="btn botao-vermelho btn-danger" type="submit" name="enviar" value="Salvar">
                        </div>
                        <div class="mt-3">
                        <a href="perfil/perfil.php" class="texto-negrito links link-danger">VOLTAR</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        
	<nav class="navbar fixed-bottom navbar-dark bg-custom d-block d-md-none d-xl-none d-xxl-none fundo-customizado">
		<div class="container-fluid justify-content-evenly p-1">
			<a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				<i class="fa-solid fa-house fa-2x icones-rodape"></i>
			</a>
			
			<a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				<i class="fa-solid fa-circle-plus fa-2x icones-rodape"></i>
			</a>

			<a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				<i class="fas fa-user-alt fa-2x icones-rodape"></i>
			</a>
		</div>
	</nav>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>
<?php
	// isset testa se uma variavel existe
	if (isset($_POST['enviar']) == true) {
		// codigo a ser executado se a variavel estiver definida

		// usando a funcao empty para saber se um campo foi preenchido
		if (empty($_POST["nome"]) == true) {
			echo ("Por favor preencha o campo <b>nome</b>");
		} else if (empty($_POST["sobrenome"])){
			// exibindo a mesagem de erro com javascript
			//echo("<script>alert('Preencha a data de nascimento');</script>");
			echo("Preencha a data de <b>nascimento</b>");
		} else if (empty($_POST["email"])) {
			echo("Preencha o <b>número telefônico</b>");
		} else if(empty($_POST["senha"])){
			echo("Preencha o <b>email</b>");
		} else {
			// não é mais preciso abrir a conexão com o BD, pois isso foi feito anteriormente e também já foi testado se a conexao foi bem sucedida 
			$nome = $_POST["nome"];
			$sobrenome = $_POST["sobrenome"];
			$email = $_POST["email"];
			$senha = $_POST["senha"];

			if ($_FILES['foto']['error'] != 4){
				echo("Tem foto");
				$uploaddir = 'fotos/';
				$ext = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
				$nome_arquivo = time() . "." . $ext;
				$uploadfile = $uploaddir . $nome_arquivo;

				if (move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile)) {
					echo($sql = "UPDATE usuarios SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', senha = '$senha', foto = '$nome_arquivo' WHERE id = $id_usuario");
				} 

			} else {
				echo "nao tem foto";
			}

			// para editar o registro, usa-se o UPDATE
			//$sql = "UPDATE usuarios SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', senha = $senha WHERE id = $id_usuario";

			// echo para debugar a consulta sql gerada
			// echo ($sql);

			// mandando executar a consulta sql
			// a funcao mysqli_query retorna true se a consulta foi executada com sucesso
			if (mysqli_query($conn, $sql)){
				echo ("
					<script>
						alert('Contato editado com sucesso');
						location.href = 'perfil/perfil.php';
					</script>
				");
			} else {
				// erro ao executar a consulta
				echo ("Erro: $sql <br>" . mysqli_error($conn) );
			}

			// encerrando a conexao
			mysqli_close($conn);

		}
	} 
	?>
