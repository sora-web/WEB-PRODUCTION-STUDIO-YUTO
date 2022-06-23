<?php
//headにtitle記述
add_theme_support('title-tag');
function remove_tagline($title)
{
 if (isset($title['tagline'])) {
  unset($title['tagline']);
 }
 return $title;
}
add_filter('document_title_parts', 'remove_tagline');


// css読み込み
function add_stylesheet()
{
 wp_enqueue_style('main', get_template_directory_uri() . '/style.css', array(), '1.0', false);
 wp_enqueue_style('swiper', "https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.0.7/swiper-bundle.css", array('main'), '1.0', false);
};
add_action('wp_enqueue_scripts', 'add_stylesheet');

// js読み込み
function add_script()
{
 // WordPress本体のjquery.jsを読み込まない
 wp_deregister_script('jquery');

 // jQueryの読み込み
 wp_enqueue_script('jquery-js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, true);
 wp_enqueue_script('swiper-js', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.0.7/swiper-bundle.min.js', array('jquery-js'), null, true);
 wp_enqueue_script('anime-js', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js', array('swiper-js'), null, true);
 wp_enqueue_script('cmn-js', get_template_directory_uri() . '/assets/js/script.js', array('anime-js'), null, true);
};
add_action('wp_enqueue_scripts', 'add_script');



// fontの読み込み
function add_google_fonts()
{
 wp_enqueue_style(' add_google_fonts ', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@700&display=swap', false);
}
add_action('wp_enqueue_scripts', 'add_google_fonts');



/*アイキャッチ画像の有効化 */
add_theme_support('post-thumbnails');
add_filter('big_image_size_threshold', '__return_false');


//カスタムメニュー
add_action('init', function () {
 register_nav_menus( //メニュー機能をオンにする
  [
   'global_nav' => 'グローバル', //“メニュー英語名” =>”メニュー名”,
   'contact' => 'コンタクト', //“メニュー英語名” =>”メニュー名”,
  ]
 );
});


//メニューの<li>からID除去
function removeMenuId($id)
{
 return $id = array();
}
add_filter('nav_menu_item_id', 'removeMenuId', 1);

//メニューの<li>からクラス除去
function removeMenuClass($classes)
{
 return $classes = array();
}
add_filter('nav_menu_css_class', 'removeMenuClass', 1, 2);

// wp_nav_menuのliにclass追加
function add_additional_class_on_li($classes, $item, $args)
{
 if (isset($args->add_li_class)) {
  $classes['class'] = $args->add_li_class;
 }
 return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 10, 3);

// WP-PageNaviで2ページめ以降が表示されない時
function adjust_category_paged($query = [])
{
 if (
  isset($query['name'])
  && $query['name'] === 'page'
  && isset($query['page'])
  && isset($query['category_name'])
 ) {
  $query['paged'] = intval($query['page']); // 念のため整数化しておく
  unset($query['name']);
  unset($query['page']);
 }
 return $query;
}
add_filter('request', 'adjust_category_paged');


// フォーム識別子が1032の場合の例
add_action('mwform_enqueue_scripts_mw-wp-form-13', function () {
 wp_dequeue_style('mw-wp-form');
});


add_action("init", function () {
 register_post_type('works', [
  'label' => 'works',
  'public' => true,
  'menu_position' => 5,
  'supports' => ['thumbnail', 'title', 'editor', 'custom-fields'],
  'has_archive' => true,
  'show_in_rest' => true,
 ]);
});
