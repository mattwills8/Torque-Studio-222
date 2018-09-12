<?php

get_template_part('parts/templates/content', 'page');


$title = get_field('contact_footer_title');
$content = get_field('contact_footer_content');
$cta = get_field('contact_footer_cta');

?>

<div id="contact-page-cta">

  <?php if ($title) { ?>
    <h3><?php echo $title; ?></h3>
  <?php } ?>

  <?php if ($content) { ?>
    <div><?php echo $content; ?></div>
  <?php } ?>

  <?php if ($cta) { ?>
    <a href="<?php echo $cta['url']; ?>" target="<?php echo $cta['target']; ?>">
      <button><?php echo $cta['title']; ?></button>
    </a>
  <?php } ?>

</div>
