<!DOCTYPE html>
<!--language_atributes vai fazer com que ele pegue as informação de linguage do usuario -->
<html <?php language_attributes()?> >
<!--bloginfo('charset') vai fazer com que atualize para a timezone do usuario ex: utf-8-->
<!--wp_title('-',true,'right'); bloginfo() vai fazer com que ele pegue as informações do titulo-->
<!--href="<?php// bloginfo('template_url') ?>/style.css" vai fazer com que permita pegar informações da pagina de estilo css-->
<head>
     <meta charset="<?php bloginfo('charset') ?>" /> 
     <title><?php wp_title('-',true,'right'); bloginfo() ?></title>
	 
	 <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/style.css" />

<?php wp_head();?>	 
</head>
<body>

<!--Box Facebook -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=535815079870722&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--Fim Box Fabeook-->

<div id="header">
     
	 <div id="header-superior">
	     
		 <div id="header-superior-content">
		     
			 <div id="header-paginas">
			     
				 <ul>
				     <li><a href="#">Home</a></li>
					 <li><a href="#">Arquivos</a></li>
					 <li><a href="#">Sobre Nós</a></li>
					 <li><a href="#">Serviços</a></li>
					 <li><a href="#">Contatos</a></li>
				 </ul>
			 
			 </div><!--fim do header pagina-->
			 
			 <div id="header-social">
			     
				 <a href=""><img src="<?php bloginfo('template_url'); ?>/imagens/icon-face.jpg" rel="" title="" /></a>
				 <a href=""><img src="<?php bloginfo('template_url'); ?>/imagens/icon-google.jpg" rel="" title="" /></a>
				 <a href=""><img src="<?php bloginfo('template_url'); ?>/imagens/icon-twist.jpg" rel="" title="" /></a>
				 <a href=""><img src="<?php bloginfo('template_url'); ?>/imagens/icon-youtube.jpg" rel="" title="" /></a>
			 
			 </div><!--fim do header social-->
		 
		 </div><!--fim do header sup contente-->
	 
	 </div><!--fim do header superior-->

<div id="header-content">
     
	 <div id="logo">
	    
		<a href="#"><img src="<?php bloginfo('template_url'); ?>/imagens/logo.png" rel="" title=""/></a>
	 
	 </div><!--fim logo-->
	 
	  <div id="search">
	     
		 <form action="" method="post">
		     <input type="text" name="" placeholder="Digite sua pesquisa">
			  <input type="submit" value="" class="btn-search" name="">
		 </form>
	 
	 </div><!--fim search-->
	 
	 <div id="login">
	  
	    <ul>
		    <li class="logar"><a href="">Login</a></li>
			<li class="registre"><a href="">Registre-se</a></li>
		</ul>
	 
	 </div><!--fim login-->
	 

</div><!--fim do header contente-->

<div id="nav">
     
	 <div id="nav-content">
	     
		 <ul>
		     <li><a href="#">Noticias</a></li>
			 <li><a href="#">Esportes</a>
			     <ul>
				     <li><a href="#">Futebol</a></li>
					 <li><a href="#">Natação</a></li>
					 <li><a href="#">Basquete</a></li>
					 <li><a href="#">Voleibol</a></li>
					 <li><a href="#">Tenis</a></li>
					 <li><a href="#">Ginastica</a></li>
					 <li><a href="#">Atletismo</a></li>
				 </ul>
			 </li>
			 <li><a href="#">Tecnologia</a></li>
			 <li><a href="#">Entretenimento</a></li>
			 <li><a href="#">Multimidias</a>
			     <ul>
				     <li><a href="#">Musicas</a></li>
					 <li><a href="#">Videos</a></li>
					 <li><a href="#">Fotos</a></li>
				 </ul>
			 </li>
			 <li><a href="#">Saúde</a></li>
			 <li><a href="#">Politica</a></li>
			 <li><a href="#">Games</a></li>
		 </ul>
	 
	 </div><!--fim do nav-content-->

</div><!--fim nav--> 

</div><!--fim do hearder-->