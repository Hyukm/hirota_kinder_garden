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
        <!-- お知らせ一覧 -->
        <section class="sec_articles">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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
                                    $categories = get_the_category();
                                    ?>
                                    <ul>
                                        <?php $news_category = get_the_terms($post->ID, 'news_category');  ?>
                                        <!-- カテゴリー取得 -->
                                        <?php if (!empty($news_category)) :  ?>
                                            <?php foreach ($news_category as $term) : ?>
                                                <li class="cat_training"><?php echo $term->name; ?></li>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </article>
            <?php endwhile;
            endif; ?>

            <!-- ページャー -->
            <!-- ?php if( function_exists('wp_pagenavi') ) { 
                wp_pagenavi(array('query' => $information))
                ;} ?> -->

            <?php the_posts_pagination(array(
                'type' => 'list',
                'mid_size' => '1',
                'prev_text' => '«',
                'next_text' => '»',
            )); ?>

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




                    <!-- ?php
                    $terms = get_terms('news_category');
                    foreach ( $terms as $term ) {
                        echo '<li><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
                    }
                    ?> -->



                </ul>
            </div>
            <div class="post_yearly_archive">
                <h3>アーカイブ</h3>
                <ul class="menu_list">
                    <?php if (is_main_site()) : ?>
                        <?php wp_get_archives('post_type=news&type=yearly'); ?>
                    <?php else : ?>
                        <?php wp_get_archives('type=yearly'); ?>
                    <?php endif; ?>
                </ul>
            </div>
        </aside>
    </div>
</main>


<?php get_footer(); ?>