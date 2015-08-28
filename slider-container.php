
<?php
/*
* Template Name: Slider
*/
    get_header();
?>

<?php 
    $args = array(
        'post_type' => 'slider-list',
        'orderby' => 'menu_order',
        'post_per_page' => -1
    );
    $slider = new WP_Query ( $args );
?>




<div class="slider-container">
    <div class="arrow arrow-left">
    </div>
    <div class="arrow arrow-right">
    </div>
    <div class="slider">


        <div class="banner">
            <div class="inner-content">
                <div class="banner-content banner-content-image">
                    <img src="<?php bloginfo ('template_url'); ?> /Images/iphone_image.png">
                </div>
            </div>
        </div>


        <?php while ($slider -> have_posts()) : $slider -> the_post(); ?>

        <div class="banner">
            <div class="inner-content">
                <div class="banner-content banner-content-image">

                        <?php   the_post_thumbnail('slider'); ?>

                </div>
            </div>
        </div>

        <?php endwhile; ?>

        
        <div class="banner">
            <div class="inner-content">
                <div class="banner-content banner-content-image">
                    <img src="<?php bloginfo ('template_url'); ?> /Images/iphone_image.png">
                </div>
            </div>
        </div>

        
        
    </div>
</div>
<?php get_footer(); ?>

