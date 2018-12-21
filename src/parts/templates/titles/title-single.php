<?php

$image_src = get_the_post_thumbnail_url();

?>

<div id="title-single">

  <?php if ($image_src) { ?>
    <div class="title-single-image" style="background-image: url(<?php echo $image_src; ?>);"></div>
  <?php } ?>

  <div class="title-single-title-wrapper">
    <h1><?php echo the_title(); ?></h1>
  </div>

</div>
