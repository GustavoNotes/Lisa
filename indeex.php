<?php
// Iniciar a sessão para acessar as variáveis de sessão
session_start();
 



// Verificar se o usuário não está autenticado
if (!isset($_SESSION['id_usuario'])) {
    // Redirecionar para a página de login
    header("Location: login.php");
    exit(); // Certifique-se de sair após redirecionar
}

// Se o usuário estiver autenticado, continuar com o restante do código
require_once 'class/usuarios.php';
 

$us = new Usuarios("projeto_comentario", "localhost", "root", "");

if(isset($_SESSION['id_usuario'])) {
    $informacoes = $us->buscarDadosUser($_SESSION['id_usuario']);
} elseif(isset($_SESSION['id_master'])) {
    $informacoes = $us->buscarDadosUser($_SESSION['id_master']);

}else(isset($_SESSION['']))
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
        background-color: rgba(0,0,0,.15);
    }
    nav {
        background-color: #8a2be2;
        padding: 10px 20px;

    }
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        text-align: right;

    }
    li {
        display: inline;
        margin-left: 20px;
    }
    li:first-child {
        margin-left: 0;
    }
    a {
        text-decoration: none;
        color: white;
    }
    div#largura-pagina{
        width: 85%;
        background-color: ;
        margin: 20px auto; 
        font-family: 'Microsoft YaHei Light';
    }
</style>
</head>
<body>

 
<nav>
    <ul>
        <?php if(isset($informacoes) && $informacoes['id'] == 1) { ?> 
            <li><a href="dados.php">Dados</a></li> 
        <?php } ?>
        <li><a href="discussao.php">Discussão</a></li>
        <?php if(isset($informacoes)) { ?> 
            <li><a href="sair.php">Sair</a></li>
        <?php } else { ?>
            <li><a href="login.php">Entrar</a></li>

            
        <?php } ?>
    </ul>
</nav>
 
<div class="tars">
                </div>
                <div class="novasDiv" onclick="exibirBotoes()">
                    <img id="imagemPerfil" src="<?php echo $imagemPerfil; ?>" alt="Perfil" style="width: 100%;   display: block;">
                </div>

<?php
if (isset($informacoes)) {
    echo "<h2>Olá " . $informacoes['nome'] . ", Seja bem vindo(a)</h2>";
   
}
?>
<?

require_once 'discussao.php';

?>

  
       


</body>
</html>
