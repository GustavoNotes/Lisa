<!DOCTYPE html>

<?php
session_start();
 
require_once('urls/urlsBancoDeDados.php');
//require_once('Entrada.php');
require_once('dispositorio.php');
 
?>


<html lang="pt-br">
<head>
 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kidding</title>
    <link rel="shortcut icon" href="icons/xong.jpg">
    <link rel="stylesheet" type="text/css" href="../css/menu.css"/>
    <link rel="stylesheet" type="text/css" href="css/slides.css"/>
    <link rel="stylesheet" type="text/css" href="../css/index.css"/>
    <link rel="stylesheet" type="text/css" href="../css/menu-box.css"/>
       <!--<link rel="stylesheet" type="text/css" href="css/quadros.css"/>-->
       <link rel="stylesheet" type="text/css" href="css/carreira.css"/>
       <link rel="stylesheet" type="text/css" href="css/demosntracaokidding.css"/>
       <link rel="stylesheet" type="text/css" href="/css/cardsBing.css"/>
       
       <link rel="stylesheet" type="text/css" href="css/carregamento.css"/>
	   
	     <link rel="stylesheet" type="text/css" href="css/carregamento.css"/>

       <link rel="stylesheet" type="text/css" href="../css/dok.css"/>
       <link rel="stylesheet" type="text/css" href="css/comercio-exterior.css"/>


       <link rel="stylesheet" type="text/css" href="css/carregamento.css"/>
       <link rel="stylesheet" type="text/css" href="css/combobox.css"/>
 
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=NomeDaFonte">
    <style>
  
     .hidden {
            display:none;
        }
   <style>
        /* Adicione estilos conforme necessário */
     
         

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: white;
            text-decoration: none;
            cursor: pointer;
        }
   
  
  .w3-modal {
  display: block; /* none o certo Esconde o modal por padrão */
  position: fixed; /* Fica fixo na tela */
  z-index: 1; /* Fica acima de outros elementos */
  border-color:rgba(1,0,0,0.4);
  left: 0;
  top: 0;
  margin-left:300px;
  margin-top:100px;
  width: 45%; /* Ocupa toda a largura */
  height: 800px; /* Ocupa toda a altura */
  overflow: auto; /* Habilita o scroll se necessário */
  background-color:  rgba(1,0,0,0.4); /* Cor de fundo preta */
  background-color:transparent; /* Cor de fundo preta com opacidade */
  
 
}
  
  
    </style>
</head>
<body>

   <body >

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
					
					    <li><a href=" login.php" onclick="mostrarLogin()"
					style="color:white; float:right; margin-right:-100px;">Sair</a></li>
				 
            </div>
		            
			
        </div>    
        </div>
 	                  
 
   <!-- <div id="background " style="margin-top:0%;"></div>
 
        <?php if(isset($informacoes) && $informacoes['id'] == 1) { ?> 
            <li><a href="dados.php">Dados</a></li> 
        <?php } ?>
        <li><a href="discussao.php">Discussão</a></li>
        <?php if(isset($informacoes)) { ?> 
            <li><a href="index.php">Sair</a></li>
        <?php } else { ?>
            <li><a href="index.php">Entrar</a></li>-->

           <?php require_once'sair.php';?>
        <?php } ?>
 

 

<?php
if (isset($informacoes)) {
    echo "<h2>Olá " . $informacoes['nome'] . ", Seja bem vindo(a)</h2>";
   
}
?>
<?

 
 
?>
</div>

    </div>
 
 

 
 
 
 
    

 <section class="incial1">
 
   <div class="tar" style="width:700px;   background-color: rgba(0, 0, 0, 0.0); margin:85px;height:480px; position:absolute; left:450px;"></div>
 <div class="stars">    <img src="../fotos/lg.jpg" alt="Perfil">
