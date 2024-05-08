
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kidding</title>
    <link rel="shortcut icon" href="icons/xong.jpg">
    <link rel="stylesheet" type="text/css" href="../Estilos/AdminCss/solex.css"/>
    <link rel="stylesheet" type="text/css" href="../Estilos/AdminCss/menu.css"/>
    <link rel="stylesheet" type="text/css" href="../Estilos/AdminCss/solexcss.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=NomeDaFonte">
</head>
<body>
    <div id="em-cima">
        <div class="logo">
            <div class="Trends">
                <a href="http://localhost/index.php">
                    <span class="p Trends">Kidding</span>
                </a>
            </div>
            
            <div class="busca">
                <form action="../admin/pesquisa.php" method="POST">
                    <input type="text" id="campo_busca" name="termo_busca" placeholder="Buscar..." />
                    <button type="submit" class="buscar_produto">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <section class="cok">
        <div class="mul">
            <div class="ma__ctas" id="f1">
                <h2>Acelere o sucesso com planos e serviços adicionais</h2>
                <p>Acelere o retorno sobre o investimento com ofertas prescritivas e personalizadas.</p>
                

            </div>
            <button class="button open-modal" style="margin-top:100px; margin-left:100px;"  data-modal-id="myModal3">Visualizar</button>
            <!--<div class="list"></div>
        </div>-->
    </section>

    <section class="maio-tolk">
       
            <div class="meio-sem">
                <div class="ma__ctas" id="bay">
                    <h2>Informações Aduaneiras - Tudo o que você precisa saber</h2>
                    <div class="ma__ctas" id="bet-more">
                        
                        <p>Alfândega é um termo comum no transporte internacional que se refere aos direitos, taxas ou impostos cobrados sobre mercadorias transportadas de um país para outro.</p>
                       
                    </div>
                    
                </div>

            </div>
       
            
        </div>
    </section>

  


    <section class="run">
  <div class="flex-container">
    <div class="circle-container">
      <div class="circle">
        <img src="/fotos/commex.jpg" alt="Sua Imagem">
      </div>
      <h2>Porto</h2>
      <p>Texto de três linhas aqui. Isso é apenas um exemplo.</p>
      <button class="button open-modal" data-modal-id="myModal1">Visualizar</button>
    </div>

    <div class="circle-container">
      <div class="circle">
        <img src="/fotos/aviao.jpeg" alt="Sua Imagem">
      </div>
      <h2>Navio</h2>
      <p>Texto de três linhas aqui. Isso é apenas um exemplo.</p>
      <button class="button open-modal" data-modal-id="myModal2">Visualizar</button>
    </div>

    <div class="circle-container">
      <div class="circle">
        <img src="/fotos/economia.png" alt="Sua Imagem">
      </div>
      <h2>Aeroporto</h2>
      <p>Texto de três linhas aqui. Isso é apenas um exemplo.</p>
      <button class="button open-modal" data-modal-id="myModal3">Visualizar</button>
    </div>
  </div>
</section>

<!-- Modais -->
<div id="myModal1" class="modal" style="color:white;">
  <div class="modal-content">
    <span class="close" data-modal-id="myModal1">&times;</span>
    <p>Algum texto no Modal 1..</p>
    <div class="modal-body">
      <video id="meuVideo1">
        <source src="../Admin/Estilos/Y2meta.app-Working at SAP (It's a Funny Story)-(1080p).mp4" type="video/mp4">
        <source src="../Admin/Estilos/Y2meta.app-Working at SAP (It's a Funny Story)-(1080p).ogg" type="video/ogg">
        Seu navegador não suporta o elemento de vídeo.
      </video>
    </div>

    <video id="meuVideo1">
        <source src="../Admin/Estilos/Y2meta.app-Working at SAP (It's a Funny Story)-(1080p).mp4" type="video/mp4">
        <source src="../Admin/Estilos/Y2meta.app-Working at SAP (It's a Funny Story)-(1080p).ogg" type="video/ogg">
        Seu navegador não suporta o elemento de vídeo.
      </video>
  </div>

  <video id="meuVideo1">
        <source src="../Admin/Estilos/Y2meta.app-Working at SAP (It's a Funny Story)-(1080p).mp4" type="video/mp4">
        <source src="../Admin/Estilos/Y2meta.app-Working at SAP (It's a Funny Story)-(1080p).ogg" type="video/ogg">
        Seu navegador não suporta o elemento de vídeo.
      </video>
  </div>

  <video id="meuVideo1">
        <source src="../Admin/Estilos/Y2meta.app-Working at SAP (It's a Funny Story)-(1080p).mp4" type="video/mp4">
        <source src="../Admin/Estilos/Y2meta.app-Working at SAP (It's a Funny Story)-(1080p).ogg" type="video/ogg">
        Seu navegador não suporta o elemento de vídeo.
      </video>
  </div>
