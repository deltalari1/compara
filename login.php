<!DOCTYPE html>
<html>
<head>
    <title>Login | Compara!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="estilo.css">
	<script src="https://kit.fontawesome.com/73333f2213.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container container-login">
        <div>
            <a href="pagina_inicial.html">
                <img src="logo_vermelho.png" class="logo-vermelho">
            </a>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-auto col-lg-5">
                <div class="form-box login-form p-md-5 p-3">
                    <div class="form-title">
                        <h2 class="fw-bold mb-3">LOGIN</h2>
                    </div>
                    <form method="POST" action="">
                        <div class="form-floating mb-3">
                            <input class="form-control form-control-sm rounded-0" type="email" placeholder="Email" id="floatingInput" required>
                            <label for="floatingInput">E-mail</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control form-control-sm rounded-0" type="password" placeholder="Senha" id="floatingPassword" required>
                            <label for="floatingPassword">Senha</label>
                        </div>
                        <div class="mt-3">
                            <input class="btn botao-vermelho btn-danger" type="submit" value="Entrar">
                        </div>
                    </form>
                    <div class="mt-3">
                        <span>Ainda não tem uma conta? </span><a href="cadastro.php" class="texto-negrito links link-danger">Registre-se</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>
