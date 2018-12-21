<?php
/**
 * The template for displaying single posts.
 *
 * @package torque
 */
?>
<?php

$cats = get_the_category();

$is_project = false;
foreach ($cats as $cat) {
  if ($cat->slug === 'projects') {
    $is_project = true;
  }
}

$location = get_field('location');


get_template_part( 'parts/shared/html-header' );

if ( have_posts() ) while ( have_posts() ) : the_post();

  get_template_part( 'parts/shared/header', 'blue' );

  get_template_part( 'parts/templates/titles/title', 'single' );

?>

  <main>

      <?php if ($location) { ?>
        <p class="loop-post-project-location"><?php echo $location; ?></p>
      <?php } ?>

  		<?php get_template_part( 'parts/templates/content', 'single' ); ?>


      <?php if ($is_project) { ?>
        <a href="/projects">
          <button>View All Projects</button>
        </a>

      <?php } else { ?>
        <a href="/blog">
          <button>View All Posts</button>
        </a>
      <?php }?>



  </main>

<?php

  get_template_part(  'parts/shared/footer' );

endwhile;

get_template_part(  'parts/shared/html-footer' );

?>
