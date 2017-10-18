<?php
  /*
    Template Name: Formate
  */

  //response generation function

  $response = "";

  //function to generate response
  function my_contact_form_generate_response($type, $message){

    global $response;

    if($type == "success") $response = "<div class='alert alert-success'>{$message}</div>";
    else $response = "<div class='alert alert-danger'>{$message}</div>";

  }

  //response messages
  $missing_content = "Bitte alle Felder ausfüllen.";
  $email_invalid   = "Die E-Mail Adresse ist ungültig.";
  $message_unsent  = "Die Nachricht wurde nicht versandt. Bitte versuch es nochmal.";
  $message_sent    = "Danke! Deine Nachricht wurde versandt.";

  //user posted variables
  $name = $_POST['message_name'];
  $email = $_POST['message_email'];
  $tel = $_POST['message_tel'];
  $textMessage = $_POST['message_text'];
  $human = $_POST['message_human'];
  
  function wpdocs_set_html_mail_content_type() {
    return 'text/html';
    }

  // Make E-Mail accept HTML Tags
  add_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type' );

  //php mailer variables
  $to = get_option('admin_email');
  $subject = "Kontakt Anfrage von ".get_bloginfo('name');
  $headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";
  $message = '<h2>Kontaktanfrage</h2>
          <h3>Name</h3><p>'.$name.'</p>
          <h3>Email Adresse</h3><p>'.$email.'</p>
          <h3>Telefonnummer</h3><p>'.$tel.'</p>
          <h3>Nachricht</h3><p>'.$textMessage.'</p>
        ';
  


if(filter_has_var(INPUT_POST, 'submit')){
      //validate email
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        my_contact_form_generate_response("error", $email_invalid);
      else //email is valid
      {
        //validate presence of name and message
        if(empty($name) || empty($message) || empty($tel)){
          my_contact_form_generate_response("error", $missing_content);
        }
        else //ready to go!
        {
          $sent = wp_mail($to, $subject, $message, $headers);
          if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
          else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
        }
      }
}

 // Reset content-type to avoid conflicts -- https://core.trac.wordpress.org/ticket/23578
    remove_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type' );

?>

<?php get_header(); ?>

<?php if ( get_field( 'banner') ) { ?>
  <style>
    .jumbotron {
      background-image: url( <?php the_field( 'banner' ); ?> );
    }
  </style>
<?php } ?>

<div class="jumbotron jumbotron-fluid"></div>

<section id="kontakt" class="container">
  
  <h1 class="text-center">Kontakt</h1>

      <?php while ( have_posts() ) : the_post(); ?>

              <?php the_content(); ?>


              <section id="kontakt" class="container">
                <?php echo $response; ?>
                <form action="<?php the_permalink(); ?>" method="post">
                  <label for="name" class="sr-only">Name</label>
                  <input type="text" name="message_name" placeholder="Name:" value="<?php echo esc_attr($_POST['message_name']); ?>">

                  <label for="message_email" class="sr-only">Email</label>
                  <input type="text" name="message_email" placeholder="Email:" value="<?php echo esc_attr($_POST['message_email']); ?>">
                  
                  <label for="message_tel" class="sr-only">Telefonnummer</label>
                  <input type="text" name="message_tel" placeholder="Telefonnummer:" value="<?php echo esc_attr($_POST['message_tel']); ?>">
                  
                  <label for="message_text" class="sr-only">Nachricht</label>
                  <textarea type="text" name="message_text" placeholder="Nachricht:"><?php echo esc_textarea($_POST['message_text']); ?></textarea>
                  <label for="submit" class="sr-only">Abschicken</label>
                  <input name ="submit" type="submit" class="clickable" value="Abschicken">
                </form>
              </section>

      <?php endwhile; // end of the loop. ?>
  
</section>

<div id="contact-icons" class="container-fluid">

  <?php get_template_part( 'template-parts/content', 'contact' ); ?>

  <?php get_template_part( 'template-parts/content', 'legal' ); ?>
  
</div>

<?php get_footer(); ?>