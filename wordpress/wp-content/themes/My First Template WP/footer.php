<div id="footer">
     
	 <div id="footer-content">
	     <div id="title-footer"><span><img src="<?php bloginfo('template_url'); ?>/imagens/logo-footer.png" alt="" title=""</span></div>
	     
		 <div id="footer-sobre">
		     <!--para pegar o titulo da pagina com id que esta na url neste caso o 52 (NÃO É PRATICO)-->
		     <?php query_posts('page_id=52'); ?>
		     <?php if (have_posts()): while(have_posts()): the_post(); ?>
		     <div id="title-sobre"><span><?php the_title(); ?></span></div>
			 
			 <p><?php the_excerpt(); ?><a href="<?php the_Permalink(); ?>">Leia Mais</a></p>
			
		     <?php endwhile; else: ?>
			 <?php endif; ?>
		 </div><!--fim footer sobre-->
		 
		 <div id="footer-paginas">
             <div id="title-paginas"><span>PAGINAS</span></div>
			 <ul>
                 <?php wp_list_pages('title_li='); ?>
			 </ul>
		 
		 </div><!--fim footer paginas-->
		 
		 <div id="footer-recentes">
		     
			 <div id="title-recentes"><span>POSTS RECENTES</span></div>
			 <ul>
		         <?php query_posts('showposts=4'); ?>
		         <?php if (have_posts()): while(have_posts()): the_post(); ?>
			         
					 <li><a href="<?php the_Permalink(); ?>"><?php the_title(); ?></a></li>
				 
				 <?php endwhile; else: ?>
				 <?php endif; ?>
			 </ul>
		 
		 </div><!--fim footer recentes-->
	 
	 </div><!--fim footer content -->
	 
	 <div id="footer-info">
	     <div id="info-content">
		     <span>Roberto Pinto Todos Direitos Reservados</span>
			 <span class="info-right">Desenvolvedor: <b>Roberto Pinto</b></span>
		 </div>
	 
	 </div><!--fim footer info-->

</div><!--fim footer-->

<?php wp_footer();?>
</body>
</html>