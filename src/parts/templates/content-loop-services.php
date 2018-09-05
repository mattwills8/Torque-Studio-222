<?php

$query = new WP_Query( array(
    'cat'       => 8,
    'paged'     => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1,
));

if ( $query->have_posts() ) {

  ?><div class="row"><?php

  while ( $query->have_posts() ) {
    $query->the_post();

    $s222_loop_post_image = get_the_post_thumbnail_url(null, 'original');
    $s222_loop_post_title = get_the_title();
    $s222_loop_post_content = get_the_content();

    include locate_template( 'parts/templates/loop-post.php', false, false );
  }

  ?></div><?php

  $temp_query = $wp_query;
  $wp_query   = NULL;
  $wp_query   = $query;

  get_template_part( 'parts/elements/pagination/pagination', 'buttons' );

  $wp_query = NULL;
  $wp_query = $temp_query;
}


wp_reset_postdata();

?>
