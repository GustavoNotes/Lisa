<?php
 
 //include_once '../admin/Estilos/pagina_Referencia1.php';
// Conecte-se ao banco de dados
$servername = "localhost";
$username = "root"; // Substitua pelo nome de usuário do seu banco de dados
$password = ""; // Substitua pela senha do seu banco de dados
$database = "conteudos";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $conteudo = $_POST["conteudo"];
    $url_amigavel = $_POST["url_amigavel"];
	$url_amigavel = $_POST["url_imagem"];
    $url_completa = $_POST["url_completa"];
    $categoria = $_POST["categoria"];
    $include_path = $_POST["include_path"]; // Novo campo para o caminho do arquivo PHP

    // Verifica se o título não está vazio
    if (empty($titulo)) {
        echo "Erro: O campo 'Título' é obrigatório.";
    } else {
        // Continua com o processamento se o título estiver presente
        $stmt = $conn->prepare("INSERT INTO paginacoes(titulo, conteudo, url_amigavel, url_completa, categoria, include_path) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $titulo, $conteudo, $url_amigavel, $url_completa, $categoria, $include_path);

        // Aqui você deve adicionar o código para inserir os dados no banco de dados
        if ($stmt->execute()) {
            echo "Página adicionada com sucesso.";
        } else {
            echo "Erro ao adicionar página: " . $stmt->error;
        }

        // Feche a conexão
        $stmt->close();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Conteúdos Páginações</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/css/menu.css" />
    <link rel="stylesheet" type="text/css" href="AdminCss/admincss.css" />

<style>

.container {
    width: 60%; /* Ajuste a largura conforme necessário */
    margin: 0 auto;
    padding: 20px;
}

.form {
    max-width: 400px; /* Ajuste a largura máxima do formulário conforme necessário */
    margin: 0 auto;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

select {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
</style>

</head>


<body>
    <form action=" ../administracao/ProcessarFormulario.php" method="post" enctype="multipart/form-data">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required>

        <label for="conteudo">Conteúdo:</label>
        <textarea id="conteudo" name="conteudo"></textarea>

        <label for="url_amigavel">URL Amigável:</label>
        <input type="text" id="url_amigavel" name="url_amigavel">

        <label for="url_completa">URL Completa:</label>
        <input type="text" id="url_completa" name="url_completa">

        <label for="include_path">Caminho do arquivo PHP para incluir:</label>
        <input type="text" id="include_path" name="include_path">
		
		
		 <label for="url_imagem">Imagem:</label>
		<input type="file" name="url_imagem" accept="image/*">
       
        <input type="submit" value="Enviar Imagem">

        <label for="categoria">Categoria:</label>
        <select id="categoria" name="categoria">
            <!-- Aqui você deve gerar as opções dinamicamente com as categorias do banco de dados -->
            <option value="Tecnologia">Tecnologia</option>
            <option value="Ciência">Ciência</option>
            <!-- Adicione todas as categorias existentes aqui -->
        </select>
		
		 
 
<!-- Formulário para escolher a div e editar seu conteúdo e estilo -->
<form id="formDiv" onsubmit="editarDiv(); return false;">
    <label for="nomeDiv">Escolha a Div:</label>
    <select id="nomeDiv" name="nomeDiv">
        <option value="muller">cok</option>
        <!-- Adicione outras opções conforme necessário -->
    </select>

    <label for="conteudoDiv">Conteúdo da Div:</label>
    <textarea id="conteudoDiv" name="conteudoDiv" placeholder="Digite o conteúdo da div"></textarea>

    <label for="corFundo">Cor de Fundo:</label>
    <input type="color" id="corFundo" name="corFundo" value="#ffffff">

    <label for="corTexto">Cor do Texto:</label>
    <input type="color" id="corTexto" name="corTexto" value="#000000">

    <input type="submit" value="Salvar Alterações">
</form>
 
</body>
</html>

<?php

   echo'$titulo';
   echo'$conteudo';
   echo'$url_amigavel';
   echo'$url_imagem';
   



?>