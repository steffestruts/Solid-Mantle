<?php get_header(); ?>

<nav id="menu-main">
  <?php 
    $args = array( 'theme_location' => 'primary' );
    wp_nav_menu( $args ); 
  ?>
</nav><!-- /#menu-main -->
<div id="menu-trigger">
  <span class="hamburger">Meny</span>
</div>
<div id="menu-mobile"></div>

<main>

<section class="about">
<a name="about">
<h2>Om mig</h2>
<?php 
  // WP_Query arguments
  $args = array (
    'post_type'=>'page',
    'page_id' => 'about',
  );

  // The Query
  $about = new WP_Query( $args );

  // The Loop
  if ( $about->have_posts() ) : 
    while ( $about->have_posts() ) : $about->the_post();
      if ( has_post_thumbnail() ) {
        the_post_thumbnail('full');
      }
      the_content();
    endwhile;
  else:
    echo 'Inget om dig.';
  endif;

  // Restore original Post Data
  wp_reset_postdata();
?>
</section>

<section class="portfolio">
<a name="portfolio">
<h2>Portfölj</h2>
<div class="portfolio-grid">
<?php
  // WP_Query arguments
  $args = array (
    'nopaging' => true,
    'posts_per_page' => 6,
    'post_type' => 'portfolio'
  );

  // The Query
  $portfolio = new WP_Query( $args );
  
  // The Loop
  if ( $portfolio->have_posts() ) : 
    while ( $portfolio->have_posts() ) : $portfolio->the_post(); 
      get_template_part( 'template-parts/content-portfolio' );
    endwhile;
  else:
    echo 'Inget att visa just nu.';
  endif;

  // Restore original Post Data
  wp_reset_postdata();
?>
</div>
</section>

<section class="contact">
<a name="contact">
<h2>Kontakt</h2>
<?php
 $option_xtr_options = get_option( 'option_xtr_option_name' );
 $dribbble = $option_xtr_options['dribbble_0'];
 $github = $option_xtr_options['github_1'];
 $pinterest = $option_xtr_options['pinterest_2'];
 $e_mail = $option_xtr_options['e_mail_3'];
?>
</section>

</main>

<?php get_footer(); ?>