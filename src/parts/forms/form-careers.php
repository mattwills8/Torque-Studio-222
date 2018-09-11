<?php

if (isset($_POST['tq-careers-form'])) {
  // form was submitted
  try {
    if (
      ! $_POST['tq-name']       ||
      ! $_POST['tq-email']      ||
      ! $_POST['tq-interested'] ||
      ! $_POST['tq-state']      ||
      ! $_POST['tq-zip']        ||
      ! $_POST['tq-phone']      ||
      ! $_POST['tq-intro']
    ) {
      throw new Exception('All form fields are required');
    }

    if (
      ! isset($_POST['_wpnonce']) ||
      ! wp_verify_nonce( $_POST['_wpnonce'], 'submit_careers_form' )
    ) {
      // couldnt verify nonce
      throw new Exception('Couldnt validate form');
    }

    if ( ! class_exists('Torque_Job_Application_CPT') ) {
      // job applications cpt failed to load
      throw new Exception('Couldnt find plugin class');
    }

    $application_id = Torque_Job_Application_CPT::save_application( $_POST['tq-name'], $_POST );

    if ( ! $application_id ) {
      throw new Exception();
    } else {

      // TODO: add email handling here and add form validation

      $message = array(
        'success' => false,
        'message' => 'Thank you for your application. Your application ID is '.$application_id
      );
    }

  } catch (Exception $e) {

    $message = array(
      'success' => false,
      'message' => $e->getMessage() !== '' ? $e->getMessage() : 'Something went wrong'
    );
  }
}

include locate_template( 'parts/forms/form-careers-template.php', false, false);

?>
