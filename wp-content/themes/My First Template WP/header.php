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
		     <input type="text" name="">
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
	     
		 Barra de navegação
	 
	 </div><!--fim do nav-content-->

</div><!--fim nav--> 

</div><!--fim do hearder-->