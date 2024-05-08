<?php
 


// Conecte-se ao banco de dados
$servername = "localhost";
$username = "root"; // Substitua pelo nome de usuário do seu banco de dados
$password = ""; // Substitua pela senha do seu banco de dados
$database = "conteudos";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
 


// Receba os dados do formulário  
$titulo = $_POST["titulo"];
$conteudo = $_POST["conteudo"];
$url_amigavel = $_POST["url_amigavel"];
$url_completa = $_POST["url_completa"];
$categoria = $_POST["categoria"];
 $include_path = $_POST["include_path"]; // Novo campo para o caminho do arquivo PHP

// Verificar se o arquivo foi enviado
if (isset($_FILES['url_imagem']) && $_FILES['url_imagem']['error'] == 0) {
    $imagem = $_FILES['url_imagem'];

    // Definir o local onde a imagem será salva
    $diretorio_imagens = 'C:/Users/Luis Gustavo/OneDrive/Área de Trabalho/LisaNotes/fotos/';
    $url_imagem = $diretorio_imagens . basename($imagem['name']);

    // Mover o arquivo enviado para o diretório de imagens
    if (move_uploaded_file($imagem['tmp_name'], $url_imagem)) {
        echo "A imagem foi enviada com sucesso.";
    } else {
        echo "Houve um erro ao enviar a imagem.";
    }
}

// Insira os dados no banco de dados
$sql = "INSERT INTO paginacoes (titulo, descricao, url_amigavel, url_completa, url_imagem, conteudo, categoria) VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssss", $titulo, $conteudo, $url_amigavel, $url_completa, $url_imagem, $conteudo, $categoria);

if ($stmt->execute()) {
    echo "Página adicionada com sucesso.";
	//header("refresh:1;url=../admin/conteudocadastramentoDePaginas.php"); // Redireciona para a página principal após 1 segundos
} else {
    echo "Erro ao adicionar página: " . $stmt->error;
}

// Feche a conexão
$stmt->close();
$conn->close();
?>