</div>

<div id="myModal2" class="modal">
  <div class="modal-content">
    <span class="close" data-modal-id="myModal2">&times;</span>
    <p>Algum texto no Modal 2..</p>
    <div class="modal-body">
      <video id="meuVideo2" width="480" height="270" controls>
        <source src="../Admin/Estilos/Y2meta.app-Working at SAP (It's a Funny Story)-(1080p).mp4" type="video/mp4">
        <source src="../Admin/Estilos/Y2meta.app-Working at SAP (It's a Funny Story)-(1080p).ogg" type="video/ogg">
        Seu navegador não suporta o elemento de vídeo.
      </video>
    </div>
  </div>
</div>

<div id="myModal3" class="modal">
  <div class="modal-content">
    <span class="close" data-modal-id="myModal3">&times;</span>
    <p>Algum texto no Modal 3..</p>
    <div class="modal-body">
      <video id="meuVideo3" width="480" height="270" controls>
        <source src="<iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2FVGraphs%2Fvideos%2F879812397051291%2F&show_text=false&width=476&t=0" width="476" height="476" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>" type="video/mp4">
        <source src="<iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2FVGraphs%2Fvideos%2F879812397051291%2F&show_text=false&width=476&t=0" width="476" height="476" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>" type="video/ogg">
        Seu navegador não suporta o elemento de vídeo.
      </video>
    </div>
  </div>
