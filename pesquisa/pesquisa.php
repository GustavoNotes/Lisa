<?php
 

require_once '../classes/usuarios.php';

// Conecte-se ao banco de dados (substitua com suas credenciais)
$servername = "localhost";
$username = "root";
$password = "";
$database = "conteudos";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $termo_busca = $_POST["termo_busca"];

    // Verifica se o termo de busca tem pelo menos 3 caracteres
    if (strlen($termo_busca) < 1) {
        echo "A pesquisa deve conter pelo menos 2 caracteres.";
        exit;
    }

    // Modifique a consulta SQL para buscar páginas com base no termo de busca (considerando correspondências parciais e números)
    $sql = "SELECT titulo, url_amigavel, url_completa, url_imagem FROM paginacoes WHERE titulo LIKE ? OR url_completa LIKE ?";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Erro na preparação da consulta: " . $conn->error);
    } else {
        // Adiciona curingas apenas ao final do termo de busca para permitir correspondências parciais
        $termo_busca = "%$termo_busca%";

        // Vincula o parâmetro para a consulta SQL
        $stmt->bind_param("ss", $termo_busca, $termo_busca);

        // Executa a consulta
        $stmt->execute();
        $result = $stmt->get_result();

        // Inicialize a variável que conterá os resultados da pesquisa
        $output = '';

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $titulo = $row['titulo'];
                $url_amigavel = $row['url_amigavel'];
                $url_completa = $row['url_completa'];
                $url_imagem = $row['url_imagem'];

                // Exiba os resultados da pesquisa como links para as páginas
                $output .= "<div class='corpo-meio'>";
                $output .= "<a href='../exibirPagina/exibirPagina.php?url=$url_amigavel' class='custom-link'>
				<span class='custom-text'>$titulo</span></a><br>";
                $output .= "<p class='custom-linka'>$url_completa</p><br>";
                $output .= "<p>$url_imagem</p><br>";
            }
        } else {
            // Se nenhum resultado for encontrado, exiba a mensagem de erro e redirecione para a página principal em 2 segundos
            $output = "Nenhum resultado encontrado. Redirecionando para a página principal em 2 segundos...";
            echo $output; // Exibe a mensagem de erro
            header("refresh:2;url=../index.php"); // Redireciona para a página principal após 2 segundos
            exit; // Encerra o script
        }

        // Feche a conexão com o banco de dados
        $stmt->close();
        $conn->close();

        // Retorne os resultados da pesquisa como HTML
        echo $output;
    }
}
?>


 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Conteúdos Páginações</title>
    <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/css/menu.css"/>
	<link rel="stylesheet" type="text/css" href="AdminCss/corpos.css"/>
  
	 
	

  <style>

.corpo-meio{background-color:sivler;   heigth:20px;  width:99%; margin-top:350px; margin-bottom: 420px;
 }
        .custom-link {    
           position:absolute;
            line-height:30px;        
            color:#0073e6;
            font-size: 20px;
            margin-left: 190px;
            
            
            
                     
}

        .custom-text  {
            letter-spacing: 0px; /* Espaçamento entre as letras */
            margin:40px;
            
}

  
       .custom-linka {
    color: black;
    line-height:20px;
    width:800px;
    margin:10px;
    font-size:18px;
    text-align: left;
    margin-left: 230px;  margin-bottom: -350px;
	
	 }
	 
	 .em-cimas{
    background-color: black;
    border-radius: 0;
    background-image: no-repeat;
    position: fixed;
    top: 0px;
    left: 0;
    height:60px;
    right: 0;
    transform: translateZ(0);
    z-index: 100;}


.logo {
    width: 100%;
    background: rgb(44, 36, 36 );
    margin-top: 5%;
    height: 120px;
    border-bottom: 2px solid #000; /* Adiciona uma borda preta abaixo da barra cinza */
}
 
 
 

.buscas{ top:80px; padding:0px; border-radius: 40px; height: 43px;background-color: transparent; 
margin-left: 330px; position: absolute;}
 

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; /* Ajuste conforme necessário */
    margin-left: -120px;
    margin-top: -130px;
}

.lupa-img {
    width: 100px; /* Ajuste conforme necessário */
    height: 100px;
    margin-right: 20px;
    position: relative;
}

#campo_busca {
  margin-top: 30px;
  margin-left: -100px;
  border: 1px solid;
  border-radius: 0px;
  color: black;
  height: 53px;
  background: white;
  width: 800px;
  float: left;box-sizing: border-box;

}


/*efeito carregamento*/
#overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(255, 255, 255, 50);
  z-index: 1000;
  display: flex;
  justify-content: center;
  align-items: center;
}

.spinner {
  border: 4px solid rgba(0, 0, 0, 0.1);
  border-left-color: #333;
  border-radius: 50%;
  width: 50px;
  height: 50px;
  animation: spin 1s linear infinite;
}

@keyframes spin {
  to {
    transform: rotate(360deg);
  }
}

#content {
  display: none;
  /* Oculta o conteúdo inicialmente */
}
 
    </style>
</head>
<body>

    <div id="em-cima" style=" background-color: rgb(43, 42, 51);height: 100px; position:fixed;"> 	
        <div class="logo">
            
                <div class="busca" style="margin-top:20px;">
                <form action="../pesquisa/pesquisa.php" method="POST">
                    <input type="text" id="campo_busca" name="termo_busca" placeholder="Buscar..." />
                    <button type="submit" class="buscar_produto">
                        <i class="fa fa-search"></i>
                    </button>
				 
                </form>

                    <li><a href=" login.php" onclick="mostrarLogin()"
					style="color:white; float:right; margin-right:-150px;">Logar</a></li>
      
            </div>
		            
			
        </div>
		   <?php
						
						
				  require_once '../dispositorio.php';
 
                  ?>  
        </div>
			   
			   
			   
			   
			   
			   </div>

			                  <footer class="roda-pe-float" style="width:103%; position:absolute; left:-58px;  ">
        dasdas

        </footer >
 
             </body>
             </html>

    <script>
      $(document).ready(function () {
    // Quando o formulário de pesquisa for enviado
    $("#form-pesquisa").submit(function (e) {
        e.preventDefault(); // Impedir o envio padrão do formulário

        // Obter o termo de busca do campo de entrada
        var termoBusca = $("#termo_busca").val();

        // Limpar o conteúdo anterior
        $("#conteudo").php('');

        // Enviar uma solicitação AJAX para o arquivo PHP de processamento da pesquisa
        $.ajax({
            type: "POST",
            url: "", // Nome do arquivo PHP
            data: { termo_busca: termoBusca }, // Enviar o termo de busca para o PHP
            dataType: "php", // Espera uma resposta HTML
            success: function (data) {
                // Atualize o conteúdo da div #conteudo com os resultados da pesquisa
                $("#conteudo").html(data);
            }
        });
    });
});



</script>

  <script>
  //EFEITOS
  
// Para mostrar o conteúdo e ocultar o overlay
function showContent() {
  setTimeout(function() {
    document.getElementById("content").style.display = "block";
    document.getElementById("overlay").style.display = "none";
  }, 300); // Atraso de 300 milissegundos antes de mostrar o conteúdo
}

// Exemplo de uso:
// Suponha que você tenha uma função que realiza uma ação assíncrona, como carregar dados de um servidor
function fetchData() {
  // Simulação de uma requisição assíncrona
  setTimeout(function() {
    // Aqui você colocaria o código para carregar os dados
    // Depois que os dados forem carregados, mostre o conteúdo
    showContent();
  }, 5000); // Tempo de simulação de 5 segundos
}

// Chamada da função fetchData
fetchData();
  </script>