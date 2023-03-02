<?php

//テーマサポート
add_theme_support('menus');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

//カスタム投稿タイプのサムネイルを有効化
register_post_type(
    'news',
    array(
        'supports' => array('title', 'thumbnail', 'editor')
    )
);

//Gutenberg　デフォルトスタイルを有効化
add_action('after_setup_theme', 'nxw_setup_theme');
function nxw_setup_theme()
{
    add_theme_support('wp-block-styles');
}

//Gutenberg　幅広・全幅の対応
add_theme_support('align-wide');

//css
function hyd_style()
{
    if (!is_main_site()) {
        //0624 子サイト用の条件分岐追加
        wp_enqueue_style('hyd_common', get_template_directory_uri() . '/css/common.css', array(), '1.0.0');
        wp_enqueue_style('archive', get_template_directory_uri() . '/css/archive.css', array(), '1.0.0');
        wp_enqueue_style('page', get_template_directory_uri() . '/css/page.css', array(), '1.0.0');
        wp_enqueue_style('page_3', get_template_directory_uri() . '/css/page_3.css', array(), '1.0.0');
        wp_enqueue_style('lightbox', get_template_directory_uri() . '/css/lightbox.css', array(), '1.0.0');
    } elseif (is_front_page() || is_home()) {
        //0607 トップページ用の条件分岐追加
        wp_enqueue_style('top', get_template_directory_uri() . '/css/top.css', array(), '1.0.0');
        wp_enqueue_style('hyd_common', get_template_directory_uri() . '/css/common.css', array(), '1.0.0');
    } else {
        wp_enqueue_style('hyd_common', get_template_directory_uri() . '/css/common.css', array(), '1.0.0');
        wp_enqueue_style('page', get_template_directory_uri() . '/css/page.css', array(), '1.0.0');
        wp_enqueue_style('page_2', get_template_directory_uri() . '/css/page_2.css', array(), '1.0.0');
        wp_enqueue_style('page_3', get_template_directory_uri() . '/css/page_3.css', array(), '1.0.0');
        wp_enqueue_style('archive', get_template_directory_uri() . '/css/archive.css', array(), '1.0.0');
        if (is_single()) {
            wp_enqueue_style('lightbox', get_template_directory_uri() . '/css/lightbox.css', array(), '1.0.0');
        }
        if (is_page()) {
            wp_enqueue_style('edit_contents', get_template_directory_uri() . '/css/edit_contents.css', array(), '1.0.0');
        }
        if (is_page('contact') || is_page('enrolment') || is_page('recruit')) {
            wp_enqueue_style('contact', get_template_directory_uri() . '/css/form.css', array(), '1.0.0');
        }
    }
}
add_action('wp_enqueue_scripts', 'hyd_style');

// js
function hyd_script()
{
    if (is_front_page() || is_home()) {
        //0607 トップページ用の条件分岐追加
        wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '', true);
        wp_enqueue_script('font', get_template_directory_uri() . '/js/font.js', array(), '', true);
    } else {
        wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '', true);
        wp_enqueue_script('font', get_template_directory_uri() . '/js/font.js', array(), '', true);
        wp_enqueue_script('page', get_template_directory_uri() . '/js/page.js', array(), '', true);
    }
    if (is_single()) {
        wp_enqueue_script('lightbox', get_template_directory_uri() . '/js/lightbox.js', array(), '', true);
        wp_enqueue_script('edit_lightbox', get_template_directory_uri() . '/js/edit_lightbox.js', array(), '', true);
    }
    /* swiper（仮）
    if (is_page('121')) {
        wp_enqueue_script('swiper', get_template_directory_uri() . '/js/swiper.js', array(), '', true);
    }*/

}
add_action('wp_enqueue_scripts', 'hyd_script');

