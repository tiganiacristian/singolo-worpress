<?php
/*
* Template Name: About us
*/
?>

<?php get_header(); ?>

<?php 
    $args = array(
        'post_type' => 'about-list',
        'orderby' => 'menu_order',
        'posts_per_page' => -1
    );
    $about_list = new WP_Query ( $args );
?>


<div class="about-us" id="about-us-menu">
    <div class="inner-content">

     <?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
        <h2><?php the_title(); ?></h2>

        <p><?php echo get_the_content(); ?></p>

     <?php endwhile; endif; ?>

        <ul class="about-us_profile">

            <?php while ( $about_list->have_posts() ) : $about_list->the_post();  ?>

           
                <li>
                                <?php   the_post_thumbnail('medium'); ?>
                                <h4><?php the_title(); ?></h4>

                                <p><?php echo get_the_content(); ?></p>
                            
                        <ul class="social-media-sites">
                        

                                <?php if(get_post_meta($post->ID, "facebook", true)) { 
                                    echo '<li class="facebook-button"><a href="'.get_post_meta($post->ID, "facebook", true).'" target="_blank"></a></li>';
                                } ?>

                                <?php if(get_post_meta($post->ID, "twitter", true)) { 
                                    echo '<li class="twitter-button"><a href="'.get_post_meta($post->ID, "twitter", true).' "target="_blank"></a></li>';
                                } ?>

                                 <?php if(get_post_meta($post->ID, "google-plus", true)) { 
                                    echo '<li class="google-plus-button"><a href="'.get_post_meta($post->ID, "google-plus", true).'" target="_blank"></a></li>';
                                } ?>

                                <?php if(get_post_meta($post->ID, "linkedin", true)) { 
                                    echo '<li class="linkedin-button"><a href="'.get_post_meta($post->ID, "linkedin", true).'" target="_blank"></a></li>';
                                } ?>7

                        </ul>
                </li>
            <?php  endwhile; ?>
        </ul>

    </div>

</div>
<?php include("footer.php"); ?>