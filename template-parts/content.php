<?php 
  if ( has_post_thumbnail() ) {
    the_post_thumbnail('portfolio-thumb');
  }
?>
<?php $category = get_the_category( $id ); echo $category[0]->name ?>
<?php the_time('j F')?>
<?php the_title(); ?>