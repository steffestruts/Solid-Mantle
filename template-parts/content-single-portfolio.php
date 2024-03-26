<article class="portfolio-single">
<?php 
  if ( has_post_thumbnail() ) {
    the_post_thumbnail('portfolio-single');
  }
?>

<?php $category = get_the_category( $id ); echo $category[0]->name ?>

<?php
  $posttags = get_the_tags();
  if ($posttags) {
    foreach($posttags as $tag) {
      echo '<span>' . $tag->name . '</span>';
    }
  }
?>

<?php 
  $thumb_full = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
  if (empty ($thumb_full) ) {
    echo '';
  }
  else {
    echo '<a href="' . esc_url($thumb_full) . '">+</a>';
  }
?>

<div class="portfolio-content">
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>

<?php 
  $external = webpage_get_meta( 'webpage_url' );
  if (empty ($external) ) {
    echo '';
  }
  else {
    echo '<a href="' . esc_url($external) . '" target="_blank" class="btn external">Besök webbplatsen</a>';
  }
?>
</div>

</article>