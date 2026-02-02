<?php
/**
 * 404.php
 */
get_header('plain');
?>

<div class="site-content">
<?php get_template_part( 'template-parts/hero' ); ?>

  <?php
  $error_text = get_section_text('error');

  get_template_part(
    'template-parts/tagline',
    null,
    [
      'text' => $error_text,
    ]
  );
  ?>

</div>
<?php get_footer('plain'); ?>