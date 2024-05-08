<?php
 
include_once 'class/user.php'; 
include_once 'classes/Usuarios.php'; // Corrigido o nome do arquivo e da classe


$us = new Usuarios("projeto_comentario", "localhost", "root", "");
// Verificar se o formulário foi submetido
if(isset($_POST['email'])){

    // Guardar os dados do formulário em variáveis
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    // Verificar se todos os campos foram preenchidos
    if (!empty($email) && !empty($senha)) {
        $us = new Usuarios("projeto_comentario", "localhost", "root", "");
        
        if($us->entrar($email, $senha)){
            header("Location: index.php"); // Corrigido o nome do arquivo
            exit();
        } else {
            echo "Email ou senha errado!";
        }
    } else {
        echo "Preencha todos os campos";
    }

}

?>
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulário de Login</title>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
    }
    form {
        max-width: 400px;
        margin: 0 auto;
        box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.4);
        background-color: #b2b2b2;
        padding: 30px;
        margin-top: 150px;
        height: 300px;
    }
    h2 {
        margin-bottom: 20px; text-align:center; margin-bottom: 30px;

    }
    label {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }
    label img {
        margin-right: 10px;
        width: 30px;
        height: 30px;
    }
    input[type="email"],
    input[type="password"],
    input[type="submit"] {
        width: calc(100% - 0px); /* Adicionado para acomodar a imagem */
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
        width: 88%;
        float: right;
    }
    input[type="submit"]:hover {
        background-color: #45a049;

    }

    .criar {display: block; text-align: left; clear: both; margin-bottom: 250px; }
</style>
</head>
<body>
<form action="" method="post">
    <h2>Acesse sua conta</h2>
    <label for="email">
        <img src="../fotos/icons/o-email.png" alt="Ícone de e-mail">
        <input type="email" id="email" name="email" autocomplete="email" required>
    </label>
    <label for="senha">
       <img src="../fotos/icons/senha.png" alt="Ícone de senha">
       <input type="password" id="senha" name="senha" autocomplete="current-password" required>
    </label>
    <input type="submit" value="Entrar">
    <a class="criar" href="cadastrar.php">Registre-se agora</a>
</form>


</body>
</html>