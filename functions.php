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
