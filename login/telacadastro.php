<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>COMPARA!</title>
</head>
<body class="body">
    <div class="container">
        <div>
            <img src="logo.png" style="width: 250px; display:block; margin: 0px auto; margin-bottom: 20px;">
        </div>
        <div class="row justify-content-center align-items-center" >
            <div class="col-auto col-lg-5 col-md7">
                <div class="form-box registration-form p-md-5 p-3">
                    <div class="form-title">
                        <h2 class="fw-bold mb-3">CRIE SUA CONTA</h2>
                    </div>
                    <form method="POST" action="">
                        <div class="form-floating mb-3">
                            <input type="text" name="nome" class="form-control form-control-sm" placeholder="Nome" id="floatingInput" >
                            <label for="floatingInput">Nome</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="Text" name="sobrenome" class="form-control form-control-sm" placeholder="Sobrenome" id="floatingInput" required>
                            <label for="floatingInput">Sobrenome</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control form-control-sm" placeholder="Email" id="floatingInput" required>
                            <label for="floatingInput">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="senha" class="form-control form-control-sm" placeholder="Senha" id="floatingPassword" required>
                            <label for="floatingPassword">Senha</label>
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="primaryBg text-white" value="enviar">Cadastro</button>
                        </div>
                    </form>
                    <div class="mt-3">
                        <span>Já possui uma conta? Faça </span><a href="telalogin.php"><button class="p-0 border-0 bg-transparent primaryColor">Login</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.2.1/js/bootstrap.min.js"  crossorigin="anonymous"></script>
</body>
</html>
