<?php

$meta = get_post_meta( get_the_ID(), 'staff_meta', true );

?>

<div class="col2 col3-tablet loop-team">

  <div class="loop-team-image-wrapper">
    <div class="loop-team-image" style="background-image: url(<?php echo get_the_post_thumbnail_url(null, 'medium'); ?>)" ></div>
  </div>

  <h3><?php echo the_title(); ?></h3>

  <p><?php echo $meta['role']; ?></p>

</div>
