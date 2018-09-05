<?php

$image = get_field('footer_image');
$title = get_field('footer_title');
$content = get_field('footer_content');
$cta_link = get_field('footer_cta_link');

?>

<div id="footer-cta-section" class="row">

  <?php if ($image) { ?>
    <img class="col1 footer-cta-section-image" src="<?php echo $image; ?>" />
    <div class="footer-cta-section-image-desktop" style="background-image: url(<?php echo $image; ?>)" ></div>
  <?php } ?>

  <div class="col1 footer-cta-content-wrapper">

    <?php if ($title) { ?>
      <h3><?php echo $title; ?></h3>
    <?php } ?>

    <?php if ($content) { ?>
      <div class="footer-cta-content"><?php echo $content; ?></div>
    <?php } ?>

    <?php if ($cta_link) { ?>
      <a href="<?php echo $cta_link['url']; ?>" target="<?php echo $cta_link['target']; ?>">
        <button><?php echo $cta_link['title']; ?></button>
      </a>
    <?php } ?>

  </div>

</div>
