<?php get_header(); ?>

<div class="wrapper">
<a href="javascript:history.go(-1)" onMouseOver="self.status=document.referrer;return true" class="btn">Gå tillbaka</a>
<?php 
  if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
      get_template_part( 'template-parts/content-single-portfolio' );
    endwhile;
  else:
    echo 'Inga inlägg!';
  endif;
?>
</div>

<?php get_footer(); ?>