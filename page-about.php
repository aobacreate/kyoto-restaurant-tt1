<?php
/**
 * front-page.php
 * Kyoto Restaurant トップページ
 */
get_header('plain');
?>

<div class="site-content">
<?php get_template_part( 'template-parts/hero' ); ?>

<?php
$text = get_section_text('about');

get_template_part(
  'template-parts/tagline',
  null,
  [
    'text' => $text,
  ]
);
?>

<div class="about-inner">
  <img
    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/outside.webp"
    alt="外観"
  >
</div>

<?php $about_paragraphs = get_about_description(); ?>

<div class="about-wrapper">
  <div class="about-description">
    <?php foreach ( $about_paragraphs as $paragraph ) : ?>
      <p><?php echo esc_html( $paragraph ); ?></p>
    <?php endforeach; ?>
  </div>
</div>

<div class="about-inner">
  <img
    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/inside.webp"
    alt="内観"
  >
</div>

</div>
<?php get_footer('plain'); ?>