</div>
 <div class="LegoContainer__content--IlXI7" style="padding: 100px 90px 80px; display: flex;
 flex-wrap: wrap; gap: 0px; align-items: center; justify-content: start;  min-height: 686px;">
 <div style="width: 50%;position:relative; min-width: auto; min-height: auto;
 box-sizing: border-box; order: 0; height:px;" 
 class="" data-component-name="LegoItem">
 <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
 <div class="LegoContainer__componentGridColumn--JEhet m-b-0 null headlineDoubleExtraLarge is-inside-lego-item
 paragraphExtraLarge textStandard section dx-729d64003dae3659a01532141e4042f1188a761e
 regularButtonLightBlue aem-GridColumn aem-GridColumn--default--12" 
 data-component-name="TextStandard">
 <div class="Grid__container--Q2JJf TextStandard__textStandardWrapper--Yzjla TextStandard__disableWrapperPaddings--atwfD">
 <div class="Grid__no-gutters--XwJmn Grid__row--CeQm6 ">
 <div class="Grid__col-12--SndJB Grid__col-sm-12--wscKP Grid__col-md-12--S2w0R Grid__col-lg-12--b8hpN Grid__col-xl-12--sseJz ">
 <div><h1 class="Headline__xxl--FxlBI TextStandard__headline--vRrut">
 <div style="text-align: left;">
 <span class="HeadlineContent__headlineContent--WaIf8"
 style="color:white; float:right; font-size:45px; font:bold;
 margin-left:-0px; float:left; margin-top:-68%; height:200px; width:600px;">
 Educação 4.0 Transformação Corporativa nas escolas e empresas  
	<p style="color:white; font-size:20px; 
	font-weight: normal; /* Define o peso da fonte como normal (não negrito) */">
	compartilhando as últimas tendências, desafios e oportunidades no vasto universo da tecnologia. </p>
 </span>

 </div></h1></div>
 </div></h1></div>
 </div></h1></div>
 </div></h1></div>
 </div> 
<!--<div class="fontBook TextStandard__paragraph--Tbblv" style="background-color:red;">
 <p > "LiisaNotes: Novidades tecnológicas constantes, explorando o presente e antecipando o futuro. Descubra insights em cada página, conectando-se a uma jornada de descobertas na evolução tecnológica.</p>
</div><div class="TextStandard__buttons--ypWso">
<div class="TextStandard__buttonWrapper--Mlufz">
<a href="/brazil/products/erp/grow.html?url_id=banner-br-homepage-row1-grow-pers-2023" target="_self" class="TextStandard__button--SoC47 fontRegular Button__primary--alIWX fontRegular" tabindex="0" title="">Conheça-nos</a>
</div></div></div></div></div></div></div></div></div></div>-->
 
</div>
    </section>

    

     <section class="minhaSecao2">
   <div class="ma__ctas" id="f3" style="margin-top:-3%; left:45px; position:absolute; ">
    <h3>Tecnologia</h3>
	<?php
echo '<hr style="border-color: #000; border-width: 2px; margin-top: 0px;">';

	?>
</div>
      <div class="card-container-croly" >
        <div class="card-onsy" id="gy1"   >
            <img src="../Photos-Upload/chat.jpeg" alt="Imagem dos Card">
     <h3><a href="<?php echo $urlCompleta='http://localhost/exibirPagina/exibirPagina.php?url=inteligecia-artificial-como-nunca.php'; ?>" style="color:black;">Intelligência arficial como nunca</a></h3>
            <div class="date"></div>
            <p>simulando um outro ambiente que permite a imersão dos estudantes.</p>
        </div>
 
        <div class="card-onsy" id="gy2" id="mol">
            <img src="/fotos/site-de-ia-ajudando-na-producao-de-software_1268-21620.avif" alt="Imagem do Card">
     
      <h3><a href="<?php echo $urlCompleta='http://localhost/exibirPagina/exibirPagina.php?url=O-Poder-da-Programação:-Transformando-Ideias-em-Realidade.php'; ?>" style="color:black;">Códigos e realidade.</a></h3>
            <div class="date"></div>
            <p>O Poder da Programação: Transformando Ideias em Realidade</p>
        </div>

        <div class="card-onsy" id="gy3" id="mol" >
            <img src="/Photos-Upload/OIG2.jpeg" alt="Imagem do Card">
<h3><a href="<?php echo $urlCompleta='http://localhost/exibirPagina/exibirPagina.php?url=realidaeVirtualNasEscolas.php'; ?>" style="color:black;">Realidade virtual nas escolas</a></h3>
            <div class="date"></div>
            <p>And upend the software industry.</p>
        </div>
    </div>
 
    </section>
	
	    <section class="minhaSecao3">
    <div class="ma__ctas" id="f3" style="margin-top:2%; left:48px;   position:absolute; ">
    <h3>Coméx & tecnologia</h3>
	<?php
