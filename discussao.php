<?php
session_start();

require_once 'class/comentarios.php';
require_once 'classes/Usuarios.php';




//require_once '../sistemalogincomentario/discussao.php';

$c = new Comentarios("projeto_comentario", "127.0.0.1", "root", "");
$usuarios = new Usuarios("projeto_comentario", "127.0.0.1", "root", "");



// Criar a função para gerar a tag <img>
function gerarTagImagemPerfil($caminhoImagem, $alt = "Imagem de Perfil", $estilo = "") {
    return '<img src="' . $caminhoImagem . '" alt="' . $alt . '" style="' . $estilo . '">';
}



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


//************************************SETOR DA FOTO***************************************************************/

$coments = $c->buscarComentarios();
// Verificar se o formulário de edição foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['novasImagem'])) {
    $diretorioDestino = "fotos/"; // Diretório onde as imagens são armazenadas

    // Processar o upload do arquivo
    $nomeArquivo = $_FILES['novasImagem']['name'];
    $caminhoCompleto = $diretorioDestino . $nomeArquivo;
    
    if (move_uploaded_file($_FILES['novasImagem']['tmp_name'], $caminhoCompleto)) {
        // Atualizar o caminho da imagem de perfil no banco de dados
        $usuarios->atualizarImagemPerfil($_SESSION['id_usuario'], $caminhoCompleto);
        echo "Imagem de perfil atualizada com sucesso.";
    } else {
        echo "Erro ao fazer o upload da imagem.";
    }
}


// Exibir a imagem de perfil do usuário
$idUsuario = $_SESSION['id_usuario']  ?? null;
if ($idUsuario != null) {
    $dadosUsuario = $usuarios->buscarDadosUser($idUsuario);
    $imagemPerfil = $dadosUsuario['id_usuario'] ?? null;

    if ($imagemPerfil == null) {
        

  



    } else {
        echo "Imagem de perfil não encontrada.";
    }
} else {
    echo "Você precisa estar logado para visualizar a imagem de perfil.";
}

 $coments = $c->buscarComentarios();

//  Verificar se a variável $coments não está vazia antes de usar o loop foreach

 
if (!empty($dados)) {
    foreach ($dados as $comentario) {
        

         
    }
}
 
 
// Exibir a imagem de perfil do usuário
$idUsuario = $_SESSION['id_usuario'] ?? null;
if ($idUsuario != null) {
    $dadosUsuario = $usuarios->buscarDadosUser($idUsuario);
    $imagemPerfil = $dadosUsuario['imagem_capa'] ?? null;
    // Exibir a imagem de perfil fora do loop
    if ($imagemPerfil != null) {
      /*  echo '<div class="novasDiv" onclick="exibirBotoes()">';
        echo '<img src="' . $imagemPerfil . '" alt="Imagem de Perfil" 
		style="border-radius:150%; border:1px solid silver; margin-left:15px;
		width: 4%; height:6%; margin-top:2%; margin-right:150px; position:fixed; float:right; :">';
        echo '</div>';*/
    }
}
 



?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discussão</title>
 
</head>
<body>
 
 <div id="em-cima">
        <div class="logo">
            
            <div class="busca">
                <form action="../pesquisar/pesquisa.php" method="POST">
                    <input type="text" id="campo_busca" name="termo_busca" placeholder="Buscar..." />
                    <button type="submit" class="buscar_produto">
                        <i class="fa fa-search"></i>
                    </button>
                </form>

                      <li><a href="index.php">Início</a></li>
                           <li><a href="discussao.php">Discussão</a></li>

                <div class="faixa">

                  <?php
 echo '<div class="novasDiv" onclick="exibirBotoes()">';
    echo '<img src="' . $imagemPerfil . '" alt="Imagem de Perfil" style="border-radius:150%; border:1px solid silver; margin-left:15px; width: 4%; height:6%; margin-top:2%; margin-right:150px; position:fixed; float:right; :">';
    echo '</div>';
                  ?>
            </div>
            
    
  </div>
 

             </div>
               </div>
           

