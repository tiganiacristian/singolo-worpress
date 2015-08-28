       
 <?php 

            if(isset($_POST['submit'])) {


            $name = $_POST['userName'];
            $visitor_email = $_POST['email'];
            $email_subject = $_POST['subject'];
            $project_body = $_POST['project-description'];


 
       			
       			require_once('../../../wp-config.php');

				global $wpdb;
                $table_name = 'form_entries';

                $wpdb->insert( $table_name, array(
                   "name" => $name,
                   "email" => $visitor_email,
                   "subject" => $email_subject,
                   "projectdescription" => $project_body
                ),
                array('%s','%s','%s','%s'));


            }
            ?> 