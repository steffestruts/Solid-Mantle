<?php 
  if ( has_post_thumbnail() ) {
    the_post_thumbnail('portfolio-thumb');
  }
?>
<?php the_title(); ?>
<?php the_content(); ?>