<?php

$id = $s222_loop_post_id ?? false;
$image = $s222_loop_post_image ?? false;
$title = $s222_loop_post_title ?? false;
$content = $s222_loop_post_content ?? false;
$cta_link = $s222_loop_post_cta_link ?? false;

?>

<div id="<?php echo $id || ''; ?>" class="row s222-loop-post">

  <?php if ($image) { ?>
    <img class="col1 loop-post-section-image" src="<?php echo $image; ?>" />
    <div class="loop-post-section-image-desktop" style="background-image: url(<?php echo $image; ?>)" ></div>
  <?php } ?>

  <div class="col1 loop-post-content-wrapper">

    <?php if ($title) { ?>
      <h3><?php echo $title; ?></h3>
    <?php } ?>

    <?php if ($content) { ?>
      <div class="loop-post-content"><?php echo $content; ?></div>
    <?php } ?>

    <?php if ($cta_link) { ?>
      <a href="<?php echo $cta_link['url']; ?>" target="<?php echo $cta_link['target']; ?>">
        <button><?php echo $cta_link['title']; ?></button>
      </a>
    <?php } ?>

  </div>

</div>
