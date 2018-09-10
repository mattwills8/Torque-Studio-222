<?php

$query = new WP_Query( array(
    'post_type'       => 'torque_career',
    'posts_per_page'  => -1
));

if ( $query->have_posts() ) {

  ?><div class="row content-loop-careers"><?php

  while ( $query->have_posts() ) {
    $query->the_post();

    get_template_part( 'parts/templates/loop', 'careers' );
  }

  ?></div><?php
}


wp_reset_postdata();

?>
