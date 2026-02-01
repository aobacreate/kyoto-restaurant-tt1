<?php
/**
 * Kyoto Restaurant (TT1 Child) functions
 */
add_action('wp_enqueue_scripts', function () {

  // 親テーマ Twenty Twenty-One
  wp_enqueue_style(
    'twentytwentyone-style',
    get_template_directory_uri() . '/style.css',
    [],
    wp_get_theme( 'twentytwentyone' )->get( 'Version' )
  );

  // 子テーマ Kyoto Restaurant（base）
  wp_enqueue_style(
    'kyoto-restaurant-style',
    get_stylesheet_directory_uri() . '/style.css',
    [ 'twentytwentyone-style' ],
    filemtime( get_stylesheet_directory() . '/style.css' )
  );

  // hero
  wp_enqueue_style(
    'kyoto-restaurant-hero',
    get_stylesheet_directory_uri() . '/assets/css/hero.css',
    [ 'kyoto-restaurant-style' ],
    filemtime( get_stylesheet_directory() . '/assets/css/hero.css' )
  );

  // tagline
  wp_enqueue_style(
    'kyoto-restaurant-tagline',
    get_stylesheet_directory_uri() . '/assets/css/tagline.css',
    [ 'kyoto-restaurant-style' ],
    filemtime( get_stylesheet_directory() . '/assets/css/tagline.css' )
  );

    // menubutton
  wp_enqueue_style(
    'kyoto-restaurant-menubutton',
    get_stylesheet_directory_uri() . '/assets/css/menubutton.css',
    [ 'kyoto-restaurant-style' ],
    filemtime( get_stylesheet_directory() . '/assets/css/menubutton.css' )
  );

  wp_enqueue_style(
    'kyoto-restaurant-footer',
    get_stylesheet_directory_uri() . '/assets/css/footer.css',
    [ 'kyoto-restaurant-style' ],
    filemtime( get_stylesheet_directory() . '/assets/css/footer.css' )
  );

  wp_enqueue_style(
    'kyoto-restaurant-menu',
    get_stylesheet_directory_uri() . '/assets/css/menu.css',
    [ 'kyoto-restaurant-style' ],
    filemtime( get_stylesheet_directory() . '/assets/css/menu.css' )
  );

  wp_enqueue_style(
    'kyoto-restaurant-about',
    get_stylesheet_directory_uri() . '/assets/css/about.css',
    [ 'kyoto-restaurant-style' ],
    filemtime( get_stylesheet_directory() . '/assets/css/about.css' )
  );

  wp_enqueue_style(
    'kyoto-restaurant-news',
    get_stylesheet_directory_uri() . '/assets/css/news.css',
    [ 'kyoto-restaurant-style' ],
    filemtime( get_stylesheet_directory() . '/assets/css/news.css' )
  );
});

function get_home_text() {
  return [
    'title' => [
      '京都で味わう、',
      '季節を映した一皿。',
    ],
    'subtitle' => [
      '伝統と今が調和する、',
      '京都のレストランをご紹介します。',
    ],
  ];
}

function get_menu_text() {
  return [
    'title' => [
      '季節の素材を生かした、',
      '京都らしい味わいを揃えました。',
    ],
   'subtitle' => [
      '旬の食材を中心に、',
      '一皿一皿、丁寧にお作りしています。',
    ],
  ];
}

function get_about_text() {
  return [
    'title' => [
      '季節と向き合う',
      '静かな一皿',
    ],
   'subtitle' => [
      '京都の食材を中心に',
      'その日の状態を見極めながら仕立てています。',
    ],
  ];
}

function get_error_text() {
  return [
    'title' => ['ページが見つかりません。'],
    'subtitle' => ['ページは移動したか、存在しないようです。'],
  ];
}

function get_about_description() {
  return [
    '京都の町に静かに佇む小さな料理屋です。',
    '旬の食材と向き合い、余計な手を加えず、素材本来の味わいを大切にしています。',
    '特別な日も、何気ない一日も、心を落ち着けて過ごせる時間をお届けできれば幸いです。',
  ];
}

function get_news_text() {
  return [
    [
      'date' => '2026.02.01',
      'text' => '2月は水曜日を定休日とします。',
    ],
    [
      'date' => '2026.01.20',
      'text' => '季節限定メニューを追加しました。',
    ],
    [
      'date' => '2025.12.28',
      'text' => '年末年始の営業について。',
    ],
  ];
}

function get_section_text($category) {
  $map = [
    'home'              => 'get_home_text',
    'error'             => 'get_error_text',
    'menu'              => 'get_menu_text',
    'about'             => 'get_about_text'
  ];

  // カテゴリ指定あり
  if ( $category && isset( $map[ $category ] ) ) {
    return call_user_func( $map[ $category ] );
  }

  return [
  'title'    => [],
  'subtitle' => [],
  ];
}

function get_footer_text() {
  return [
    [
      'title' => 'Location',
      'lines' => [
        'Kyoto, Higashiyama-ku',
        'Near Yasaka Shrine',
      ],
    ],
    [
      'title' => 'Hours',
      'lines' => [
        'Tue–Sun',
        '11:30–15:00 / 17:30–21:00',
        'Closed on Monday',
      ],
    ],
    [
      'title' => 'Contact',
      'lines' => [
        'info@kyoto-restaurant.jp',
        '075-000-0000',
      ],
    ],
  ];
}
