<?php

$query = new WP_Query( array(
    'post_type'       => 'torque_staff',
    'posts_per_page'  => -1
));

if ( $query->have_posts() ) {

  ?><div class="row content-loop-team"><?php

  while ( $query->have_posts() ) {
    $query->the_post();

    get_template_part( 'parts/templates/loop', 'team' );
  }

  ?></div><?php
}


wp_reset_postdata();

?>
