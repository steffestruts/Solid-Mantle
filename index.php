<?php get_header(); ?>

<?php 
  if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
      get_template_part( 'template-parts/content' );
    endwhile;
  else:
    echo 'Inga inlägg!';
  endif;
?>
<?php $args = array( 'prev_next' => true, 'prev_text' => __('<'), 'next_text' => __('>'), ); ?>
<?php echo paginate_links( $args ); ?>

<?php get_footer(); ?>