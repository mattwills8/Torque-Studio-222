<div id="contact-form" class="s222-form">

  <?php if (isset($message)) {
    $success_class = ! $message['success'] ? 'error' : '';
    ?>
    <div class="form-message <?php echo $success_class; ?>">
      <?php echo $message['message']; ?>
    </div>
  <?php } ?>

  <form method="post" action="#contact-form" >

    <?php echo wp_nonce_field( 'submit_contact_form' ); ?>

    <?php
    // this hidden input is important for us to know
    // if the form has been submitted yet
    // so we can check that all fields are filled
    ?>
    <input type="hidden" name="tq-contact-form" />

    <div class="input-wrapper">
      <label for="tq-name">Name</label>
      <input type="text" name="tq-name" id="tq-name" />
    </div>

    <div class="input-wrapper">
      <label for="tq-email">Email</label>
      <input type="email" name="tq-email" id="tq-email" />
    </div>

    <div class="input-wrapper">
      <label for="tq-company">Company</label>
      <input type="text" name="tq-company" id="tq-company" />
    </div>

    <div class="input-wrapper">
      <label for="tq-state">State</label>
      <input type="text" name="tq-state" id="tq-state" />
    </div>

    <div class="input-wrapper">
      <label for="tq-zip">Zip</label>
      <input type="text" name="tq-zip" id="tq-zip" />
    </div>

    <div class="input-wrapper">
      <label for="tq-phone">Phone</label>
      <input type="tel" name="tq-phone" id="tq-phone" />
    </div>

    <div class="input-wrapper">
      <label for="tq-message">Message</label>
      <textarea name="tq-message" id="tq-message" ></textarea>
    </div>

    <div class="input-wrapper" >
      <label></label>
      <?php echo do_shortcode('[torque_recaptcha]'); ?>
    </div>

    <button type="submit">Send</button>
  </form>

</div>
