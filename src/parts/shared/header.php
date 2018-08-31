<?php

// needs to be in loop

$header_style = get_field('header_style');

if ( $header_style && $header_style === 'style_2' ) {
  get_template_part( 'parts/shared/header', 'blue' );

} else {
  get_template_part( 'parts/shared/header', 'transparent' );
}

?>
