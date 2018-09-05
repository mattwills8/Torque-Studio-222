<?php

$s222_loop_post_id = "footer-cta-section";
$s222_loop_post_image = get_field('footer_image');
$s222_loop_post_title = get_field('footer_title');
$s222_loop_post_content = get_field('footer_content');
$s222_loop_post_cta_link = get_field('footer_cta_link');

include locate_template( 'parts/templates/loop-post.php', false, false );

?>
