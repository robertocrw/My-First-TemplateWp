<?php get_header();  ?>

<div id="container">
     
	 <div id="content">
	     
		 <div id="destaque">

		 
<!--1 PRIMEIRA SEÇÂO DO HOME-->
			
			
			<div class="destaque-post">
			     <!--Dicionario-->
				 <!--category_name=destaques&offset=0&showposts=1-->
				 <!--category-name= esta dizendo que todos os posts que estiver nesta categoria vai estar nesta area, neste caso a categoria é destaques-->
				 <!--&offset= vai organizar as postagens e mostrar nesta area sempre que houver atualização--> 
				 <!--&showposts= Vai mostrar apenas uma postagem nesta area-->
			     
				 <!--category-name= não vai ajudar o usuario terei que procurar uma função que defina uma categoria pelo usuario e não pelo codigo-->
				 
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

		 
<!--1 FIM DA PRIMEIRA SEÇÃO DO HOME-->		 
		 
		 
		 <div id="tecnologia">
		     

<!--2 SEGUNDA SEÇÃO DO HOME-->		 
		     
			 
			 <div id="title-tec"><span>TECNOLOGIA</span></div>
		     
			     <!--abrir o l post sempre acima do loop--><!--ATENÇÂO para o lado do usuario. video 16-->
				 <?php query_posts('category_name=tecnologia&offset=0&showposts=2'); ?>
				 <!--loop que vai fazer com que as postagens criada pelo usuario seje mostrada-->
				 <?php if (have_posts()) : while(have_posts()): the_post(); ?>
				 
				 <div class="post-tec">
			         <a href="<?php the_Permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/imagens/post.jpg" rel="" title="" /></a>
				         <h1><a href="<?php the_Permalink(); ?>"><?php the_title(); ?></a></h1>
					 
					     <div class="tec-info">
					         <ul>
						         <li class="tec-autor"><?php the_author(); ?></li>
							     <li class="tec-views"><?php if(function_exists('the_views')); {the_views();}; ?></li>
							     <li class="tec-coment"><?php comments_number('0', '1', '%'); ?></li>
						     </ul>
					     </div><!--fim do tec-info-->
						 
						 <!--este comando esta dependendo do plugin (The Excerpt re-reloaded) para visualizar paragrafo -->
					     <p><?php the_excerpt_rereloaded(30,'Ler Mais'); ?></p>
			     </div><!--fim do post tec-->
				 
				 <?php endwhile; else: ?>
				 <?php endif; ?>
				 
		 
		 </div><!--fim do tecnologia-->	
         

<!--2 FIM DA SEGUNDA SEÇÃO DO HOME-->		 
		 
		 
		 <div id="entretenimento">		 
		     
<!--3 TERCEIRA SEÇÃO DO HOME-->			 
			 
			 
			 <div id="title-entretenimento"><span>ENTRETENIMENTO</span></div>
			 
			    <!--abrir o l post sempre acima do loop--><!--ATENÇÂO para o lado do usuario. video 16-->
				 <?php query_posts('category_name=entretenimento&offset=0&showposts=3'); ?>
				 <!--loop que vai fazer com que as postagens criada pelo usuario seje mostrada-->
				 <?php if (have_posts()) : while(have_posts()): the_post(); ?>
				 
				 <div class="post-entretenimento">
				     <a href="<?php the_Permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/imagens/post3.jpg" rel="" title="" /></a>
					     <h1><a href="<?php the_Permalink();  ?>"><?php the_title(); ?></a></h1>
						 
						 <div class="info-entretenimento">
						     <ul>
							     <li class="autor-entretenimento"><?php the_author(); ?></li>
								 <li class="coment-entretenimento"><?php comments_number('0','1','%'); ?></li>
							 </ul>
						 </div> <!--fim do info-entretenimeto-->
						 <p><?php the_excerpt_rereloaded(30,'Leia Mais'); ?></p>
				         <!--se quizer pode ficar em brano no valor rereloaded '' -->
				</div><!--fim do post entretenimento-->
				
				<?php endwhile; else: ?>
				 <?php endif; ?>

			 
		 </div><!--fim do entretenimento-->


<!--3 FIM DA TERCEIRA SEÇÃO DO HOME-->


		 
		 <div id="bloco-esporte-saude">