echo '<hr style="border-color: #000; border-width: 2px; margin-top: 0px;">';

	?>
</div>
		
		
		<!-- Conteúdo da div meio-quadrado -->
     <!-- PRIMEIRA LINHA -->
      <div class="card-container-croly" id="mad" id="mad2" style="top:60px;">
		
		  <div class="ma__ctas" id="f3" style="margin-top:-3%; left:100px; position:absolute; ">
 
</div>

        <div class="card-onsy" id="gyf2">
            <img src="/fotos/maritmo.png" alt="Imagem do Card">
 <h3><a href="<?php echo $urlCompleta='http://localhost/exibirPagina/exibirPagina.php?url=realidaeVirtualNasEscolas.php'; ?>"  >Digitalizando transporte marítimo</a></h3>
            <div class="date"></div>
            <p>The world has learned a lot about handling problems caused by breakthrough innovations.</p>
        </div>

        <div class="card-onsy" id="gyf3"  >
            <img src="/fotos/meta.jpg" alt="Imagem do Card">
<h3><a href="<?php echo $urlCompleta='http://localhost/exibirPagina/exibirPagina.php?url=realidaeVirtualNasEscolas.php'; ?>">Metaverso no mundo coporativo</a></h3>
            <div class="date"></div>
            <p>And upend the software industry.</p>
        </div>
		  <div class="card-onsy" id="gys2"   >
            <img src="../photos-Upload/jog.jpg" alt="Imagem dos Card">
<h3><a href="<?php echo $urlCompleta='http://localhost/exibirPagina/exibirPagina.php?url=realidaeVirtualNasEscolas.php'; ?>" style="color:black;">Os 5 sistemas operacionais para quem trabalha como comex</a></h3>
            <div class="date" ></div>
            <p style="margin-left:-20px;">Artificial intelligence is as revolutionary as mobile phones and the Internet.</p>
        </div>
		</div>
 
       
    </section>
	
	
	<section class="minhaSecao2">
   <div class="ma__ctas" id="f3" style="margin-top:-3%; left:45px; position:absolute; ">
    <h3>Tecnologia</h3>
	<?php
echo '<hr style="border-color: #000; border-width: 2px; margin-top: 0px;">';

	?>
</div>
      <div class="card-container-croly" >
        <div class="card-onsy" id="gy1"   >
               <img src="../fotos/th3.jpeg"alt="Imagem dos Card">
     <h3><a href="<?php echo $urlCompleta='http://localhost/admin/exibir_pagina.php?url=inteligecia-artificial-como-nunca.php'; ?>" style="color:black;">Intelligência arficial como nunca</a></h3>
            <div class="date"></div>
            <p>simulando um outro ambiente que permite a imersão dos estudantes.</p>
        </div>
 
        <div class="card-onsy" id="gy2" id="mol">
            <img src="/fotos/site-de-ia-ajudando-na-producao-de-software_1268-21620.avif" alt="Imagem do Card">
     
      <h3><a href="<?php echo $urlCompleta='http://localhost/exibirPagina/exibirPagina.php?url=O-Poder-da-Programação:-Transformando-Ideias-em-Realidade.php'; ?>" style="color:black;">Códigos e realidade.</a></h3>
            <div class="date"></div>
            <p>O Poder da Programação: Transformando Ideias em Realidade</p>
        </div>

        <div class="card-onsy" id="gy3" id="mol" >
            <img src="/fotos/retrato-de-criancas-usando-fones-de-ouvido-de-rv-e-se-divertindo_74855-16426.avif" alt="Imagem do Card">
<h3><a href="<?php echo $urlCompleta='http://localhost/exibirPagina/exibirPagina.php?url=realidaeVirtualNasEscolas.php'; ?>" style="color:black;">Realidade virtual nas escolas</a></h3>
            <div class="date"></div>
            <p>And upend the software industry.</p>
        </div>
    </div>
 
    </section>
		
<section class="minhaSecao4" style="margin-bottom:150px;">
    <div class="card-container-croly" id="mad" style="top:90px;">
        <div class="ma__ctas" id="f3" style="margin-top:0%; left:50px; position:absolute;">
            <h3 style="color:white;">Eventos tecnologia</h3>
            <?php
                echo '<hr style="border-color: #000; border-width: 2px; margin-top: 0px;">';
            ?>
        </div>
        <div class="janela1" id="mexs1" id="tis" style="margin-top:0px;">
            <!-- Cards sobre comércio exterior -->
            <div class="cardo">
                <img src="/fotos/th.jpg" height="145" alt="Imagem dos Card">
                <h3><a href="#" onclick="openModal('myModal1')" style="color:white; ">VTEX Day</a></h3>
