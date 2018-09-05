<?php

$query = new WP_Query( array(
    'cat'       => '8'
));

if ( $query->have_posts() ) {
  while ( $query->have_posts() ) {
    $query->the_post();

    $s222_loop_post_image = get_the_post_thumbnail_url(null, 'original');
    $s222_loop_post_title = get_the_title();
    $s222_loop_post_content = get_the_content();

    include locate_template( 'parts/templates/loop-post.php', false, false );
  }
}


wp_reset_postdata();

?>
