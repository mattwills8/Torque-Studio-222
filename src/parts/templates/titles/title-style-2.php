<?php

$url = get_the_post_thumbnail_url();
$tagline = get_field('tagline');

?>

<div class="s222-title-area title-style-2">

  <div class="title-content-wrapper">

    <h1><?php echo the_title(); ?></h1>

    <?php if ( $tagline ) { ?>

      <h3><?php echo $tagline; ?></h3>

    <?php } ?>

    <div class="excerpt"><?php echo the_excerpt(); ?></div>

    <div class="studio-mark studio-mark-grey"></div>

  </div>

</div>
