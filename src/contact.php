<?php
/**
 * Template Name: Contact
 *
 * @package torque
 */
?>
<?php

get_template_part( 'parts/shared/html-header' );

if ( have_posts() ) while ( have_posts() ) : the_post();

  $show_form = get_field('show_contact_form');

  get_template_part( 'parts/shared/header' );

?>

  <main>

      <?php get_template_part( 'parts/templates/content', 'contact' ); ?>

  </main>

  <?php
  if ($show_form) {
    get_template_part( 'parts/forms/form', 'contact' );
  }

  get_template_part(  'parts/shared/footer' );

endwhile;

get_template_part(  'parts/shared/html-footer' );

?>
