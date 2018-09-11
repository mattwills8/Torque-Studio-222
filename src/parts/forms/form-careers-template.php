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

    <div class="input-wrapper">
      <label for="tq-name">Name</label>
      <input type="text" name="tq-name" id="tq-name" />
    </div>

    <div class="input-wrapper">
      <label for="tq-email">Email</label>
      <input type="email" name="tq-email" id="tq-email" />
    </div>

    <div class="input-wrapper">
      <label for="tq-interested">Job You're Interested In</label>
      <input type="text" name="tq-interested" id="tq-interested" />
    </div>

    <div class="input-wrapper">
      <label for="tq-state">Current State</label>
      <input type="text" name="tq-state" id="tq-state" />
    </div>

    <div class="input-wrapper">
      <label for="tq-zip">Current Zip</label>
      <input type="text" name="tq-zip" id="tq-zip" />
    </div>

    <div class="input-wrapper">
      <label for="tq-phone">Phone</label>
      <input type="tel" name="tq-phone" id="tq-phone" />
    </div>

    <div class="input-wrapper">
      <label for="tq-intro">Intro About Yourself</label>
      <textarea name="tq-intro" id="tq-intro" ></textarea>
    </div>

    <div class="input-wrapper">
      <div class="file-picker">
        <label for="tq-resume" class="file-picker-label">Resume</label>
        <label for="tq-resume" class="custom-file-picker">Click to Choose a File</label>
        <input type="file" accept=".pdf" name="tq-resume" id="tq-resume" />
      </div>
    </div>

    <button type="submit">Submit</button>
  </form>

</div>
