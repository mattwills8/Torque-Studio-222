<?php

if (isset($_POST['tq-contact-form'])) {
  // form was submitted
  try {
    if (
      ! $_POST['tq-name']       ||
      ! $_POST['tq-email']      ||
      ! $_POST['tq-company']    ||
      ! $_POST['tq-state']      ||
      ! $_POST['tq-zip']        ||
      ! $_POST['tq-phone']      ||
      ! $_POST['tq-message']
    ) {
      throw new Exception('All form fields are required');
    }

    if (
      ! isset($_POST['_wpnonce']) ||
      ! wp_verify_nonce( $_POST['_wpnonce'], 'submit_contact_form' )
    ) {
      // couldnt verify nonce
      throw new Exception('Form failed validation');
    }

    // form is validated - send email
    include locate_template( 'parts/forms/form-contact-email.php', false, false );

    $message = array(
      'success' => true,
      'message' => 'Message sent successfully!'
    );

  } catch (Exception $e) {

    $message = array(
      'success' => false,
      'message' => $e->getMessage() !== '' ? $e->getMessage() : 'Something went wrong'
    );
  }
}

include locate_template( 'parts/forms/form-contact-template.php', false, false);

?>
