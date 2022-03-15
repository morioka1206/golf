<?php
function my_setup()
{
  add_theme_support('post-formats'); /* ポストフォーマット */
  add_theme_support('automatic-feed-links'); /* RSSフィード */
  add_theme_support('custom-background'); /* カスタムバックグラウンド */
  add_theme_support('custom-header'); /* カスタムヘッダー */
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption',));
}
add_action('after_setup_theme', 'my_setup');

define('WP_SCSS_ALWAYS_RECOMPILE', true);

// 画像を圧縮しない設定
add_filter('jpeg_quality', function ($arg) {
  return 100;
});

// 画像が大きくてもサイズを小さくしない設定
add_filter('big_image_size_threshold', '__return_false');

function aioseo_disable_term_title_rewrites($disabled)
{
  return true;
}
/* title tag stop All in One SEO Ver.4 */
add_filter('aioseo_disable_title_rewrites', 'aioseo_disable_term_title_rewrites');

// ページネーションのHTMLカスタマイズ 
function custom_pagination_html($template)
{
  $template = '
<nav class="pagination golf-navi" role="navigation">
  <h2 class="screen-reader-text">%2$s</h2>
  %3$s
</nav>';
  return $template;
}
add_filter('navigation_markup_template', 'custom_pagination_html');

// 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true; // リライトを有効にする
    $args['has_archive'] = 'test'; // 任意のスラッグ名
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);
?>

<?php
/**
 * ページネーション出力関数
 * $paged : 現在のページ
 * $pages : 全ページ数
 * $range : 左右に何ページ表示するか
 * $show_only : 1ページしかない時に表示するかどうか
 */
function pagination($pages, $paged, $range = 2, $show_only = false)
{

  $pages = (int) $pages;    //float型で渡ってくるので明示的に int型 へ
  $paged = $paged ?: 1;       //get_query_var('paged')をそのまま投げても大丈夫なように

  //表示テキスト
  $text_first   = "« 最初へ";
  $text_before  = "‹ 前へ";
  $text_next    = "次へ ›";
  $text_last    = "最後へ »";

  if ($show_only && $pages === 1) {
    // １ページのみで表示設定が true の時
    echo '<div class="pagination"><span class="current pager">1</span></div>';
    return;
  }

  if ($pages === 1) return;    // １ページのみで表示設定もない場合

  if (1 !== $pages) {
    //２ページ以上の時
    echo '<div class="pagination"><span class="page_num">Page ', $paged, ' of ', $pages, '</span>';
    if ($paged > $range + 1) {
      // 「最初へ」 の表示
      echo '<a href="', get_pagenum_link(1), '" class="first">', $text_first, '</a>';
    }
    if ($paged > 1) {
      // 「前へ」 の表示
      echo '<a href="', get_pagenum_link($paged - 1), '" class="prev">', $text_before, '</a>';
    }
    for ($i = 1; $i <= $pages; $i++) {

      if ($i <= $paged + $range && $i >= $paged - $range) {
        // $paged +- $range 以内であればページ番号を出力
        if ($paged === $i) {
          echo '<span class="current pager">', $i, '</span>';
        } else {
          echo '<a href="', get_pagenum_link($i), '" class="pager">', $i, '</a>';
        }
      }
    }
    if ($paged < $pages) {
      // 「次へ」 の表示
      echo '<a href="', get_pagenum_link($paged + 1), '" class="next">', $text_next, '</a>';
    }
    if ($paged + $range < $pages) {
      // 「最後へ」 の表示
      echo '<a href="', get_pagenum_link($pages), '" class="last">', $text_last, '</a>';
    }
    echo '</div>';
  }
}
?>