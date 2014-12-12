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
			     
				 <ul><!--vai determinar que o HOME seja minha pagina principal-->
				     <li><a href="<?php bloginfo('home'); ?>">Home</a></li>
                     <?php wp_list_pages('title_li=');?>
				 </ul><!--vai fazer com que as paginas criada pelo usuario apareça-->
			 
			 </div><!--fim do header pagina-->
			 
			 <div id="header-social">
			     
				 <a href="http://www.facebook.com/"><img src="<?php bloginfo('template_url'); ?>/imagens/icon-face.jpg" rel="" title="" /></a>
				 <a href=""><img src="<?php bloginfo('template_url'); ?>/imagens/icon-google.jpg" rel="" title="" /></a>
				 <a href=""><img src="<?php bloginfo('template_url'); ?>/imagens/icon-twist.jpg" rel="" title="" /></a>
				 <a href=""><img src="<?php bloginfo('template_url'); ?>/imagens/icon-youtube.jpg" rel="" title="" /></a>
			 
			 </div><!--fim do header social-->
		 
		 </div><!--fim do header sup contente-->
	 
	 </div><!--fim do header superior-->

<div id="header-content">
     
	 <div id="logo">
	    <!--vai fazer com que o meu logo seja um botão para a pagina home-->
		<a href="<?php bloginfo('home'); ?>"><img src="<?php bloginfo('template_url'); ?>/imagens/logo.png" rel="" title=""/></a>
	 
	 </div><!--fim logo-->
	 
	  <div id="search">
	     
		 <form action="" method="post">
		     <input type="text" name="" placeholder="Digite sua pesquisa">
			  <input type="submit" value="" class="btn-search" name="">
		 </form>
	 
	 </div><!--fim search-->
	 
	 <div id="login">
	    <!--mudar para um comando como o bloginfo() que ainda não sei-->
	    <ul>
		    <li class="logar"><a href="http://127.0.0.1/projects/GitHub/php/Curso%20Wordpress/My-First-TemplateWp/wp-admin">Login</a></li>
			<li class="registre"><a href="http://127.0.0.1/projects/GitHub/php/Curso%20Wordpress/My-First-TemplateWp/wp-login.php?action=registre">Registre-se</a></li>
		</ul>
	 
	 </div><!--fim login-->
	 

</div><!--fim do header contente-->

<div id="nav">
     
	 <div id="nav-content">
	     
		 <ul> <!--O title_li=&hide_empty= é o camando que faz aparecer as categoria caso eu de o valor ZERO no final, caso seja um valor maior que ZERO ele ira exibir somente categorias com postagems com determinado valor-->
             <?php wp_list_categories('title_li=&hide_empty=0&orderby&depth=2'); ?> 
		 </ul><!--O &orderby no final depois do valor de postagens vai fazer com que as categorias apareçam na ordem que o usuario ordenou
	 
	 </div><!--fim do nav-content-->

</div><!--fim nav--> 

</div><!--fim do hearder-->