<?php
    include_once $_SERVER['DOCUMENT_ROOT']."/compara/conecta.php";

    if (isset($_POST['criar']) == true){
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        if (empty($email) || empty($senha) || empty($nome) || empty($sobrenome)){
            echo("Preencha todos os dados corretamente.");
        } else {
            $conferirEmail = "SELECT * FROM usuarios WHERE email = '$email'";
            $emailConferido = mysqli_query($conn, $conferirEmail);

            if (mysqli_num_rows($emailConferido) >= 1) {
                echo("Este email já possui uma conta.");
            } else {
                $cadastrar = "INSERT INTO usuarios (nome, sobrenome, email, senha) VALUES ('$nome', '$sobrenome', '$email', '$senha')";

                if (mysqli_query($conn, $cadastrar)){
                    header("Location: /compara/registro/login.php");
                }
            }
        }

        mysqli_close($conn);
    }
?>