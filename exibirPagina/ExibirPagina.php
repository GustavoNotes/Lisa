<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "conteudos";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if (isset($_GET['url'])) {
    $url_amigavel = $_GET['url'];

    // Utilize a função htmlspecialchars para evitar ataques XSS
    $url_amigavel = htmlspecialchars($url_amigavel, ENT_QUOTES, 'UTF-8');

    $sql = "SELECT titulo, conteudo FROM paginacoes WHERE url_amigavel = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $url_amigavel);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $titulo = $row['titulo'];
        $conteudo = $row['conteudo'];
        //$categoria = $row['categoria'];
		
//include_once 'conexaourlsbancodedados.php';

        echo "<html><head><title>$titulo</title>";
        // Inclua o link para o arquivo CSS no head
     // echo '<link rel="stylesheet" type="text/css" href="../cs/Estilos/AdminCss/solex.css">';
       // echo '<link rel="stylesheet" type="text/css" href="../admin/Estilos/AdminCss/solexcss.css">';
         //Adicione mais links para outros arquivos CSS conforme necessário
       echo ' <link rel="stylesheet" type="text/css" href="../css/Estilos/AdminCss/menu.css"/>';  
       //echo ' <link rel="stylesheet" type="text/css" href="../Css/menu.css"/>';  
      echo '<link rel="stylesheet" type="text/css" href="../css/Estilos/AdminCss/index.css"/>';
       
	   //echo '<link rel="stylesheet" type="text/css" href="../Css/comercio-exterior.css"/>';
       //echo '<link rel="stylesheet" type="text/css" href="../admin/Estilos/AdminCss/ciencia.css"/>';
	 //echo '<link rel="stylesheet" type="text/css" href="../admin/Estilos/AdminCss/padrao.css"/>';
	 //echo '<link rel="stylesheet" type="text/css" href="../Admin/AdminCss/gates.css"/>';
		//  echo '<link rel="stylesheet" type="text/css" href="../css/conteudos.css"/>';
	//	  echo '<link rel="stylesheet" type="text/css" href="css/conteudos.css"/>';
		
		 //  echo ' <link rel="stylesheet" type="text/css" href="../Admin/AdminCss/gates.css"/>';
			
			//  echo ' <link rel="stylesheet" type="text/css" href="../admin/Estilos/AdminCss/solex.css">';
  echo '  <link rel="stylesheet" type="text/css" href="../css/Estilos/AdminCss/comercio-exterior.css"/>';
			  
		
		
		
		
        
       echo '<div id="em-cima">';
   echo ' <div class="logo">';
    echo ' <div class="Trends">';
     echo ' <a href="http://localhost/index.php">';
      echo'   <span class="p Trends">Kidding</span>';
       echo'    </a>   </div>';
            
            
            echo'<div class="busca">';
             echo'<form action="pesquisa/pesquisa.php" method="POST">';
              echo'<input type="text" id="campo_busca" name="termo_busca" placeholder="Buscar..." />';
               echo'<button type="submit" class="buscar_produto">';
                echo'<i class="fa fa-search"></i>';
                  echo'</button>';
					
                   /*  echo'<div class="faixa">';
				 
                         echo'</div>';*/
			
                echo'</form>';
            echo'</div>';
        echo'</div>';
    echo'</div>';


        // Exiba o conteúdo da página
        //echo " <h1>$titulo</h1>";
        echo " <p>$conteudo</p>";
	
 
        //echo " <p>$categoria</p>";
            echo '<footer>  </footer>';
        echo "</body></html>";
    } else {
        // Caso a URL amigável não corresponda a nenhuma página
        echo "Página não encontrada.";
    }
 
    
 

    $stmt->close();
} else {
    // Caso a variável $_GET['url'] não esteja definida
    echo "URL amigável não fornecida.";
}

$conn->close();
?>
<?php

echo" <style>
 

  body {
    font-family: Arial, sans-serif;
    padding: 0;
  
    flex-direction: column;
    align-items: center;
    justify-content: center;
   
 background-color: #f4f4f4; 
  }

  main {
    max-width: 600px;
    text-align: center;
    margin-top:23%;
	margin-left:300px;
 
  }

  main h1 {
    color: black;
    font-size: 2em; /* Ajuste o tamanho da fonte conforme necessário */
	margin-left:-200px;
	 margin-top:-8%;
	   font-weight: bold;
	 
  }

 main p {
    line-height: 1.5;
    color: #666;
    width: 140%;
	margin-left:-100px;
	
  }

  iframe {
    width: 100%;
    height: 300px;
	margin-left:150px;
    margin: 60px 0;
	
  }
  
.py {
margin-top:-50px;
}
 
</style>";
 
 

?>

</body>
</html>