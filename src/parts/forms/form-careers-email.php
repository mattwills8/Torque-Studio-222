<?php

// allow html content
function tq_careers_form_set_html_content_type() {
  return 'text/html';
}
add_filter( 'wp_mail_content_type', 'tq_careers_form_set_html_content_type');


ob_start();
?>

<h1>New Job Application</h1>
<p>Name: <?php echo $_POST['tq-name']; ?></p>
<p>Email: <?php echo $_POST['tq-email']; ?></p>
<p>Interested in: <?php echo $_POST['tq-interested']; ?></p>
<p>Current State: <?php echo $_POST['tq-state']; ?></p>
<p>Current Zip: <?php echo $_POST['tq-zip']; ?></p>
<p>Phone: <?php echo $_POST['tq-phone']; ?></p>
<p>Intro: <?php echo $_POST['tq-intro']; ?></p>
<p>Resume (follow link): <?php echo wp_get_attachment_url( $media_id ); ?></p>

<?php
$message = ob_get_clean();
$recipient = get_field('careers_page_application_form', 'option');
$subject = 'New Job Application';
$headers = array('Content-Type: text/html; charset=UTF-8');

// send mail
wp_mail( $recipient, $subject, $message, $headers );

// remove html filter to avoid conflicts
remove_filter( 'wp_mail_content_type', 'tq_careers_form_set_html_content_type');

?>