<!--4 QUARTA SEÇÃO DO HOME-->

		 
		     <div id="esporte">
		     
			     <div id="title-esporte"><span>ESPORTES</span></div>
				 
				 <!--abrir o l post sempre acima do loop--><!--ATENÇÂO para o lado do usuario. video 16-->
				 <?php query_posts('category_name=esportes&offset=0&showposts=1'); ?>
			     <!--loop que vai fazer com que as postagens criada pelo usuario seje mostrada-->
				 <?php if (have_posts()) : while(have_posts()): the_post(); ?>
				 
				     <a href="<?php the_Permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/imagens/post4.jpg" rel="" title="" /></a>
		                 <div class="esporte-info">
						     <ul>
							     <li class="esporte-autor"><?php the_author(); ?></li>
								 <li class="esporte-views"><?php if(function_exists('the_views')); {the_views();}; ?></li>
								 <li class="esporte-coment"><?php comments_number('0','1','%'); ?></li>
							 </ul>
						 </div><!--fim do esporte info-->
						 <h1><a href="<?php the_Permalink(); ?>"><?php the_title(); ?></a></h1>
				
				
				<?php endwhile; else: ?>
				<?php endif; ?>						 
						 
						 
						 <div id="esporte-list">
						     <ul>
							 
								 <!--abrir o l post sempre acima do loop--><!--ATENÇÂO para o lado do usuario. video 16-->
								 <?php query_posts('category_name=esportes&offset=1&showposts=1'); ?>
								 <!--loop que vai fazer com que as postagens criada pelo usuario seje mostrada-->
								 <?php if (have_posts()) : while(have_posts()): the_post(); ?>							 
							 
							     <li>
								     <a href="<?php the_Permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/imagens/post2.jpg" rel="" title=""/></a>
								     <h2><a href"<?php the_Permalink(); ?>"><?php the_title(); ?></a></h2>
								 </li>
								 
								 <?php endwhile; else: ?>
				                 <?php endif; ?>	
								 
							 </ul>
						 </div><!--fim do esport liste-->
						 
		     </div><!--fim do esporte-->

<!--4 FIM DA QUARTA SEÇÃO DO HOME-->

			 
		     <div id="saude">


<!--5 QUINTA SEÇÃO DO HOME-->			 
			 
			     <div id="title-saude"><span>SAUDE</span></div>
				 
				 <!--abrir o l post sempre acima do loop--><!--ATENÇÂO para o lado do usuario. video 16-->
				 <?php query_posts('category_name=saude&offset=0&showposts=1'); ?>
			     <!--loop que vai fazer com que as postagens criada pelo usuario seje mostrada-->
				 <?php if (have_posts()) : while(have_posts()): the_post(); ?>
				 
				     <a href="<?php the_Permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/imagens/post4.jpg" rel="" title="" /></a>
		                 <div class="saude-info">
						     <ul>
							     <li class="saude-autor"><?php the_author(); ?></li>
								 <li class="saude-views"><?php if(function_exists('the_views')); {the_views();}; ?></li>
								 <li class="saude-coment"><?php comments_number('0','1','%'); ?></li>
							 </ul>
						 </div><!--fim do esporte info-->
						 <h1><a href="<?php the_Permalink(); ?>"><?php the_title(); ?></a></h1>
				
				
				<?php endwhile; else: ?>
				<?php endif; ?>						 
						 
						 
						 <div id="saude-list">
						     <ul>
							 
								 <!--abrir o l post sempre acima do loop--><!--ATENÇÂO para o lado do usuario. video 16-->
								 <?php query_posts('category_name=saude&offset=1&showposts=1'); ?>
								 <!--loop que vai fazer com que as postagens criada pelo usuario seje mostrada-->
								 <?php if (have_posts()) : while(have_posts()): the_post(); ?>							 
							 
							     <li>
								     <a href="<?php the_Permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/imagens/post2.jpg" rel="" title=""/></a>
								     <h2><a href"<?php the_Permalink(); ?>"><?php the_title(); ?></a></h2>
								 </li>
								 
								 <?php endwhile; else: ?>
				                 <?php endif; ?>	
								 
							 </ul>
						 </div><!--fim do esport liste-->
		
 		     </div><!--fim do saude-->
		 
		 </div><!--fim bloco sport saude-->


<!--5 FIM DA QUINTA SEÇÃO DO HOME-->

		 
	     <div id="bloco-politica-games">

