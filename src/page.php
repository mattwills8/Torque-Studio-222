<?php
/**
 * The template for displaying all pages.
 *
 * @package torque
 */
?>
<?php

get_template_part( 'parts/shared/html-header' );

if ( have_posts() ) while ( have_posts() ) : the_post();

  get_template_part( 'parts/shared/header' );

?>

  <main>

  		<?php get_template_part( 'parts/templates/content', $post->post_type ); ?>

  </main>

<?php
endwhile;

TQ::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) );

?>
