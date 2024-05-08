<?php
require_once 'class/comentarios.php';
require_once 'classes/Usuarios.php';

$c = new Comentarios("projeto_comentario", "127.0.0.1", "root", "");
$usuarios = new Usuarios("projeto_comentario", "127.0.0.1", "root", "");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["texto"])) {
    if (!isset($_SESSION['id_usuario'])) {
        echo "Você precisa estar logado para comentar.";
    } else {
        $comentario = $_POST["texto"];
        $c->inserirComentario($_SESSION['id_usuario'], $comentario);
        header("Location: discussao.php");
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id_comentario"]) && isset($_POST["novo_texto"])) {
    $idComentario = $_POST["id_comentario"];
    $novoTexto = $_POST["novo_texto"];
    
    if ($c->editarComentario($idComentario, $novoTexto)) {
        echo "Comentário editado com sucesso.";
    } else {
        echo "Erro ao editar o comentário.";
    }
}

if (isset($_GET['id_exc'])) {
    $id_e = addslashes($_GET['id_exc']);
    if (isset($_SESSION['id_master']) || isset($_SESSION['id_usuario'])) {
        $c->excluirComentario($id_e, isset($_SESSION['id_master']) ? $_SESSION['id_master'] : $_SESSION['id_usuario']);
        echo "Comentário excluído com sucesso.";
    }
}

$coments = $c->buscarComentarios();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['novasImagem'])) {
    $diretorioDestino = "fotos/";

    $nomeArquivo = $_FILES['novasImagem']['name'];
    $caminhoCompleto = $diretorioDestino . $nomeArquivo;
    
    if (move_uploaded_file($_FILES['novasImagem']['tmp_name'], $caminhoCompleto)) {
        $usuarios->atualizarImagemPerfil($_SESSION['id_usuario'], $caminhoCompleto);
        echo "Imagem de perfil atualizada com sucesso.";
    } else {
        echo "Erro ao fazer o upload da imagem.";
    }
}

$idUsuario = $_SESSION['id_usuario'] ?? null;
if ($idUsuario != null) {
    $dadosUsuario = $usuarios->buscarDadosUser($idUsuario);
    $imagemPerfil = $dadosUsuario['imagem_capa'] ?? null;

    if ($imagemPerfil != null) {
        echo '<div class="novasDiv" onclick="exibirBotoes()" style="width: 50px; 
		height: 50px; float: right; margin-right: 70px;margin-top:-50px;    overflow: hidden; border-radius: 50%;">';
        echo '<img src="' . $imagemPerfil . '" alt="Imagem de Perfil" style="width: 100%; height: 100%;">';
        echo '</div>';
    } else {
        // Exibe uma imagem padrão caso o usuário não tenha imagem de perfil
        echo '<div class="novasDiv" onclick="exibirBotoes()" style="width:50px; height: 50px; float: right; margin-right: 70px; overflow: hidden; border-radius: 50%;">';
        echo '<img src="../Photos-Upload/OIP.jpeg"   alt="Imagem Padrão" style="width: 100%; height: 100%;">';
        echo '</div>';
    }
}
?>

<?php  
if (count($coments) > 0) {
    foreach ($coments as $v) { 
?>
    <div class="area-comentario" style="margin-left: 150px; background-color:; margin-bottom: 100px;">
        <!-- Aqui você pode adicionar o conteúdo dos comentários -->
    </div>
<?php 
    } 
} else {
    echo "Ainda não há comentários.";
}
?>
