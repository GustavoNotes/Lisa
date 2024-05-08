<?php

                
                    //"CRIAÇÃO DINÂMICA DE URLS AMIGAVEIS EM PHP PARA PAGINAS DE CONTEUDO NO BANCO DE DADOS"

function obterUrlAmigavelDoBancoDeDados() {
    $mysqli = new mysqli("localhost", "root", "", "conteudos");

    if ($mysqli->connect_error) {
        die("Falha na conexão com o banco de dados: " . $mysqli->connect_error);
    }

    $query = "SELECT conteudos FROM paginacoes ORDER BY conteudo ASC";

    $resultado = $mysqli->query($query);

    if ($resultado && $resultado->num_rows > 0) {
        $linha = $resultado->fetch_assoc();
        return $linha['conteudos'];
    } else {
        return 'pagina_nao_encontrada.php';
    }

    $mysqli->close();
}

// Substitua 'obterUrlAmigavelDoBancoDeDados()' pela sua função real
$urlAmigavel = obterUrlAmigavelDoBancoDeDados();

// Construir a URL completa


//$urlCompleta = "http://localhost/admin/exibir_pagina.php?url=ConsultoriaeMarketingsobre.php" . rawurlencode($urlAmigavel);
$urlCompleta = "http://localhost/admin/exibir_pagina.php?url=trands.php" . rawurlencode($urlAmigavel);

$urlCompleta = "http://localhost/admin/exibir_pagina.php?url=Comosedestacarnacarreiracomocomércioexteriors.php" . rawurlencode($urlAmigavel);
 
$urlCompleta = "http://localhost/admin/exibir_pagina.php?url=Comosedestacarnacarreiracomocomércioexteriors.php" . rawurlencode($urlAmigavel);

$urlCompleta = "http://localhost/admin/exibir_pagina.php?url=O-que-é-inteligência-artificial.php" . rawurlencode($urlAmigavel);

$urlCompleta = "http://localhost/admin/exibir_pagina.php?url=O-que-é-inteligência-artificial.php" . rawurlencode($urlAmigavel);

$urlCompleta = "http://localhost/admin/exibir_pagina.php?url=O-Poder-da-Programação:-Transformando-Ideias-em-Realidade.php" . rawurlencode($urlAmigavel);

$urlCompleta = "http://localhost/admin/exibir_pagina.php?url=Intelligência-arficial-como-nunca.php" . rawurlencode($urlAmigavel);

echo $urlCompleta;  // Esta linha é opcional, serve para verificar a URL gerada
?>
