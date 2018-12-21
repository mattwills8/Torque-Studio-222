<?php

$query = new WP_Query( array(
    'category__and'       => array(3,7),
    'posts_per_page'  => -1
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
      'title'     => 'Learn More',
      'target'    => '_blank'
    );
    $s222_loop_post_project_location = get_field('location');

    include locate_template( 'parts/templates/loop-post.php', false, false );
  }

  ?></div><?php

}


wp_reset_postdata();

?>
