<div id="sidebar">
     
	 <div id="sidebar-vistos">
	     <div id="title-vistos"><span>POST MAIS VISTOS</span></div>
		 
		 <?php if(function_exists('get_most_viewed')): ?>
		 <ul>
		     
			 <li>
			     <span class="vistos-number">5<?php get_most_viewed('post', 5); ?></span>
				 
			 </li>
		 </ul>
		 <?php endif; ?>
	 
	 </div><!--fim da sidebar vistos-->
	 
	 <div id="sidebar-colunistas">
	     <div id="title-colunistas"><span>COLUNISTAS</span></div>
		 <div class="colunistas">
		     <ul>
			     <!--ATENÇÃO NÃO PRATICO. ID-USER vai trabalhar com o id do usuario-->
			     <?php $author='1'; ?>
			     
			 
			     <li>
				     <!--vai pegar o avatar do author o 70 representa 70 px de tamanho do avatar-->
				     <?php echo (get_avatar($author, 70)); ?>
				      <!--Este codigo faz com que o nome seja a url do autor e faz aparecer o primerio e ultimo nome do autor-->
				     <h1><a href="<php bloginfo('url'); ?>/?author=<?php echo $author; ?>"><?php $user_info = get_userdata($author); echo ($user_info->first_name ."". $user_info->last_name . "\n"); ?></a></h1>
					 
					 <div class="info-colunistas">
						 <ul> <!--ATENÇÂO NAO PRATICO. adicionado o url facebook e target name para abrir em outra pagina-->
							 <li><a href="http://www.facebook.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/imagens/facebook.png" alt="" title=""/></a></li>
							 <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/imagens/google+.png" alt="" title=""/></a></li>
							 <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/imagens/twitter.png" alt="" title=""/></a></li>
							 <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/imagens/youtube.png" alt="" title=""/></a></li>
						 </ul>
					 </div><!--fim do info colunistas-->
				 </li>


			 </ul>
		 </div><!--fim do colunistas-->
	 
	 </div><!--fim da sidebar colunistas-->
	 
	 <div id="sidebar-publi">
	     <div id="title-publi"><span>PUBLICIDADE</span></div>
		     <ul>
			     <li class="publi-maior">Publicidade maior</li>
				 <li class="publi-left" >Publicidade left</li>
				 <li class="publi-right">Publicidade right</li>
			 </ul>
	
	 </div><!--fim da sidebar publi-->
	 
	 <div id="sidebar-coment">
	   
	     <div id="title-coment"><span>MAIS COMENTADOS</span></div>
		 <ul>
		     <li>
			     <span class="coment-number">1</span>
				 <a href="#">Google deve liberar nova interface do Maps em evento</a>
			 </li>
			 <li>
			     <span class="coment-number">2</span>
				 <a href="#">Google deve liberar nova interface do Maps em evento</a>
			 </li>
			 <li>
			     <span class="coment-number">3</span>
				 <a href="#">Google deve liberar nova interface do Maps em evento</a>
			 </li>
			 <li>
			     <span class="coment-number">4</span>
				 <a href="#">Google deve liberar nova interface do Maps em evento</a>
			 </li>
			 <li>
			     <span class="coment-number">5</span>
				 <a href="#">Google deve liberar nova interface do Maps em evento</a>
			 </li>
		 </ul>
	 
	 </div><!--fim da sidebar coment-->
	 
	 <div id="sidebar-facebook">
	     
		 <div id="title-facebook"><span>FACEBOOK</span></div>
		 <div id="face-box">
		 <!--Segunda parte do codigo Fabook-->
		 <div class="fb-like-box" data-href="https://www.facebook.com/FacebookDevelopers" data-width="280" data-height="300" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
	     <!--fim codigo Facebook-->
		 </div>
	 
	 </div><!--fim da sidebar facebook-->

</div><!--fim sidebar-->