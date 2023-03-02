<?php get_header(); ?>

<main>
    <!-- MV -->
    <section class="sec_page_title">
        <div class="sec_page_main">
            <img src="<?php echo get_template_directory_uri(); ?>/img/header04.jpg" alt="" class="img">
            <h1>お知らせ</h1>
        </div>
        <span class="sec_mv_circle">
            <span class="circle"></span>
            <span class="circle"></span>
            <span class="circle"></span>
        </span>
    </section>

    <div class="flex post_flex wrapper">
        <!-- カスタム投稿のクエリ取得 -->
        <?php
        $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
        $args = array(
            'post_type' => 'news',
            's' => get_search_query(),
            'posts_per_page' => 10,
            'paged' => $paged,
            'tax_query' => array(
                array(
                    'taxonomy' => 'news_category',
                    'field'    => 'slug',
                    'terms'    => get_queried_object()->slug,
                ),
            ),
        );

        $wp_query = new WP_Query($args);
        ?>
        <!-- お知らせ一覧 -->
        <section class="sec_articles">
            <?php if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                    <article class="post_article">
                        <a href="<?php the_permalink() ?>" class="flex">
                            <div class="post_image">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('', 'class=img'); ?>
                                <?php else : ?>
                                    <img src="<?php echo catch_that_image(); ?>" class="img" alt="<?php the_title(); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="post_content">
                                <div class="post_content_main">
                                    <h2><?php the_title() ?></h2>
                                    <p>
                                        <?php
                                        $content = get_the_content();
                                        if (mb_strlen($content, "UTF-8") > 85) {
                                            echo wp_trim_words($content, 85, '...');
                                        } else {
                                            echo $content;
                                        }
                                        ?>
                                    </p>
                                    <time><?php the_time('Y年m月d日') ?></time>
                                </div>
                                <div class="post_content_foot">
                                    <?php
                                    $categories = get_the_terms($post->ID, 'news_category');
                                    ?>
                                    <ul>
                                        <?php foreach ($categories as $category) : ?>
                                            <li><?php echo $category->name ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </article>
            <?php endwhile;
            endif; ?>

            <!-- ページャー -->
            <?php echo paginate_links(array(
                'type' => 'list',
                'mid_size' => '1',
                'prev_text' => '«',
                'next_text' => '»',
            )); ?>

            <?php wp_reset_postdata() ?>

            <!-- ?php echo paginate_links( array (
                'type' => 'list',
                'mid_size' => '1',
                'prev_text' => '«',
                'next_text' => '»'
            )); ?> -->

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
                    <?php endif; ?>
                </ul>
            </div>
        </aside>
    </div>
</main>

<?php get_footer(); ?>