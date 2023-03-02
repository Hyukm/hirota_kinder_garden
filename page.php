<?php get_header(); ?>

<main class="main">

    <!-- MV -->
    <section class="sec_page_title">
        <div class="sec_page_main">

            <!--アイキャッチ画像を表示-->
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large'); ?>
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/header12_2.jpg" alt="" class="img">
            <?php endif; ?>
            <!--親ページのタイトルを表示-->
            <?php
            $parent_id = $post->post_parent;
            if ($parent_id) {
                echo '<div>' .
                    get_post($parent_id)->post_title . '</div>';
            }
            ?>
            <!--ページタイトルを表示-->
            <h1><?php the_title(); ?></h1>

        </div>
        <span class="sec_mv_circle">
            <span class="circle"></span>
            <span class="circle"></span>
            <span class="circle"></span>
        </span>

        <!--ページ概要文を表示-->
        <?php $page_summary = SCF::get('page_summary'); ?>
        <?php if(!empty($page_summary)): ?>
            <p class="font_noto"><?php $page_summary = scf::get('page_summary');
                                echo nl2br($page_summary); ?></p>
        <?php endif; ?>
    </section>

    <div class="wrapper edit_contents">
        <?php the_content(); ?>
    </div>

</main>

<?php get_footer() ?>