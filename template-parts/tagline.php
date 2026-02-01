<?php
/**
 * Tagline section
 */

$text = $args['text'] ?? null;

if ( ! $text ) {
  return;
}
?>

<section class="tagline">

  <?php if ( ! empty( $text['title'] ) ) : ?>
    <div class="taglines">
      <?php foreach ( $text['title'] as $line ) : ?>
        <div><?php echo esc_html( $line ); ?></div>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>

  <?php if ( ! empty( $text['subtitle'] ) ) : ?>
    <div class="taglines">
      <?php foreach ( $text['subtitle'] as $line ) : ?>
        <div><?php echo esc_html( $line ); ?></div>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>

</section>