<?php
/**
 * The template for displaying 404 pages
 *
 * @package torque
 */
?>
<?php

get_template_part( 'parts/shared/html-header' );

get_template_part( 'parts/shared/header', 'blue' );

get_template_part( 'parts/templates/titles/title', '404' );

?>

  <main>

    <h2>Page Not Found</h2>

  </main>

<?php

get_template_part(  'parts/shared/footer' );

get_template_part(  'parts/shared/html-footer' );

?>
