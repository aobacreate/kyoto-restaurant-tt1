<?php
/**
 * Hero section
 */
?>

<header class="hero">
  <h1 class="hero-title">
    <a href="<?php echo esc_url( home_url('/') ); ?>">
      <?php bloginfo( 'name' ); ?>
    </a>
  </h1>
  
  <div class="hero-inner">
    <img
      src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero.webp"
      alt="<?php bloginfo( 'name' ); ?>"
    >
  </div>
</header>