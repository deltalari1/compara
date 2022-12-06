<?php
    session_start();
    include_once $_SERVER['DOCUMENT_ROOT']."/compara/conecta.php";

    if (isset($_POST['entrar'])){
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        if (empty($email) || empty($senha)){
            echo ("Preencha todos os dados corretamente antes de continuar.");
        } else {
            $conferirUsuario = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha';";
            $usuarioExiste = mysqli_query($conn, $conferirUsuario);

            if (mysqli_num_rows($usuarioExiste) == 1){
                while ($usuario = mysqli_fetch_array($usuarioExiste)){
                    $id = $usuario['id'];
                }
                
                $_SESSION["entrar"] = $id;
                
                header("Location: /compara/perfil/perfil.php");
            } else {
                echo("Usuário ou senha incorretos.");
            }
        mysqli_close($conn);
        }
    }
?>