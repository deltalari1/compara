<?php
    include_once $_SERVER['DOCUMENT_ROOT']."/compara/conecta.php";

    if (isset($_POST['criar']) == true){
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $imagem = $_POST["/compara/imagens/avatar_padrao.png"];

        if (empty($email) || empty($senha) || empty($nome) || empty($sobrenome)){
            echo("Preencha todos os dados corretamente.");
        } else {
            $conferirEmail = "SELECT * FROM usuarios WHERE email = '$email'";
            $resultado = mysqli_query($conn, $conferirEmail);

            if (mysqli_num_rows($resultado) >= 1) {
                echo("Este email já possui uma conta.");
            } else {
                $sql = "INSERT INTO usuarios (nome, sobrenome, email, senha, imagem) VALUES ('$nome', '$sobrenome', '$email', '$senha', '$imagem')";

                $id_usuario = "SELECT id FROM usuarios";
            
                if (mysqli_query($conn, $id_usuario)){
                    $_SESSION["usuario"] = $id_usuario;
                    header("location: /compara/perfil/perfil.php" . "?usuario=" . $_SESSION["usuario"]); 
                } else {
                    echo ("Erro: $sql <br>" . mysqli_error($conn));
                }     
            }
            mysqli_close($conn);
        }
    };
?>