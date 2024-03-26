<div class="portfolio-item">
<?php 
  if ( has_post_thumbnail() ) {
    the_post_thumbnail('portfolio-thumb');
  }
?>
<?php $category = get_the_category( $id ); echo $category[0]->name ?>
<h3><?php the_title(); ?></h3>
<a href="<?php the_permalink(); ?>">Läs mer</a>
</div>