<?php

$url = get_the_post_thumbnail_url();
$tagline = get_field('tagline');

?>

<div class="title-style-1" style="background-image: url(<?php echo $url; ?>);">

  <div class="title-content-wrapper">

    <h1><?php echo the_title(); ?></h1>

    <?php if ( $tagline ) { ?>

      <h3><?php echo $tagline; ?></h3>

    <?php } ?>

    <div class="body-white"><?php echo the_excerpt(); ?></div>

    <div class="studio-mark studio-mark-white"></div>

  </div>

</div>
