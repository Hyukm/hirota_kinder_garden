<?php get_header(); ?>

<main>
    <!-- MV -->
    <section class="sec_page_title">
        <div class="sec_page_main">
            <!--アイキャッチ画像を表示-->
            <img src="<?php echo get_template_directory_uri(); ?>/img/header04.jpg" alt="" class="img">
            <?php if (is_main_site()) : ?>
                <h1>お知らせ詳細</h1>
            <?php else : ?>
                <h1>ブログ詳細</h1>
            <?php endif; ?>
        </div>
        <span class="sec_mv_circle">
            <span class="circle"></span>
            <span class="circle"></span>
            <span class="circle"></span>
        </span>
    </section>

    <div class="flex post_flex single_post wrapper">
        <!-- お知らせ一覧 -->
        <section class="sec_articles">
            <article class="single_post_article">
                <div class="single_post_image"><?php the_post_thumbnail() ?></div>
                <div class="single_post_content">
                    <div class="single_post_content_head">
                        <h2><?php the_title() ?></h2>
                        <time><?php the_time('Y年m月d日') ?></time>
                    </div>
                    <div class="single_post_content_main post_content_main">
                        <p><?php echo get_the_content() ?></p>
                    </div>
                    <div class="single_post_content_foot post_content_foot">
                        <?php
                        $categories = get_the_category();
                        ?>
                        <ul>
                            <?php $news_category = get_the_terms($post->ID, 'news_category'); //新着情報カテゴリーを取得?>
                            <?php if (!empty($news_category)) : //新着情報カテゴリー ?>
                            <?php foreach ( $news_category as $term ) : ?>
                            <li><?php echo $term->name; ?></li>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </article>
        </section>
        
        <!-- サイドバー -->
        <aside class="aside_menu">
            <div class="post_category_archive">
                <h3>カテゴリー</h3>
                <ul class="menu_list">
                    <?php if (is_main_site()) : ?>
                    <?php wp_list_categories('title_li=&taxonomy=news_category'); ?>
                    <?php else : ?>
                    <?php wp_list_categories('title_li='); ?>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="post_yearly_archive">
                <h3>アーカイブ</h3>
                <ul class="menu_list">
                    <?php if (is_main_site()) : ?>
                        <?php wp_get_archives('type=yearly&post_type=news'); ?>
                    <?php else : ?>
                        <?php wp_get_archives('type=yearly'); ?>
                    <?php endif ; ?>
                </ul>
            </div>
        </aside>
    </div>
</main>

<?php get_footer(); ?>