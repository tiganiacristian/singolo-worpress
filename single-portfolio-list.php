	<?php get_header(); ?>

	<div class="portofolio" id="portofolio-menu">
	    <div class="inner-content">
	     <?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
	    <div>
	     <?php the_post_thumbnail('slider'); ?>
	    </div>
	    <div>
	     <h2 class="portofolio_title"><?php the_title(); ?></h2>
	      <p class="portofolio_text"><?php echo get_the_content(); ?></p>     
	    </div>
	   <?php endwhile; endif; ?>
	    </div>
	 </div>

	<?php get_footer(); ?>