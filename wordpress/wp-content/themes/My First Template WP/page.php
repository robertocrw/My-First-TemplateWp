<?php get_header();  ?>

<div id="container">
     
	 <div id="content">
	     
		 <div class="main-page">
		 
		     <div id="title-page"><span><?php the_title(); ?></span></div>
		     
			 <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			 <p><?php the_content();  ?></p>
			 <?php endwhile; else: ?>
			 <?php endif; ?>
		 </div>
		 
	 
	 </div><!--fim do content-->

<?php get_sidebar(); ?>	 

</div><!--fim do container-->

<?php get_footer(); ?>