<div id="largura-pagina">
    <section id="conteudo1">
        <h2>Deixe seu comentário</h2>
        <form method="POST">
              
            <textarea name="texto" placeholder="Participe da discussão" maxlength="400"></textarea>
            <input type="submit" value="Publicar Comentário">
        </form>



        <div id="modalEditarComentario" class="modal">
            <div class="modal-content" >
                <span class="close">&times;</span>
                <h2>Editar Comentário</h2>
                <form id="formEditarComentario" method="POST">
                    <input type="hidden" id="editComentarioId" name="id_comentario">
                    <textarea id="editComentarioTexto" name="novo_texto" placeholder="Digite o novo texto"></textarea>
                    <input type="submit" value="Salvar">
                </form>
            </div>
        </div>


   
 <form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="file" name="novasImagem">
        <input type="hidden" name="acao" value="editarImagem">
        <button type="submit">Enviars Nova Imagem</button>
    </form>

 


<?php  
if (count($coments) > 0) {
    foreach ($coments as $v) { 

?>
 
    <div class="area-comentario" style="margin-left: 150px; background-color:; margin-bottom: 100px;">
      
<?

/*echo gerarTagImagemPerfil($comentario['imagem_capa'], "Imagem de Perfil", "border-radius: 50%; width: 50px; height: 50px;");*/
?>
 
     <div class="novasDiv" onclick="exibirBotoes()">
            <!-- Exibir a imagem de perfil do usuário -->
            <img src="../fotos/<?php echo $v['imagem_capa']; ?>" id="images-<?php echo $v['id']; ?>" alt="" style="border-radius:100%; background-image:url('../Photos-Upload/OIP.jpeg'); border:2 solid red; width:15%; height:8%;">
 
  
 
 
            <h3><?= $v['nome_pessoa']; ?></h3>   
            <h4><?= $v['dia'] . ' ' . $v['horario']; ?></h4>

            <?php if (isset($_SESSION['id_usuario'])) { ?>
                <p id="comentario-<?= $v['id'] ?>"><?php echo $v['comentario']; ?></p>

                <?php if ($_SESSION['id_usuario'] == $v['fk_id_usuario'] || isset($_SESSION['id_master'])) { ?>
                        
                    <a class="excluir" href="discussao.php?id_exc=<?= $v['id']?>">Excluir</a>
                    <a href="#" class="editar-comentario" data-id="<?= $v['id']?>" style="float: right;">Editar</a>
                <?php } ?>
                <?php if (isset($_SESSION['id_master'])) { ?>
                    <a href="discussao.php?id_exc=<?= $v['id']?>"  >Excluir</a>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
<?php 
    } 
} else {
    echo "Ainda não há comentários.";
}
?>
</div>
</div>



<!-- Script JavaScript -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    var modalEditar = document.getElementById("modalEditarComentario");
    var btnsEditarComentario = document.getElementsByClassName("editar-comentario");
    var spanClose = document.getElementsByClassName("close")[0];

    // Função para abrir o modal de edição
    function abrirModalEdicao(idComentario, textoComentario) {
        document.getElementById("editComentarioId").value = idComentario;
        document.getElementById("editComentarioTexto").value = textoComentario;
        modalEditar.style.display = "block";
    }

    // Adicionar evento de clique aos botões de editar
    for (var i = 0; i < btnsEditarComentario.length; i++) {
        btnsEditarComentario[i].addEventListener("click", function() {
            var idComentario = this.getAttribute("data-id");
            var textoComentario = document.getElementById("comentario-" + idComentario).innerText;
            abrirModalEdicao(idComentario, textoComentario);
        });
    }

    // Fechar o modal ao clicar no botão de fechar
    spanClose.addEventListener("click", function() {
        modalEditar.style.display = "none";
    });

    // Fechar o modal ao clicar em qualquer lugar fora dele
    window.addEventListener("click", function(event) {
        if (event.target == modalEditar) {
            modalEditar.style.display = "none";
        }
    });
});
</script>


<script type="text/javascript">
  
        // O código JavaScript aqui é usado apenas para mostrar a imagem depois do upload
        document.getElementById("imagemPerfil").src = "<?php echo $imagemPerfil; ?>";
    