</div>

 

    <script>
        // Função para abrir os modais
        function openModal(modalId) {
            var modal = document.getElementById(modalId);
            if (modal) {
                modal.style.display = "block";
            }
        }

        // Função para fechar os modais
        function closeModal(modalId) {
            var modal = document.getElementById(modalId);
            if (modal) {
                modal.style.display = "none";
            }
        }

        // Adiciona eventos para abrir os modais
        var modalButtons = document.querySelectorAll(".open-modal");

        modalButtons.forEach(function (btn) {
            btn.addEventListener("click", function () {
                var modalId = btn.getAttribute("data-modal-id");
                openModal(modalId);
            });
        });

        // Adiciona eventos para fechar os modais
        var closeButtons = document.querySelectorAll(".close");

        closeButtons.forEach(function (btn) {
            btn.addEventListener("click", function () {
                var modalId = btn.getAttribute("data-modal-id");
                closeModal(modalId);
            });
        });
    </script>

    <script>
        var modal1 = document.getElementById('myModal1');
        var btn1 = document.getElementById("myBtn1");
        var span1 = document.getElementsByClassName("close")[0];

        btn1.onclick = function () {
            modal1.style.display = "block";
        }

        span1.onclick = function () {
            modal1.style.display = "none";
        }

        var modal2 = document.getElementById('myModal2');
        var btn2 = document.getElementById("myBtn2");
        var span2 = document.getElementsByClassName("close")[1];

        btn2.onclick = function () {
            modal2.style.display = "block";
        }

        span2.onclick = function () {
            modal2.style.display = "none";
        }
    </script>

    <!-- Outros modais semelhantes aqui... -->

    <section class="cok2">
        <div class="container-informacoes" id="pontos">
            <div class="item imga" id="m1">
                <p>Ours internships, working student and rotational programs offer students opportunities to
                    work on real projects that make a big impact on our business.</p>
                <button id="myBtn1" style="margin-top:200px; margin-left:-125px;" class="button">Assista ao
                    vídeo</button>
            </div>
            <div class="img"></div>
        </div>

        <div id="myModal1" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2>Alfândega</h2>
                </div>
                <div class="modal-body">
                    <div class="modal-footer">
                        <h3> </h3>
                        <img src="/fotos/interseas.jpg" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cok3">
        <div class="meio-sem">
            <div class="container-set" id="gin">
                <div class="item-imga" id="m2"></div>
                <div class="mi"></div>
                <div class="testo">
                    <p>Ours internships, working student and rotational programs offer students opportunities to
                        work on real projects that make a big impact on our business.</p>
                    <button id="myBtn2" class="button">Assista ao vídeo</button>
                </div>
            </div>
        </div>

        <div id="myModal2" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2>Alfândegas</h2>
                </div>
                <div class="modal-body">
                    <div class="modal-footer">
                        <h3>Modal Footer</h3>
                        <div class="modal-body">
                            <video width="520" height="440" controls>
                                <source
                                    src="../Admin/Estilos/Y2meta.app-Working at SAP (It's a Funny Story)-(1080p).mp4"
                                    type="video/mp4">
                                <source
                                    src="../Admin/Estilos/Y2meta.app-Working at SAP (It's a Funny Story)-(1080p).ogg"
                                    type="video/ogg">
                                Seu navegador não suporta o elemento de vídeo.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="maio-tolks">
        <div class="meio-sem">
            <div class="ma__ctass" id="bay">
                <h2>Informaçõess Aduaneiras - Tudo o que você precisa saber</h2>
                <div class="ma__ctas" id="bet-more">
                    <p>Alfândega é um termo comum no transporte internacional que se refere aos direitos, taxas
                        ou impostos cobrados sobre mercadorias transportadas de um país para outro.</p>
                </div>
            </div>
        </div>
    </section>
 <?php
 	require_once 'C:/Users/Luis Gustavo/OneDrive/Documentos/SITECOMMEX/sistemalogincomentario/discussao.php';
 	require_once 'C:/Users/Luis Gustavo/OneDrive/Documentos/SITECOMMEX/sistemalogincomentario/index.php';
 
 
 ?>
    <script>
        // Função para abrir os modais
        function openModal(modalId) {
            var modal = document.getElementById(modalId);
            if (modal) {
                modal.style.display = "block";
            }
        }

        // Função para fechar os modais
        function closeModal(modalId) {
            var modal = document.getElementById(modalId);
            if (modal) {
                modal.style.display = "none";
            }
        }

        // Adiciona eventos para abrir os modais
        var modalButtons = document.querySelectorAll(".open-modal");

        modalButtons.forEach(function (btn) {
            btn.addEventListener("click", function () {
                var modalId = btn.getAttribute("data-modal-id");
                openModal(modalId);
            });
        });

        // Adiciona eventos para fechar os modais
        var closeButtons = document.querySelectorAll(".close");

        closeButtons.forEach(function (btn) {
            btn.addEventListener("click", function () {
                var modalId = btn.getAttribute("data-modal-id");
                closeModal(modalId);
            });
        });
    </script>

    <script>
        var modal1 = document.getElementById('myModal1');
        var btn1 = document.getElementById("myBtn1");
        var span1 = document.getElementsByClassName("close")[0];

        btn1.onclick = function () {
            modal1.style.display = "block";
        }

        span1.onclick = function () {
            modal1.style.display = "none";
        }

        var modal2 = document.getElementById('myModal2');
        var btn2 = document.getElementById("myBtn2");
        var span2 = document.getElementsByClassName("close")[1];

        btn2.onclick = function () {
            modal2.style.display = "block";
        }

        span2.onclick = function () {
            modal2.style.display = "none";
        }
    </script>
	
	
 
   <!-- <iframe src="../sistemalogincomentario/discussao.php" width="500" height="500" frameborder="0" 
	style="margin-top: -100px; margin-left: 50px;"></iframe>-->
 

<footer> 
 
        </footer>
 

</body>
</html>