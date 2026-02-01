<?php
/**
 * page-menu.php
 * Kyoto Restaurant menu page
 */
get_header('plain');
?>

<div class="site-content menu-all">
<?php get_template_part( 'template-parts/hero' ); ?>

<?php
$text = get_section_text('menu');

get_template_part(
  'template-parts/tagline',
  null,
  [
    'text' => $text,
  ]
);
?>

<?php
$menu_sections = [
  '季節限定' => 'seasonal',
  'ランチ'   => 'lunch',
  'ディナー' => 'dinner',
];

foreach ($menu_sections as $section_label => $meta_value) :

  $args = [
    'post_type'      => 'menu',
    'posts_per_page' => -1,
    'meta_query'     => [
      [
        'key'   => 'menu_category',
        'value' => $meta_value,
      ],
    ],
    'orderby' => 'ID',
    'order'   => 'ASC',
  ];

  $query = new WP_Query($args);
?>

  <?php if ($query->have_posts()): ?>
    <section class="menu-section">
      <h2 class="menu-section-title"><?php echo esc_html($section_label); ?></h2>

      <div class="menu-grid">
        <?php while ($query->have_posts()): $query->the_post(); ?>
          <div class="menu-item">
            <div class="image-menu-square">
              <?php
                $img = get_field('menu_image');
                if ($img) {
                  echo wp_get_attachment_image($img['ID'], 'medium');
                }
              ?>
            </div>

            <h3 class="menu-name"><?php the_field('menu_name'); ?></h3>

            <?php if (get_field('description')): ?>
              <p class="menu-description"><?php the_field('description'); ?></p>
            <?php endif; ?>

            <?php if (get_field('price')): ?>
              <span class="menu-price"><?php the_field('price'); ?></span>
            <?php endif; ?>
          </div>
        <?php endwhile; ?>
      </div>
    </section>
  <?php endif; wp_reset_postdata(); ?>

<?php endforeach; ?>

</div>
<?php get_footer('plain'); ?>