<!--6 SEXTA SEÇÃO DO HOME-->
		 
		     <div id="politica">
		     
			     <div id="title-politica"><span>POLITICA</span></div>
				 
				 <!--abrir o l post sempre acima do loop--><!--ATENÇÂO para o lado do usuario. video 16-->
				 <?php query_posts('category_name=politica&offset=0&showposts=1'); ?>
			     <!--loop que vai fazer com que as postagens criada pelo usuario seje mostrada-->
				 <?php if (have_posts()) : while(have_posts()): the_post(); ?>
				 
				     <a href="<?php the_Permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/imagens/post4.jpg" rel="" title="" /></a>
		                 <div class="politica-info">
						     <ul>
							     <li class="politica-autor"><?php the_author(); ?></li>
								 <li class="politica-views"><?php if(function_exists('the_views')); {the_views();}; ?></li>
								 <li class="politica-coment"><?php comments_number('0','1','%'); ?></li>
							 </ul>
						 </div><!--fim do esporte info-->
						 <h1><a href="<?php the_Permalink(); ?>"><?php the_title(); ?></a></h1>
				
				
				<?php endwhile; else: ?>
				<?php endif; ?>						 
						 
						 
						 <div id="politica-list">
						     <ul>
							 
								 <!--abrir o l post sempre acima do loop--><!--ATENÇÂO para o lado do usuario. video 16-->
								 <?php query_posts('category_name=politica&offset=1&showposts=1'); ?>
								 <!--loop que vai fazer com que as postagens criada pelo usuario seje mostrada-->
								 <?php if (have_posts()) : while(have_posts()): the_post(); ?>							 
							 
							     <li>
								     <a href="<?php the_Permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/imagens/post2.jpg" rel="" title=""/></a>
								     <h2><a href"<?php the_Permalink(); ?>"><?php the_title(); ?></a></h2>
								 </li>
								 
								 <?php endwhile; else: ?>
				                 <?php endif; ?>	
								 
							 </ul>
						 </div><!--fim do esport liste-->
		 
		     </div><!--fim do politica-->


<!--6 FIM DA SEXTA SEÇÃO DO HOME-->

			 
		     <div id="games">


<!--7 SETIMA SEÇÃO DO HOME-->			 
			 
		     
			     <div id="title-games"><span>GAMES</span></div>
				 
				 <!--abrir o l post sempre acima do loop--><!--ATENÇÂO para o lado do usuario. video 16-->
				 <?php query_posts('category_name=games&offset=0&showposts=1'); ?>
			     <!--loop que vai fazer com que as postagens criada pelo usuario seje mostrada-->
				 <?php if (have_posts()) : while(have_posts()): the_post(); ?>
				 
				     <a href="<?php the_Permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/imagens/post4.jpg" rel="" title="" /></a>
		                 <div class="games-info">
						     <ul>
							     <li class="games-autor"><?php the_author(); ?></li>
								 <li class="games-views"><?php if(function_exists('the_views')); {the_views();}; ?></li>
								 <li class="games-coment"><?php comments_number('0','1','%'); ?></li>
							 </ul>
						 </div><!--fim do esporte info-->
						 <h1><a href="<?php the_Permalink(); ?>"><?php the_title(); ?></a></h1>
				
				
				<?php endwhile; else: ?>
				<?php endif; ?>						 
						 
						 
						 <div id="games-list">
						     <ul>
							 
								 <!--abrir o l post sempre acima do loop--><!--ATENÇÂO para o lado do usuario. video 16-->
								 <?php query_posts('category_name=games&offset=1&showposts=1'); ?>
								 <!--loop que vai fazer com que as postagens criada pelo usuario seje mostrada-->
								 <?php if (have_posts()) : while(have_posts()): the_post(); ?>							 
							 
							     <li>
								     <a href="<?php the_Permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/imagens/post2.jpg" rel="" title=""/></a>
								     <h2><a href"<?php the_Permalink(); ?>"><?php the_title(); ?></a></h2>
								 </li>
								 
								 <?php endwhile; else: ?>
				                 <?php endif; ?>	
								 
							 </ul>
						 </div><!--fim do esport liste-->
		 
		     </div><!--fim do games-->


<!--7 FIM DA SETIMA SEÇÃO DO HOME-->
			 
			 
		 </div><!--fim do bloco politica games-->
		 
		 
	 
	 </div><!--fim do content-->

<?php get_sidebar(); ?>	 

</div><!--fim do container-->

<?php get_footer(); ?>