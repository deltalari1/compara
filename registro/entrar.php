<?php
    include_once $_SERVER['DOCUMENT_ROOT']."/compara/conecta.php";

    if (isset($_POST['entrar'])){
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        if (empty($email) || empty($senha)){
            echo ("Preencha todos os dados corretamente antes de continuar.");
        } else {
            $sql = "SELECT id FROM usuarios WHERE email='$email' AND senha='$senha';";
            $resultado = mysqli_query($conn, $sql);

            if (mysqli_num_rows($resultado) == 1){
                if (mysqli_query($conn, $sql)){
                    $_SESSION["usuario"] = $email;

                    header("location: /compara/perfil/perfil.php?usuario=$sql");
                } else {
                    echo ("Erro: $sql <br>" . mysqli_error($conn));
                }
            } else {
                echo("Usuário ou senha incorretos.");
            }
        }
        mysqli_close($conn);
    }
?>