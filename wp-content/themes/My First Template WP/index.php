<?php get_header();  ?>

<div id="container">
     
	 <div id="content">
	     
		 <div id="destaque">
		    
			<div class="destaque-post">
			     <!--Dicionario-->
				 <!--category_name=destaques&offset=0&showposts=1-->
				 <!--category-name= esta dizendo que todos os posts que estiver nesta categoria vai estar nesta area, neste caso a categoria é destaques-->
				 <!--&offset= vai organizar as postagens e mostrar nesta area sempre que houver atualização--> 
				 <!--&showposts= Vai mostrar apenas uma postagem nesta area-->
			     
				 <!--abrir o l post sempre acima do loop--><!--ATENÇÂO para o lado do usuario. video 16-->
				 <?php query_posts('category_name=destaques&offset=0&showposts=1'); ?>
			     <!--loop que vai fazer com que as postagens criada pelo usuario seje mostrada-->
				 <?php if (have_posts()) : while(have_posts()): the_post(); ?>
				 
				 <!--the_Permalink();  vai fazer com que crie um link para ver o post-->
				 <a href="<?php the_Permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/imagens/post.jpg" rel="" title="" /></a>
				 <div class="destaque-info">
				     <ul><!--the_autor(); vai exibir o autor do post-->
					     <li class="dest-autor"><?php the_author(); ?></li>
						 <!--este comando esta dependendo do plugin WP-PostViews que esta instalado, se possivel criar o meu proprio-->
						 <li class="dest-views"><?php if(function_exists('the_views')); {the_views();}; ?></li>
						 <!--comments_number vai fazer com que os comentarios seje contados e visualizados no contador-->
						 <li class="dest-coment"><?php comments_number('0','1','%'); ?></li>
					 </ul>
			     </div><!--fim destaque info-->
				 <!-- the_title(); vai fazer com que o titulo que o usuario criaou seja mostrado-->
				 <h1><a href="<?php the_Permalink(); ?>"><?php the_title(); ?></a></h1>
				 <!--fexamento do loop-->
				 
				 <?php endwhile; else: ?>
				 <?php endif; ?>
				 
				 
				 <div class="list-dest">
				     <ul>
					 
				 <!--abrir o l post sempre acima do loop--><!--ATENÇÂO para o lado do usuario. video 16-->
				 <?php query_posts('category_name=destaques&offset=2&showposts=2'); ?>
				 <!--loop que vai fazer com que as postagens criada pelo usuario seje mostrada-->
				 <?php if (have_posts()) : while(have_posts()): the_post(); ?>
					 
					 
					     <li><!--ATENÇÂO para exibir as imagens que o usuari subiu para o post eu devo inserir o ?php the_post_thumbnails();?> no lugar de toda a tag img-->
						     <a href="<?php the_Permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/imagens/post.jpg" rel="" title="" /></a>
							 <h2><a href="<?php the_Permalink(); ?>"><?php the_title(); ?></a></h2>
						 </li>
						 
				 <?php endwhile; else: ?>
				 <?php endif; ?>
						 
						 

					 </ul>
			     </div><!--fim list dest-->
				 
			</div><!--fim destaque post-->
			
			
			<div class="destaque-post right ">
			     
				 <!--abrir o l post sempre acima do loop--><!--ATENÇÂO para o lado do usuario. video 16-->
				 <?php query_posts('category_name=destaques&offset=1&showposts=1'); ?>
			     <!--loop que vai fazer com que as postagens criada pelo usuario seje mostrada-->
				 <?php if (have_posts()) : while(have_posts()): the_post(); ?>
				 
				 
				 <!--the_Permalink();  vai fazer com que crie um link para ver o post-->
				 <a href="<?php the_Permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/imagens/post2.jpg" rel="" title=""/></a>
				 <div class="destaque-info">
				     <ul><!--the_autor(); vai exibir o autor do post-->
					     <li class="dest-autor"><?php the_author(); ?></li>
						 <!--este comando esta dependendo do plugin WP-PostViews que esta instalado, se possivel criar o meu proprio-->
						 <li class="dest-views"><?php if(function_exists('the_views')); {the_views();}; ?></li>
						 <!--comments_number vai fazer com que os comentarios seje contados e visualizados no contador-->
						 <li class="dest-coment"><?php comments_number('0','1','%'); ?></li>
					 </ul>
			     </div><!--fim destaque info-->
				 <!-- the_title(); vai fazer com que o titulo que o usuario criaou seja mostrado-->
				 <h1><a href="<?php the_Permalink(); ?>"><?php the_title(); ?></a></h1>
				 <!--fexamento do loop-->
				 
				 <?php endwhile; else: ?>
				 <?php endif; ?>
				 
				 
				 
				 <div class="list-dest">
				     <ul>
					 
				 <!--abrir o l post sempre acima do loop--><!--ATENÇÂO para o lado do usuario. video 16-->
				 <?php query_posts('category_name=destaques&offset=4&showposts=2'); ?>
				 <!--loop que vai fazer com que as postagens criada pelo usuario seje mostrada-->
				 <?php if (have_posts()) : while(have_posts()): the_post(); ?>
					 
					 
					     <li><!--ATENÇÂO para exibir as imagens que o usuari subiu para o post eu devo inserir o ?php the_post_thumbnails();?> no lugar de toda a tag img-->
						     <a href="<?php the_Permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/imagens/post.jpg" rel="" title="" /></a>
							 <h2><a href="<?php the_Permalink(); ?>"><?php the_title(); ?></a></h2>
						 </li>
						 
				 <?php endwhile; else: ?>
				 <?php endif; ?>
						 
						 

					 </ul>
			     </div>
				 
			</div><!--fim destaque post right-->
			
		 
		 </div><!--fim do destaque-->
		 
		 <div id="tecnologia">
		     
		 
		     <div id="title-tec"><span>TECNOLOGIA</span></div>
		     
			     <div class="post-tec">
			         <a href="#"><img src="<?php bloginfo('template_url'); ?>/imagens/post.jpg" rel="" title="" /></a>
				         <h1><a href="#">Google pode estar preparando versão do Now para Mac OS X</a></h1>
					 
					     <div class="tec-info">
					         <ul>
						         <li class="tec-autor">autor</li>
							     <li class="tec-views">views</li>
							     <li class="tec-coment">coment</li>
						     </ul>
					     </div><!--fim do tec-info-->
					     <p>O google now, extensão da ferramenta de buscas da empresa, pode estar chegando aos François...</p>
			     </div><!--fim do post tec-->
				 
				 <div class="post-tec">
			         <a href="#"><img src="<?php bloginfo('template_url'); ?>/imagens/post.jpg" rel="" title="" /></a>
				         <h1><a href="#">Google pode estar preparando versão do Now para Mac OS X</a></h1>
					 
					     <div class="tec-info">
					         <ul>
						         <li class="tec-autor">autor</li>
							     <li class="tec-views">views</li>
							     <li class="tec-coment">coment</li>
						     </ul>
					     </div><!--fim do tec-info-->
					     <p>O google now, extensão da ferramenta de buscas da empresa, pode estar chegando aos François...</p>
			     </div><!--fim do post tec-->
		 
		 </div><!--fim do tecnologia-->	
         <div id="entretenimento">		 
		     
			 <div id="title-entretenimento"><span>ENTRETENIMENTO</span></div>
			 
			     <div class="post-entretenimento">
				     <a href="#"><img src="<?php bloginfo('template_url'); ?>/imagens/post3.jpg" rel="" title="" /></a>
					     <h1><a href="#">Justin Timberlake engrassa lista de atrações</a></h1>
						 
						 <div class="info-entretenimento">
						     <ul>
							     <li class="autor-entretenimento">autor</li>
								 <li class="coment-entretenimento">coment</li>
							 </ul>
						 </div> <!--fim do info-entretenimeto-->
						 <p>Justin Timberlake será umas das grandes atrações do Rock In Rio. De acordo com a organização do festival, o cantor...</p>
					 
				 </div> <!--fim do post entretenimento-->
				 <div class="post-entretenimento">
				     <a href="#"><img src="<?php bloginfo('template_url'); ?>/imagens/post3.jpg" rel="" title="" /></a>
					     <h1><a href="#">Justin Timberlake engrassa lista de atrações</a></h1>
						 
						 <div class="info-entretenimento">
						     <ul>
							     <li class="autor-entretenimento">autor</li>
								 <li class="coment-entretenimento">coment</li>
							 </ul>
						 </div> <!--fim do info-entretenimeto-->
						 <p>Justin Timberlake será umas das grandes atrações do Rock In Rio. De acordo com a organização do festival, o cantor...</p>
					 
				 </div> <!--fim do post entretenimento-->
				 <div class="post-entretenimento">
				     <a href="#"><img src="<?php bloginfo('template_url'); ?>/imagens/post3.jpg" rel="" title="" /></a>
					     <h1><a href="#">Justin Timberlake engrassa lista de atrações</a></h1>
						 
						 <div class="info-entretenimento">
						     <ul>
							     <li class="autor-entretenimento">autor</li>
								 <li class="coment-entretenimento">coment</li>
							 </ul>
						 </div> <!--fim do info-entretenimeto-->
						 <p>Justin Timberlake será umas das grandes atrações do Rock In Rio. De acordo com a organização do festival, o cantor...</p>
					 
				 </div> <!--fim do post entretenimento-->
			 
		 </div><!--fim do entretenimento-->
		 
		 <div id="bloco-esporte-saude">
		 
		     <div id="esporte">
		     
			     <div id="title-esporte"><span>ESPORTES</span></div>
				     <a href="#"><img src="<?php bloginfo('template_url'); ?>/imagens/post4.jpg" rel="" title="" /></a>
		                 <div class="esporte-info">
						     <ul>
							     <li class="esporte-autor">autor</li>
								 <li class="esporte-views">views</li>
								 <li class="esporte-coment">coment</li>
							 </ul>
						 </div><!--fim do esporte info-->
						 <h1><a href="#">Deores no joelho? Não se desepere! Fortaleça a musculatura e descanse</a></h1>
						 
						 <div id="esporte-list">
						     <ul>
							     <li>
								     <a href="#"><img src="<?php bloginfo('template_url'); ?>/imagens/post2.jpg" rel="" title=""/></a>
								     <h2><a href"#">Tecnologia faz atleta sem movimento das pernas completar prova de 10km - eu atleta</a></h2>
								 </li>
							 </ul>
						 </div><!--fim do esport liste-->
						 
		     </div><!--fim do esporte-->
		 
		     <div id="saude">
		    
				     <div id="title-saude"><span>SAÚDE</span></div>
				     <a href="#"><img src="<?php bloginfo('template_url'); ?>/imagens/post4.jpg" rel="" title="" /></a>
		                 <div class="saude-info">
						     <ul>
							     <li class="saude-autor">autor</li>
								 <li class="saude-views">views</li>
								 <li class="saude-coment">coment</li>
							 </ul>
						 </div><!--fim do saude info-->
						 <h1><a href="#">Deores no joelho? Não se desepere! Fortaleça a musculatura e descanse</a></h1>
						 
						 <div id="saude-list">
						     <ul>
							     <li>
								     <a href="#"><img src="<?php bloginfo('template_url'); ?>/imagens/post2.jpg" rel="" title=""/></a>
								     <h2><a href"#">Tecnologia faz atleta sem movimento das pernas completar prova de 10km - eu atleta</a></h2>
								 </li>
							 </ul>
						 </div><!--fim do saude liste-->
		
 		     </div><!--fim do saude-->
		 
		 </div><!--fim bloco sport saude-->
		 
	     <div id="bloco-politica-games">
		 
		     <div id="politica">
		     
			    <div id="title-politica"><span>POLITICA</span></div>
				     <a href="#"><img src="<?php bloginfo('template_url'); ?>/imagens/post4.jpg" rel="" title="" /></a>
		                 <div class="politica-info">
						     <ul>
							     <li class="politica-autor">autor</li>
								 <li class="politica-views">views</li>
								 <li class="politica-coment">coment</li>
							 </ul>
						 </div><!--fim do politica info-->
						 <h1><a href="#">Deores no joelho? Não se desepere! Fortaleça a musculatura e descanse</a></h1>
						 
						 <div id="politica-list">
						     <ul>
							     <li>
								     <a href="#"><img src="<?php bloginfo('template_url'); ?>/imagens/post2.jpg" rel="" title=""/></a>
								     <h2><a href"#">Tecnologia faz atleta sem movimento das pernas completar prova de 10km - eu atleta</a></h2>
								 </li>
							 </ul>
						 </div><!--fim do politica liste-->
		 
		     </div><!--fim do politica-->
		 
		     <div id="games">
		     
				<div id="title-games"><span>GAMES</span></div>
				     <a href="#"><img src="<?php bloginfo('template_url'); ?>/imagens/post4.jpg" rel="" title="" /></a>
		                 <div class="games-info">
						     <ul>
							     <li class="games-autor">autor</li>
								 <li class="games-views">views</li>
								 <li class="games-coment">coment</li>
							 </ul>
						 </div><!--fim do games info-->
						 <h1><a href="#">Deores no joelho? Não se desepere! Fortaleça a musculatura e descanse</a></h1>
						 
						 <div id="games-list">
						     <ul>
							     <li>
								     <a href="#"><img src="<?php bloginfo('template_url'); ?>/imagens/post2.jpg" rel="" title=""/></a>
								     <h2><a href"#">Tecnologia faz atleta sem movimento das pernas completar prova de 10km - eu atleta</a></h2>
								 </li>
							 </ul>
						 </div><!--fim do games liste-->
		 
		     </div><!--fim do games-->
		 
		 </div><!--fim do bloco politica games-->
		 
		 
	 
	 </div><!--fim do content-->

<?php get_sidebar(); ?>	 

</div><!--fim do container-->

<?php get_footer(); ?>