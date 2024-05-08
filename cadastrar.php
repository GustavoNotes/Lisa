<?php
include_once 'class/user.php';
include_once 'class/usuarios.php';


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cadastro de Nova Conta</title>
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
        max-width: 300px;
        margin: 0 auto;
        box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.4);
        background-color: #b2b2b2;
        padding: 30px;
        margin-top: 50px;
    }
    h1 {
        text-align: center;
        margin-bottom: 20px;
    }
    label {
        display: block;
        margin-bottom: 10px;
    }
    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>

<form action="" method="post">
    <h1>Cadastre-se</h1>
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" maxlength="40">

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" maxlength="40">

    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required>

        <label for="confSenha"> Confirmar Senha:</label>
    <input type="password" id="confSenha" name="confSenha" required>

 <input type="submit" value="Cadastrar" name="cadastrar">

         <a class="criar" href="login.php">Acessar Conta</a>
</form>