<button onclick="abrirModal('meuModal')">VTEX Day</button>
                <div class="date"></div>
            </div>
            <div class="cardo">
                <img src="/fotos/campus-party-evento-620x310.jpg" height="145" alt="Imagem do Card">
                <h3>Campus Party Brasil</h3>
                <div class="date">
                  
                </div>
            </div>
			 <div class="cardo">
                <img src="/fotos/gramado.jpeg" height="145" alt="Imagem do Card">
                <h3>Gramado Summit</h3>
                <div class="date">
                   
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Conteúdo do modal -->
<section id="meuModal" class="w3-modal">
  <div class="w3-modal-content">
    <header class="w3-container w3-teal" style="background-color: white;">
      <span onclick="fecharModal('meuModal')" class="w3-button w3-display-topright">&times;</span>
      <div class="logo" style="position:relative; left:-400px;">
        <!--<div id="menu-s" style="margin-left:400px; position: fixed;">
          <ul>
   
            <li><a href="#" onclick="loadContent(event, 'conteudo-sobre')">Maior Encontro de Inovação</a></li>
            <li><a href="#" onclick="loadContent(event, 'conteudo-tecnologia')">Desvendando</a></li>
            <li><a href="#" onclick="loadContent(event, 'conteudo-datas-festivas')">Datas Festivas</a></li>
          </ul>
        </div>
      </div>-->
    </header>
    <div class="w3-container" id="modal-content" style="background-color:white;">
      <!-- Conteúdo da Home -->
      <section id="conteudo-home"style="background-color:white;">
    
        
 
      </section>

      <!-- Conteúdo Sobre -->
      <section id="conteudo-sobre" style="background-color:white;">
          
		 
   <p>O mundo da tecnologia está prestes a receber um dos eventos mais aguardados do ano: o VTEX Day. 
		Este grandioso encontro, marcado por inovação, networking e insights inspiradores, promete ser um marco para 
		profissionais e entusiastas do universo tecnológico. Prepare-se para uma imersão no futuro da tecnologia!
		</p>
		
	 
     <img src="../fotos/mulher.jpg"/>

      <!-- Conteúdo Tecnologia -->
      
       
        <p>
 ELe está começando aqui. 
 
 O VTEX Day, com sua proposta ousada e inspiradora, vai além das convenções tradicionais. Este evento extraordinário serve como um ponto de encontro para mentes brilhantes, visionários e empresas líderes do setor, unindo-se para explorar, discutir e compartilhar insights sobre as últimas tendências, desafios e oportunidades no vasto universo da tecnologia.

Ao longo do VTEX Day, participantes têm a chance única de imergir em um ambiente dinâmico, repleto de palestras e painéis conduzidos por especialistas renomados. O evento oferece uma visão aprofundada das inovações disruptivas que estão moldando o futuro, ao mesmo tempo em que proporciona uma plataforma para networking e colaboração entre profissionais, empreendedores e entusiastas da tecnologia.

Seja explorando as fronteiras do e-commerce, debatendo estratégias de negócios inovadoras ou mergulhando nas últimas tecnologias emergentes, o VTEX Day se destaca como um marco significativo no cenário de eventos tecnológicos. Cada edição é uma celebração da criatividade, da excelência técnica e das oportunidades transformadoras que a tecnologia oferece.

Prepare-se para desvendar o VTEX Day e embarcar em uma jornada única, onde o presente e o futuro se encontram para criar um panorama inspirador de inovação e progresso tecnológico.		
		
		</p>
      </section>

      <!-- Conteúdo Datas Festivas -->
      <section id="conteudo-datas-festivas" style="background-color:white;">
     
        <p>
		
		
		Celebrando Datas Festivas: Uma Jornada de Alegria e Significado

As datas festivas são momentos mágicos ao longo do ano, marcados por celebrações que unem pessoas, culturas e tradições. Estes eventos especiais transcendem as barreiras do cotidiano, enchendo nossos corações de alegria, reflexão e compartilhamento.

