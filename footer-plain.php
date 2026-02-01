<?php $ag_texts = get_footer_text(); ?>

<footer class="kr-footer">
  <div class="kr-footer-inner">
    <?php foreach ( $ag_texts as $ag_text ) :
      $title = esc_html( $ag_text['title'] );
      $lines = $ag_text['lines'];
    ?>
      <div class="kr-footer-block">
        <h3 class="kr-footer-title"><?php echo $title; ?></h3>

        <div class="kr-footer-info">
          <?php foreach ( $lines as $raw_line ) :
            $line = esc_html( $raw_line );
          ?>
            <div class="kr-footer-line"><?php echo $line; ?></div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <div class="kr-footer-logo"><?php bloginfo( 'name' ); ?></div>
</footer>

<?php wp_footer(); ?>
</body>
</html>