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
$text = get_section_text('home');

get_template_part(
  'template-parts/tagline',
  null,
  [
    'text' => $text,
  ]
);

get_template_part(
  'template-parts/button',
  null,
  [
    'title' => 'MENU',
    'subtitle' => 'お品書き',
    'url' => '/menu-list'
  ]
);

get_template_part(
  'template-parts/button',
  null,
  [
    'title' => 'ABOUT',
    'subtitle' => '店のご案内',
    'url' => '/about'
  ]
);
?>

<?php
$news_items = get_news_text();
?>

<section class="news">
  <div class="title">News</div>
  <div class="subtitle">お知らせ</div>
  <table class="news-table">
    <tbody>
      <?php foreach ( $news_items as $item ) : ?>
        <tr>
          <td class="news-date">
            <?php echo esc_html( $item['date'] ); ?>
          </td>
          <td class="news-text">
            <?php echo esc_html( $item['text'] ); ?>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</section>


</div>
<?php get_footer('plain'); ?>