No coração de cada festividade, encontramos um significado único e uma oportunidade para criar memórias duradouras. Seja celebrando feriados religiosos, eventos culturais ou dias nacionais, as datas festivas têm o poder de fortalecer laços familiares, criar senso de comunidade e proporcionar momentos de descontração.

Cada festividade carrega consigo tradições distintas, desde decorações vibrantes até pratos culinários característicos. É nesses momentos que as pessoas se reúnem para expressar gratidão, amor e solidariedade, formando laços que transcendem as diferenças e promovem a união.

Além da alegria imediata, as datas festivas também oferecem oportunidades de reflexão sobre valores, cultura e história. Esses momentos especiais servem como pausas no ritmo acelerado da vida, permitindo que todos se conectem com o que é verdadeiramente importante.

Portanto, celebrar datas festivas é mais do que marcar um dia no calendário; é uma jornada emocional que nos lembra da riqueza da vida, da diversidade do mundo e da importância de compartilhar esses momentos com aqueles que amamos. Vamos celebrar juntos cada data festiva, nutrindo a espiritualidade, o respeito e a alegria que essas ocasiões nos proporcionam.</p>
      </section>
    </div>
  </div>
</section>

<script>
    function abrirModal(modalId) {
        var modal = document.getElementById(modalId);
        modal.style.display = "hidden";
    }

    function fecharModal(modalId) {
        var modal = document.getElementById(modalId);
        modal.style.display = "none";
    }

    function loadContent(e, contentId) {
        e.preventDefault();

        // Esconde todas as seções de conteúdo
        var sections = document.querySelectorAll('#modal-content section');
        sections.forEach(section => {
            section.style.display = 'none';
        });

        // Mostra a seção de conteúdo correspondente
        var section = document.getElementById(contentId);
        section.style.display = 'block';
    }
</script>

<!-- Função para fechar o modal quando o usuário clicar fora dele -->
<script>
    window.addEventListener("click", function(event) {
        var modal = document.getElementById('meuModal');
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });
</script>

<!--<script>
    function abrirModal(modalId) {
        var modal = document.getElementById(modalId);
        modal.style.display = "block";
    }

    function fecharModal(modalId) {
        var modal = document.getElementById(modalId);
        modal.style.display = "none";
    }

    function scrollToContent(contentId) {
        var element = document.getElementById(contentId);
        element.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    // Este script AJAX carregará o conteúdo da página vinculada ao menu
    document.querySelectorAll('#menu-s a').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            var url = this.getAttribute('href');

            // Carrega o conteúdo correspondente no modal usando AJAX
            var xhr = new XMLHttpRequest();
            xhr.open('GET', url, true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById('modal-content').innerHTML = xhr.responseText;

                    // Desliza para o conteúdo carregado
                    scrollToContent('modal-content');
                }
            };
            xhr.send();
        });
    });
</script>-->

<!-- Função para fechar o modal quando o usuário clicar fora dele -->
<script>
    window.addEventListener("click", function(event) {
        var modal = document.getElementById('meuModal');
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });
</script>



			
			  <div class="card-container-croly"style="margin-top:150px;" >
        <div class="card-onsy" id="gy1"   >
            <img src="../fotos/se.jpeg" alt="Imagem dos Card">
<h3><a href="<?php echo $urlCompleta; ?>" style="color:black;">Fundação Bill Gates e a inovação em favor da filantropia</a></h3>
            <div class="date"></div>
            <p>Artificial intelligence is as revolutionary as mobilexc phones and the Internet.</p>
        </div>
 
        <div class="card-onsy" id="gy2" id="mol">
            <img src="/fotos/livro2.jpg" width="150" alt="Imagem do Card">
            <h3>The risks of AI are real but manageable</h3>
            <div class="date"></div>
            <p>In London, I talked about two of the issues I’m most passionate about—and why they both demand urgent action.</p>
        </div>

        <div class="card-onsy" id="gy3" id="mol" >
            <img src="/fotos/livro3.jpg" alt="Imagem do Card">
            <h3>Why do children die?</h3>
            <div class="date"></div>
            <p>And upend the software industry.</p>
        </div>
    </div>
 
			
			
			
			</section>
<!------------------------------------------------------------------------------------------------------------------------------->
<section class="fim" id="titlef">
    <h2> Perguntas frequentes</h2>
    <div id="semantics">
<!-- Pergunta 1 -->