// 投稿(お知らせ)のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
    if (!is_main_site()) {
        $args['rewrite'] = true; // リライトを有効にする
        $args['has_archive'] = 'members'; // 任意のスラッグ名
        $args['label'] = 'ブログ'; //管理画面左ナビに「投稿」の代わりに表示される
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

// 子サイトの固定ページのメニューを削除
function remove_menus()
{
    if (!is_main_site()) {
        remove_menu_page('edit.php?post_type=page'); // 固定.
    }
}
add_action('admin_menu', 'remove_menus', 999);

/*【出力カスタマイズ】年別アーカイブリストに年を表示する */
function my_get_archives_link($html)
{
    return preg_replace('/<\/a>/', '年</a>', $html);
}
add_filter('get_archives_link', 'my_get_archives_link');

/* フォームのカレンダー機能 */
function form_script()
{
    if (
        is_page('enrolment') // お問い合わせ・見学予約
    ) {
        wp_enqueue_script('form', get_template_directory_uri() . '/js/form.js', array(), '', true);
        wp_enqueue_style('jquery-ui-css', '//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/ui-lightness/jquery-ui.min.css');
        wp_enqueue_script('datepicker2', '//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js', array(), '', true);
        wp_enqueue_script('datepicker3', '//ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js', array(), '', true);
    }
}
add_action('wp_enqueue_scripts', 'form_script');



// リライトルールを追加
// function custom_rewrite_rule()
// {
//     // ニュースのタクソノミー追加
//     add_rewrite_rule('news/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$', 'index.php?news_category=$matches[1]&feed=$matches[2]', 'top');
//     add_rewrite_rule('news/(.+?)/(feed|rdf|rss|rss2|atom)/?$', 'index.php?news_category=$matches[1]&feed=$matches[2]', 'top');
//     // 年別
//     add_rewrite_rule('news/(.+?)/date/([0-9]{4})/?$', 'index.php?news_category=$matches[1]&year=$matches[2]', 'top');
//     // 年別（ページング）
//     add_rewrite_rule('news/(.+?)/date/([0-9]{4})/page/?([0-9]{1,})/?$', 'index.php?news_category=$matches[1]&year=$matches[2]&paged=$matches[3]', 'top');
//     // 月別
//     add_rewrite_rule('news/(.+?)/date/([0-9]{4})/([0-9]{1,2})/?$', 'index.php?news_category=$matches[1]&year=$matches[2]&monthnum=$matches[3]', 'top');
//     // 月別（ページング）
//     add_rewrite_rule('news/(.+?)/date/([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$', 'index.php?news_category=$matches[1]&year=$matches[2]&monthnum=$matches[3]&paged=$matches[4]', 'top');
//     // 日別
//     add_rewrite_rule('news/(.+?)/date/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$', 'index.php?news_category=$matches[1]&year=$matches[2]&monthnum=$matches[3]&day=$matches[4]', 'top');
//     // 日別（ページング）
//     add_rewrite_rule('news/(.+?)/date/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$', 'index.php?news_category=$matches[1]&year=$matches[2]&monthnum=$matches[3]&day=$matches[4]&paged=$matches[5]', 'top');
//     // 一覧
//     add_rewrite_rule('news/([^/]+)/?$', 'index.php?news_category=$matches[1]', 'top');
//     // 一覧（ページング）
//     add_rewrite_rule('news/([^/]+)/page/([0-9]+)/?$', 'index.php?news_category=$matches[1]&paged=$matches[2]', 'top');
// }
// add_action('init', 'custom_rewrite_rule');

// カテゴリーアーカイブのcategoryをnewsに変更する → プラグイン導入によりコメント化
// function remcat_function($link) {
//     return str_replace("/news_category/", "/news", $link);
// }
// add_filter('user_trailingslashit', 'remcat_function');
//     function remcat_flush_rules() {
//     global $wp_rewrite;
//     $wp_rewrite->flush_rules();
// }
// add_action('init', 'remcat_flush_rules');
//     function remcat_rewrite($wp_rewrite) {
//     $new_rules = array('(.+)/page/(.+)/?' => 'index.php?category_name='.$wp_rewrite->preg_index(1).'&paged='.$wp_rewrite->preg_index(2));
//     $wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
// }
// add_filter('generate_rewrite_rules', 'remcat_rewrite');

// リライトルールの追加(お知らせのカテゴリーアーカイブのパーマリンク設定)
if (is_main_site()) {
    add_action('init', function () {
        global $wp_rewrite;
        add_rewrite_rule('news/([^/]+)/([^/]+)/?$', 'index.php?news=$matches[2]', 'top');
        add_rewrite_rule('news/([^/]+)(/page/([0-9]+))?/?', 'index.php?news_category=$matches[1]&paged=$matches[3]', 'top');
    });
}

// add_filter( 'post_type_link', function( $permalink, $post, $leavename ) {
//     if ( $post->post_type == 'news' ) {
//       $term = wp_get_post_terms( $post->ID, 'newsstore' )[0]->slug;
//       return "/news/" . $term . "/" . $post->post_name . "/";
//     }
// }, 10, 4 );


//-----------------------------------------------------
// 【カテゴリーページのパーマリンクからcategoryを削除した際のページネーション404修正】
//-----------------------------------------------------
// function category_link_custom( $query = array()) {

//     // カテゴリーページのページネーションを修正してエラーを回避する
//     if(isset($query['name']) && $query['name'] === 'page' && isset($query['page'])) {
//         $paged = $query['page'];
//         if(is_numeric($paged)) {
//             $query['paged'] = (int) $paged;
//             unset($query['name']);
//             unset($query['page']);
//         }
//     }

//     return $query;
// }
// add_filter('request', 'category_link_custom');

/**
 * Contact Form 7 "フリガナ"のバリデーションを追加する
 */
function custom_wpcf7_validate_kana($result, $tag)
{
    $tag   = new WPCF7_Shortcode($tag);
    $name  = $tag->name;
    $value = isset($_POST[$name]) ? trim(wp_unslash(strtr((string) $_POST[$name], "\n", " "))) : "";
    //平仮名のみ
    if ($name === "your-name-kana") {
        if (!preg_match("/^[ぁ-ん]+$/u", $value)) {
            $result->invalidate($tag, "平仮名で入力してください。");
        }
    }
    return $result;
}
add_filter('wpcf7_validate_text', 'custom_wpcf7_validate_kana', 11, 2);
add_filter('wpcf7_validate_text*', 'custom_wpcf7_validate_kana', 11, 2);

/**
 * カラーパレットの色追加
 */
function webchil_add_my_editor_color_palette()
{
    //既存のカラーパレットが存在して追加したい場合
    $palette = get_theme_support('editor-color-palette');
    if (!empty($palette)) {
        $palette = array_merge($palette[0], array(
            [
                'name'  => 'ブラック',
                'slug'  => 'black',
                'color' => '#292B29',
            ],
            [
                'name'  => 'グレー',
                'slug'  => 'gray',
                'color' => '#F1EEEF',
            ],
            [
                'name'  => 'ベージュ',
                'slug'  => 'beige',
                'color' => '#E8E3DD',
            ],
            [
                'name'  => 'ホワイト',
                'slug'  => 'white',
                'color' => '#FFFFFF',
            ],
            [
                'name'  => 'ブラウン',
                'slug'  => 'brown',
                'color' => '#8A827A',
            ],

            [
                'name'  => 'ピンク',
                'slug'  => 'pink',
                'color' => '#F5787B',
            ],
            [
                'name'  => 'オレンジ',
                'slug'  => 'orange',
                'color' => '#EB8B67',
            ],
            [
                'name'  => 'イエロー',
                'slug'  => 'yellow',
                'color' => '#F7E5B6',
            ],
            [
                'name'  => 'グリーン',
                'slug'  => 'green',
                'color' => '#69D657',
            ],
            [
                'name'  => 'ライトブルー',
                'slug'  => 'lightblue',
                'color' => '#67D0DB',
            ],
        ));
    } else {
        //既存のカラーパレットが存在しない場合
        $palette = array(
            [
                'name'  => 'ブラック',
                'slug'  => 'black',
                'color' => '#292B29',
            ],
            [
                'name'  => 'グレー',
                'slug'  => 'gray',
                'color' => '#F1EEEF',
            ],
            [
                'name'  => 'ベージュ',
                'slug'  => 'beige',
                'color' => '#E8E3DD',
            ],
            [
                'name'  => 'ホワイト',
                'slug'  => 'white',
                'color' => '#FFFFFF',
            ],
            [
                'name'  => 'ブラウン',
                'slug'  => 'brown',
                'color' => '#8A827A',
            ],

            [
                'name'  => 'ピンク',
                'slug'  => 'pink',
                'color' => '#F5787B',
            ],
            [
                'name'  => 'オレンジ',
                'slug'  => 'orange',
                'color' => '#EB8B67',
            ],
            [
                'name'  => 'イエロー',
                'slug'  => 'yellow',
                'color' => '#F7E5B6',
            ],
            [
                'name'  => 'グリーン',
                'slug'  => 'green',
                'color' => '#69D657',
            ],
            [
                'name'  => 'ライトブルー',
                'slug'  => 'lightblue',
                'color' => '#67D0DB',
            ],
        );
    }
    add_theme_support('editor-color-palette', $palette);
}

add_action(
    'after_setup_theme',
    'webchil_add_my_editor_color_palette',
    11
);

/**
 * アイキャッチ画像がない場合、投稿内の画像を表示する
 */

function catch_that_image()
{
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    if (preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches)) {
        $first_img = $matches[1][0];
    } else {
        $first_img = esc_url(get_home_url()) . "/wp-content/themes/hirotakindergarten_theme/img/img_now_printing.jpg";
    }
    return $first_img;
}

