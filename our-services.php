<?php
/*
* Template Name: Our services
*/

?>
<?php get_header(); ?>

<?php 
    $args = array(
        'post_type' => 'services-list',
        'orderby' => 'menu_order',
        'posts_per_page' => -1
    );
    $services_list = new WP_Query ($args);
?>

<div class="our-services" id="our-services-menu">
	<div class="inner-content">

	<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
		
		<span class="our-services-title"><?php  the_title(); ?></span>
		<p><?php echo get_the_content(); ?></p>
		<div class="services-list">

	 <?php endwhile; endif; ?>
			 
			 <?php while ( $services_list->have_posts() ) : $services_list->the_post();  ?>

        		<div class="service">
       			    <div class = "service-logo"><?php the_post_thumbnail('small'); ?></div>
       				<div class="service-description">
			      		<span><?php  the_title(); ?></span>
			      		<p><?php  echo get_the_content(); ?></p>
					</div>; 
     			</div>
    <?php  endwhile; ?>
     
			
	</div>
</div>
</div>


<?php get_footer(); ?>


