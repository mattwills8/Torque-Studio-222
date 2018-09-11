<div id="careers-form">
  <h3>Apply Today</h3>

  <?php if (isset($message)) { ?>
    <div>
      <?php echo $message['message']; ?>
    </div>
  <?php } ?>

  <form method="post" action="">

    <?php echo wp_nonce_field( 'submit_careers_form' ); ?>

    <?php
    // this hidden input is important for us to know
    // if the form has been submitted yet
    // so we can check that all fields are filled
    ?>
    <input type="hidden" name="tq-careers-form" />

    <label for="tq-name">Name</label>
    <input type="text" name="tq-name" id="tq-name" />

    <label for="tq-email">Email</label>
    <input type="email" name="tq-email" id="tq-email" />

    <label for="tq-interested">Job You're Interested In</label>
    <input type="text" name="tq-interested" id="tq-interested" />

    <label for="tq-state">Current State</label>
    <input type="text" name="tq-state" id="tq-state" />

    <label for="tq-zip">Current Zip</label>
    <input type="text" name="tq-zip" id="tq-zip" />

    <label for="tq-phone">Phone</label>
    <input type="tel" name="tq-phone" id="tq-phone" />

    <label for="tq-intro">Intro About Yourself</label>
    <textarea name="tq-intro" id="tq-intro" ></textarea>

    <label for="tq-resume">Resume</label>
    <input type="file" accept=".pdf" name="tq-resume" id="tq-resume" />

    <button type="submit">Submit</button>
  </form>

</div>
