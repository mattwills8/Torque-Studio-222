<?php

$title = get_field('secondary_footer_cta_title');
$content = get_field('secondary_footer_cta_content');
$cta_text = get_field('secondary_footer_cta_text');
$cta_link = get_field('secondary_footer_cta_link');

?>

<div id="footer-cta-section-secondary" class="row">

    <?php if ($title) { ?>
      <h2><?php echo $title; ?></h2>
    <?php } ?>

    <?php if ($content) { ?>
      <div class="footer-cta-content"><?php echo $content; ?></div>
    <?php } ?>

    <?php if ($cta_text && $cta_link) { ?>
      <a href="<?php echo $cta_link; ?>">
        <button><?php echo $cta_text; ?></button>
      </a>
    <?php } ?>

</div>
