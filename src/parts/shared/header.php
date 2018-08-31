<?php

// needs to be in loop

$header_style = get_field('header_style');

if ( $header_style && $header_style === 'style_2' ) {

  get_template_part( 'parts/shared/header', 'blue' );
  get_template_part( 'parts/templates/titles/title', 'style-2' );

} else {

  get_template_part( 'parts/shared/header', 'transparent' );
  get_template_part( 'parts/templates/titles/title', 'style-1' );
  
}

?>
