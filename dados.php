<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exemplo de Nav</title>
<link rel="stylesheet" href="styles.css">
</head>

<style type="text/css">
   body {
    margin: 0;
    padding: 0;
    font-family: arial;
}

nav {
    background-color: #8a2be2; /* Cor roxa clara */
    padding: 25px 100px; /* Espaçamento interno */
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    text-align: right; /* Alinha os itens à direita */
}

li {
    display: inline;
    margin-left: 20px; /* Espaçamento entre os itens */
}

li:first-child {
    margin-left: 0; /* Remove o espaçamento do primeiro item */
}

a {
    text-decoration: none;
    color: white; /* Cor do texto */
    font-size: 17px;
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

.tabela {
    margin: 20px auto; /* Centraliza a tabela */
    border-collapse: collapse;
    width: 80%;
    border: 2px solid #8a2be2; /* Adiciona uma borda à tabela */
}

.tabela tr {
    background-color: #f2f2f2;
}

.tabela tr#titulo {
    background-color: #8a2be2;
    color: white;
}

.tabela th,
.tabela td {
    padding: 10px;
    text-align: center;
    vertical-align: middle; /* Centraliza verticalmente o texto */
    border-bottom: 1px solid #8a2be2; /* Adiciona uma linha embaixo de cada célula */
}

.tabela th:not(:first-child),
.tabela td:not(:first-child) {
    border-left: 1px solid #8a2be2; /* Adiciona uma linha à esquerda de cada célula exceto a primeira coluna */
}

</style>
<body>

<nav>
    <ul>
        <li><a href="indeex.php">Início</a></li>
        <li><a href="discussao.php">Discussão</a></li>
        <li><a href="indeex.php">Entrar</a></li>
    </ul>
</nav>


<table class="tabela">
    <tr id="titulo">
        <td>id</td>
        <td>nome</td>
        <td>email</td>
        <td>comentários</td>
    </tr>
    <tr>
      

</body>
</html>