/** 
 *フロント：ブロックエディタ用CSSの追加
 */
add_action( 'after_setup_theme', function(){
	// ブロックエディタ用スタイル機能をテーマに追加
	add_theme_support( 'editor-styles' );
	// ブロックエディタ用CSSの読み込み
	add_editor_style( '/css/editor-style.css' );
} );

/**
 *管理画面：ブロックエディタ用CSSの追加
 */
add_action('admin_enqueue_scripts', function ($hook_suffix) {
	// 新規・編集投稿ページのみ読み込み
	if ('post.php' === $hook_suffix || 'post-new.php' === $hook_suffix) {
		// CSSディレクトリの設定
		$uri = get_template_directory_uri() . "/css/editor-style.css";
		// CSSファイルの読み込み
		wp_enqueue_style("smart-style", $uri, array(), wp_get_theme()->get('Version'));
		// JSディレクトリ
		$uri = get_template_directory_uri() . "/js/editor.js";
		// JSァイルの読み込み
		wp_enqueue_script('smart-script', $uri, array(), wp_get_theme()->get('Version'), true);
	}
});

/**
 *管理画面ブロックエディタ用のJSを追加
 *enqueue_block_editor_asset：ブロックエディタ用のフック
 */
add_action( 'enqueue_block_editor_assets', function () {
	// ブロック用のJSは第3引数を指定する必要がある
	wp_enqueue_script( 'new-theme-editor-js', get_theme_file_uri( '/js/editor.js' ), [
		'wp-element',
		'wp-rich-text',
		'wp-editor',
	] );
} );