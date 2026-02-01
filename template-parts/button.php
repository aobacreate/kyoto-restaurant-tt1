<?php
/**
 * button section
*/

$title = $args['title'] ?? null;
$subtitle = $args['subtitle'] ?? null;
$url = $args['url'] ?? null;
?>

<a href="<?php echo esc_url( home_url($url) ); ?>" class="menu-button">
  <div class="title"><?php echo esc_html( $title ); ?></div>
  <div class="subtitle"><?php echo esc_html( $subtitle ); ?></div>
</a>


 