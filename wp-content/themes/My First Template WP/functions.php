<?php 
/**WIDGETS**/

//este comando vai fazer com que exista funções na minha sidebar.php
if(function_exists('register_sidebar')) 
{
     register_sidebar(array(
	 
	 ));
}	

/**Imagem destacada***/

//este comando faz com que eu tenha a opsão de destacar imagem no post, já que não vem definido no wordpress, pois temos sempre que chamala no nosso codigo..
add_theme_support('post-thumbnails');
 
?>
<!--fim do php-->