</script>

<style>


  
   .custom-linka {
    color: white;
    line-height:20px;
    width:800px;
    margin:10px;
    font-size:18px;
    text-align: left;
    margin-left: 0px; 
     margin-bottom: -350px;

    
     }
     
     

.logo {
    width: 100%;
    background: rgb(44, 36, 36 );
    margin-top: -4%;
    height: 120px;
    border-bottom: 2px solid #000; /* Adiciona uma borda preta abaixo da barra cinza */
 position: fixed;

}
 
 
 

 .buscas{ top:80px; padding:0px; border-radius: 40px; height: 43px;background-color: transparent; 
margin-left:  0px; }
 

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; /* Ajuste conforme necessário */
 margin-left: -120px;
    margin-top: 0px;
 }

.lupa-img {
    width: 100px; /* Ajuste conforme necessário */
  height: 100px;
    margin-right: 20px;
    position: relative;
}

#campo_busca {
  margin-top:28px;
  margin-left:250px;
  border: 1px solid;
  border-radius: 0px;
  color: black;
  height: 53px;
  background: white;
  width: 800px;
  float: left;box-sizing: border-box;

}




    /* Estilos gerais */
  {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    body {
        font-family: Arial, sans-serif;
        /*background-color: rgba(0,0,0,.15);*/
         background-color: white;
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
        color: white;
    }
    li {
        display: inline;
        margin-left: 20px;color: white;
    }
    li:first-child {
        margin-left: 0;
    }
    a {
        text-decoration: none;
        color: blue;

    }
    #largura-pagina {
        width: 85%;
        margin: 50px auto;
        font-family: 'Microsoft YaHei Light';

    }

    /* Estilos da área de comentários */
   .area-comentario {
        box-sizing: border-box;
      border-bottom: 2px solid gray;*/
      clear: both;
        padding-right:60px;
        margin-left: 100px;
       
        height: auto;
         
         

    }

    .area-comentario img {
        width: 60px;
        float: left;
        border-radius: 60px;
    }

    .area-comentario h3 {
        float: left;
     
        color: rgb(0, 0, 139);
        font-size: 12pt;
        padding: 6px 10px 5px 10px;
        margin-left: 18px;
         

    }

    .area-comentario p {
        line-height: 25px;
         margin-left:100px;
          width: 700px;
          font-size: 18px !important;
          line-height: 22px;
color:black;
         
    }

    .area-comentario h4 {
        font-size: 10pt;
        color: rgba(0, 0, 6);
        line-height: 35px;
    }

    .area-comentario h4 a {
        color: black;
        padding: 15px;
    }

    form img {
        width: 50px;
        display: block;
        float: left;
    }

    textarea {
        height: 50px; 
        width: 85%;
        border-radius: 15px; 
        padding: 7px; 
        font-size: 14pt;
        margin: 20px;
        margin-left:250px;
        float: left;
        display: block;
        font-family: Arial, sans-serif;
    }

    input[type="submit"] {
        font-family: Arial Black;
        width: 220px;
        height: 52px;
        background:  ;
        color: rgba(123, 104, 235);
        border: 2px solid rgba(123, 104, 238);
        cursor: pointer;
        display: block;
        float: right;
        margin-right: -150px;
        margin-bottom: 50px;
        border-radius: 15px; 
    }

    input[type="submit"]:hover {
        background-color: rgba(123, 104, 235);
        color: white;
    }

    section#conteudo1 {
        width: 65%;
        box-sizing: border-box;
        float: left;
    }

    /* Estilos para o modal */
  .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 0 auto;
        overflow: auto;
        background-color: rgba(0,0,0,0.4);
    }

    .modal-content {
        background-color:  ;
        margin: 10% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 50%;
        height: 0 auto;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
 

    .editar-comentario{color:blue;margin:30px; float:left; left:-35%; position: relative ;}
    .excluir{color:blue;margin:30px; float:left; margin-inline: 20%;  position: relative;  }


</style>
</body>
</html>

 
 