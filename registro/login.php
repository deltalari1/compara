<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/compara/imagens/favicon.png">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
	<script src="https://kit.fontawesome.com/73333f2213.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="/compara/estilo.css">
</head>
<body>
    <div class="container" style="max-width: 500px; margin-top: 5rem;">
        <div class="row">
            <img src="logo_vermelho.png" class="logo-vermelho">
        </div>
        <form method="POST" enctype="multipart/form-data" class="p-4 m-3 fundo-formulario">
            <div class="row">
                <h2 class="fw-bold mb-3">LOGIN</h2>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3 b-3">
                        <input class="form-control rounded-0" type="email" placeholder="Email" name="email" required>
                        <label for="floatingInput">E-mail</label>
                    </div>
                </div>
			</div>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input class="form-control rounded-0" type="password" name="senha" placeholder="Senha" required>
                        <label for="floatingPassword">Senha</label>
                    </div>
                </div>
			</div>
            <div class="text-end">
                <input class="btn botao-vermelho btn-danger fw-bold" type="submit" value="Entrar" name="entrar">
                <?php include_once "entrar.php";?>
            </div>
            <div>
                <span>Ainda n??o tem uma conta? </span><a href="cadastro.php" class="fw-bold link-danger">Registre-se</a>
            </div>
        </form>
    </div>
        
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>