<?php get_header(); ?>

<main>
    <!-- MV -->
    <section class="sec_page_title">
        <div class="sec_page_main">
            <!--アイキャッチ画像を表示-->
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large'); ?>
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/header12_2.jpg" alt="" class="img">
            <?php endif; ?>
            <h1><?php the_title(); ?></h1>
        </div>
        <span class="sec_mv_circle">
            <span class="circle"></span>
            <span class="circle"></span>
            <span class="circle"></span>
        </span>

        <!--ページ概要文を表示-->
        <?php $page_summary = SCF::get('page_summary'); ?>
        <?php if (!empty($page_summary)) : ?>
            <p class="font_noto"><?php $page_summary = scf::get('page_summary');
                                    echo nl2br($page_summary); ?></p>
        <?php endif; ?>
    </section>

    <!-- ディレクトリ -->
    <section class="directory">
        <div class="wrapper">
            <div class="directory_right directory_card">
                <div class="directory_text">
                    <h2>募集要項</h2>
                    <p class="font_noto"><?php $myfield = scf::get('directory_text', 130);
                                            echo nl2br($myfield); ?></p>
                    <a href="<?php echo esc_url(home_url('/entry/application/')); ?>" class="btn_circle">詳しく見る</a>
                </div>
                <!--アイキャッチ画像を表示-->
                <?php if (has_post_thumbnail(130)) : ?>
                    <?php echo get_the_post_thumbnail(130, 'large', ['class' => 'directory_img']); ?>
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/header12_2.jpg" class="directory_img">
                <?php endif; ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/illust_about_1.png" class="illust_about_1">
                <img src="<?php echo get_template_directory_uri(); ?>/img/illust_about_2.png" class="illust_about_2">
                <span class="bg d_bg1"></span>
            </div>
            <div class="directory_left directory_card">
                <!--アイキャッチ画像を表示-->
                <?php if (has_post_thumbnail(758)) : ?>
                    <?php echo get_the_post_thumbnail(758, 'large', ['class' => 'directory_img']); ?>
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/header12_2.jpg" class="directory_img">
                <?php endif; ?>
                <div class="directory_text">
                    <h2>よくある質問</h2>
                    <p class="font_noto"><?php $myfield = scf::get('directory_text', 758);
                                            echo nl2br($myfield); ?></p>
                    <a href="<?php echo esc_url(home_url('/entry/faq/')); ?>" class="btn_circle">詳しく見る</a>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/illust_about_3.png" class="illust_about_3">
                <img src="<?php echo get_template_directory_uri(); ?>/img/illust_about_4.png" class="illust_about_4">
                <span class="bg d_bg2"></span>
                <span class="bg d_bg3"></span>
            </div>
            <div class="directory_right directory_card">
                <div class="directory_text">
                    <h2>認定こども園</h2>
                    <p class="font_noto"><?php $myfield = scf::get('directory_text', 131);
                                            echo nl2br($myfield); ?></p>
                    <a href="<?php echo esc_url(home_url('/entry/kodomoen/')); ?>" class="btn_circle">詳しく見る</a>
                </div>
                <!--アイキャッチ画像を表示-->
                <?php if (has_post_thumbnail(131)) : ?>
                    <?php echo get_the_post_thumbnail(131, 'large', ['class' => 'directory_img']); ?>
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/header12_2.jpg" class="directory_img">
                <?php endif; ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/illust_about_5.png" class="illust_about_5">
                <img src="<?php echo get_template_directory_uri(); ?>/img/illust_about_6.png" class="illust_about_6">
                <span class="bg d_bg4"></span>
            </div>
        </div>
    </section>
</main>

<?php get_footer() ?>