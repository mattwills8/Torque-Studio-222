<?php

$query = new WP_Query( array(
    'cat'       => 9,
    'paged'     => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1,
));

if ( $query->have_posts() ) {

  ?><div class="row"><?php

  while ( $query->have_posts() ) {
    $query->the_post();

    $s222_loop_post_image = get_the_post_thumbnail_url(null, 'original');
    $s222_loop_post_title = get_the_title();
    $s222_loop_post_content = get_the_excerpt();
    $s222_loop_post_cta_link = array(
      'url'       => get_the_permalink(),
      'title'     => 'Read More',
      'target'    => '_blank'
    );

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
