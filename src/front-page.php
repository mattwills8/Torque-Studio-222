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

  		<?php get_template_part( 'parts/templates/content-loop', 'projects' ); ?>

  </main>

<?php

  get_template_part(  'parts/shared/footer' );

endwhile;

get_template_part(  'parts/shared/html-footer' );

?>
