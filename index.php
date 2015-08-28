
<?php
/*
* Template Name: Slider
*/
    get_header();
?>

<?php get_header(); ?>

<?php 
    $args = array(
        'post_type' => 'slider-list',
        'orderby' => 'menu_order',
        'post_per_page' => -1
    );
    $slider_list = new WP_Query ( $args );
?>
<div class="slider-container">
    <div class="arrow arrow-left">
    </div>
    <div class="arrow arrow-right">
    </div>
    <div class="slider">
        <div class="banner">
            <div class="inner-content">

            	<?php while ( $slider_list->have_posts() ) : $slider_list->the_post();  ?>

                <div class="banner-content banner-content-image">
                    <?php the_post_thumbnail(); ?>
                </div>

                <?php  endwhile; ?>

            </div>
        </div>
<!--         <div class="banner">
            <div class="inner-content">
                <div class="banner-content banner-content-image">
                    <img src="<?php bloginfo ('template_url'); ?>/images/iphone_image.png">
                </div>
            </div>
        </div>
        <div class="banner">
            <div class="inner-content">
                <div class="banner-content banner-content-image">
                    <img src="<?php bloginfo ('template_url'); ?>/images/iphone_image.png">
                </div>
            </div>
        </div>
        <div class="banner">
            <div class="inner-content">
                <div class="banner-content banner-content-image">
                   <img src="<?php bloginfo ('template_url'); ?>/images/iphone_image.png"> 
                </div>
            </div>
        </div> -->
    </div>
</div>
<?php get_footer(); ?>
