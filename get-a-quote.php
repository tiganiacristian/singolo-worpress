<?php
/*
* Template Name: Get a quote
*/
include("header.php");
?>
<div class="get-a-quote" id="get-a-quote-menu">
    <div class="inner-content">

     <?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
       
        <h4><?php the_title(); ?></h4>
         <p><?php echo get_the_content(); ?></p>

    <?php endwhile; endif; ?>


        <?php 

            if(isset($_POST['submit'])) {


            $name = $_POST['userName'];
            $visitor_email = $_POST['email'];
            $email_subject = $_POST['subject'];
            $project_body = $_POST['project-description'];



            }

            ?>




       <form class="quote-form" method="post" action="<?php bloginfo('template_directory'); ?>/submit.php" >
            <input type="text" name="userName" placeholder="Name(Required)" onfocus="this.placeholder = '' "
                   onblur="this.placeholder = 'Name(Required) '" required>
            <input type="email" name="email" placeholder="Email(Required)" onfocus="this.placeholder = '' "
                   onblur="this.placeholder = 'Email(Required) '" required>
            <input type="text" name="subject" placeholder="Subject" onfocus="this.placeholder = '' "
                   onblur="this.placeholder = 'Subject '">
            <textarea rows="5" name="project-description" placeholder="Describe your project in detail..."
                      onfocus="this.placeholder = '' "
                      onblur="this.placeholder = 'Describe your project in detail...'"></textarea>
            <input type="submit" name="submit" value="Submit" >
        </form>


        <address class="contact-information">
            <h6>Contact Information</h6>

            <p>Quisque hendrerit purus dapibus, ornare nibh vitae, viverra nibh. Fusce vitae aliquam tellus. Proin sit
                amet volutpat libero. Nulla sed nunc et tortor luctus faucibus. Morbi at aliquet turpis, et consequat
                felis.

            </p>
            
            <ul>
                <li class="contact_city-addr"> Elm St. 14/05 Lost City</li>
                <li class="contact_phone-number">03528 331 86 35</li>
                <li class="contact_email-addr">info@singolo.com</li>
            </ul>


        </address>
    </div>
</div>
<?php include("footer.php"); ?>