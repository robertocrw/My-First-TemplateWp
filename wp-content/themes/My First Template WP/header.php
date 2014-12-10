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
			     
				 header paginas
			 
			 </div><!--fim do header pagina-->
			 
			 <div id="header-social">
			     
				 header social
			 
			 </div><!--fim do header social-->
		 
		 </div><!--fim do header sup contente-->
	 
	 </div><!--fim do header superior-->

<div id="header-content">
     
	 <div id="logo">
	    
		logo
	 
	 </div><!--fim logo-->
	 
	 <div id="login">
	  
	    login
	 
	 </div><!--fim login-->
	 
	 <div id="search">
	     
		 Barra de Busca
	 
	 </div><!--fim search-->

</div><!--fim do header contente-->

<div id="nav">
     
	 <div id="nav-content">
	     
		 Barra de navegação
	 
	 </div><!--fim do nav-content-->

</div><!--fim nav--> 

</div><!--fim do hearder-->