<div class="pergunta pergunta-faq" onclick="toggleResposta(1)">
    <h3>+ O que aconteceu com ariba.com e fieldglass.com?</h3>
    <div class="resposta">
        <p>uma linha preta sob cada pergunta. Você pode personalizar a cor da linha, a espessura e
             o espaçamento conforme necessário.
             O padding-bottom é usado para adicionar um espaço entre o texto da pergunta e a linha.</p>
    </div>
</div>

<!-- Pergunta 2 -->
<div class="pergunta pergunta-faq" onclick="toggleResposta(2)">
    <h3>+ Por que os sites ariba.com e fieldglass.com foram desativados?</h3>
    <div class="resposta">
        <p>uma linha preta sob cada pergunta. Você pode personalizar a cor da linha, a espessura e
            o espaçamento conforme necessário.
            O padding-bottom é usado para adicionar um espaço entre o texto da pergunta e a linha.</p>
    </div>
</div>

<!-- Pergunta 3 -->
<div class="pergunta pergunta-faq" onclick="toggleResposta(3)">
    <h3>+ Por que os sites ariba.com e fieldglass.com foram desativados?</h3>
    <div class="resposta">
        <p>My last holiday books list included a novel called An American Marriage which really
             stuck with me over the previous year. I was deeply touched by its story of a husband torn away 
             from his wife by a false accusation that lands him in prison. The book did a beautiful 
            job of showing how incarceration can devastate a family, even after release from prison.</p>
    </div>
</div>


<!-- Pergunta 4 -->
<div class="pergunta pergunta-faq" onclick="toggleResposta(4)">
    <h3>+ Por que os sites ariba.com e fieldglass.com foram desativados?</h3>
    <div class="resposta">
        <p>Os sites foram desativados devido a...</p>
    </div>
</div>


<!-- Pergunta 5 -->
<div class="pergunta pergunta-faq" onclick="toggleResposta(5)">
    <h3>+ Por que os sites ariba.com e fieldglass.com foram desativados?</h3>
    <div class="resposta">
        <p>Os sites foram desativados devido a...</p>
    </div>
</div>


<!-- Pergunta 6 -->
<div class="pergunta pergunta-faq" onclick="toggleResposta(6)">
    <h3>+ Por que os sites ariba.com e fieldglass.com foram desativados?</h3>
    <div class="resposta">
        <p>Os sites foram desativados devido a...</p>
    </div>
</div>

</div>
 
</div>

</section>


<section class="fait">

 
<script src="../script/respostas.js"></script>
<script src="..//script/demonstracaoKiddding.js"></script>
<script src="..//script/script.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Função para mostrar/ocultar respostas
    function toggleResposta(id) {
        var resposta = document.querySelectorAll('.pergunta-faq .resposta')[id - 1];
        resposta.classList.toggle('expandida');
    }

    // Eventos de clique para cada pergunta
    var perguntas = document.querySelectorAll('.pergunta-faq');
    perguntas.forEach(function (pergunta, index) {
        pergunta.addEventListener('click', function () {
            toggleResposta(index + 1);
        });
    });
});
</script>

<script>
    function mostrarLogin() {
        var comboLogin = document.getElementById("login-combobox");
        if (comboLogin) {
            comboLogin.classList.toggle("hidden");
        }
    }

    function mostrarPagina(pagina) {
        // Esconder todas as páginas
        var paginas = document.querySelectorAll(".pagina");
        for (var i = 0; i < paginas.length; i++) {
            paginas[i].style.display = "none";
        }

        // Mostrar a página selecionada
        var paginaSelecionada = document.getElementById(pagina);
        if (paginaSelecionada) {
            paginaSelecionada.style.display = "flex";
        }
    }

    // Mostrar a página "Acessar Conta" quando a página é carregada
   window.onload = function () {
        mostrarPagina('acessarConta');
    }
</script>

 <!--<script>
    document.addEventListener('DOMContentLoaded', (event) => {
      let secoes = document.querySelectorAll('.minhaSecao1');
      let cores = ['#0aa7c8', 'transparent', '#900C3F', '#581845']; // Adicione suas cores preferidas aqui

      secoes.forEach((secao, index) => {
        secao.style.backgroundColor = cores[index % cores.length];
      });
    });
  </script>--> 
  
  
  

<script src="script/respostas.js"></script>
<script src="script/demonstracaoKiddding.js"></script>

     <footer>
        

        </footer>


</body>
</html>


 

 