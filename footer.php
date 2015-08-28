<footer>


<?php 
    $args = array(
        'post_type' => 'social-media-list',
        'orderby' => 'menu_order',
        'posts_per_page' => -1
    );
    $social_media_list = new WP_Query ($args);
?>
    <div class="inner-content">
        <div class="copyright">© Copyright <?php echo date('Y'); ?> · by PSDchat.com</div>
        <div class="social-media-container">
            <ul class="social-media-sites">
                <li class="facebook-button"><a href="https://www.facebook.com/"  target="_blank"></a></li>
                <li class="google-plus-button"><a href="https://plus.google.com/"  target="_blank"> </a></li>
                <li class="twitter-button"><a href="https://twitter.com/"  target="_blank"> </a></li>
                <li class="linkedin-button"><a href="https://www.linkedin.com/"  target="_blank"> </a></li>
            </ul>
        </div>
    </div>

        <?php wp_footer(); ?>
</footer>

</body>
</html>
