<?php get_header(); ?>

<?php 
  if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
      get_template_part( 'template-parts/content-page' );
    endwhile;
  else:
    echo 'Inga inlägg!';
  endif;
?>

<?php get_footer(); ?>