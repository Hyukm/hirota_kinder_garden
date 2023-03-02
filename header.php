<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/ fb# prefix属性: http://ogp.me/ns/ prefix属性#">
    <meta charset="utf-8">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/img_now_printing.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://unpkg.com/sanitize.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@3.2.0/dist/css/yakuhanrp.min.css"><!-- 丸ゴシック用 約半 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@3.4.1/dist/css/yakuhanjp-noto.min.css "><!-- font_noto用 約半 -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico"><!-- ファビコン -->
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png"><!-- アップルタッチアイコン -->
    <?php wp_head() ?>
</head>

<body>
    <header>
        <div class="header_logo">
            <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_text.jpg" alt="広田幼稚園" class="header_pc_only" width="1479px" height="390px"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_shape.jpg" alt="広田幼稚園" class="header_sp_only"></a>
            <span class="header_sp_only">広田幼稚園</span>
            <div class="flex">
                <a href="<?php echo esc_url(home_url('/enrolment/')); ?>" class="btn_circle header_pc_only">園の見学</a>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn_circle header_pc_only">お問い合わせ</a>
            </div>
        </div>
        <nav class="header_pc_only">
            <ul class="global_menu">
                <li><a href="<?php echo esc_url(home_url('/news/')); ?>">お知らせ</a></li>
                <li class="menu_item">
                    <a href="<?php echo esc_url(home_url('/about/')); ?>">広田幼稚園について</a>
                    <ul class="menu_under">
                        <li><a href="<?php echo esc_url(home_url('/about/vision/')); ?>">教育理念</a></li>
                        <li><a href="<?php echo esc_url(home_url('/about/facilities/')); ?>">施設紹介</a></li>
                        <li><a href="<?php echo esc_url(home_url('/about/access/')); ?>">アクセス</a></li>
                    </ul>
                </li>
                <li class="menu_item">
                    <a href="<?php echo esc_url(home_url('/schedule/')); ?>">園での生活</a>
                    <ul class="menu_under">
                        <li><a href="<?php echo esc_url(home_url('/schedule/day/')); ?>">１日の流れ</a></li>
                        <li><a href="<?php echo esc_url(home_url('/schedule/year/')); ?>">年間行事</a></li>
                    </ul>
                </li>
                <li class="menu_item">
                    <a href="<?php echo esc_url(home_url('/entry/')); ?>">入園のご案内</a>
                    <ul class="menu_under">
                        <li><a href="<?php echo esc_url(home_url('/entry/application/')); ?>">募集要項</a></li>
                        <li><a href="<?php echo esc_url(home_url('/entry/faq/')); ?>">よくある質問</a></li>
                        <li><a href="<?php echo esc_url(home_url('/entry/kodomoen/')); ?>">認定こども園について</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo esc_url(home_url('/members/')); ?>">保護者の方へ</a></li>
                <li><a href="<?php echo esc_url(home_url('/preschool/')); ?>">プレ保育について</a></li>
                <li><a href="<?php echo esc_url(home_url('/recruit/')); ?>">スタッフ募集</a></li>
            </ul>
            <div class="flex">
                <a href="<?php echo esc_url(home_url('/enrolment/')); ?>" class="btn_circle">園の見学</a>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn_circle">お問い合わせ</a>
            </div>
        </nav>
        <div class="header_sp_only">
            <div class="btn_open"><span></span><span></span><span></span></div>
            <nav id="g-nav">
                <div id="g-nav-list">
                    <ul class="accordion-area">
                        <li class="no_accordion">
                            <h3 class="title"><a href="<?php echo esc_url(home_url('/news/')); ?>">お知らせ</a></h3>
                        </li>
                        <li class="accordion">
                            <h3 class="title"><a href="<?php echo esc_url(home_url('/about/')); ?>">広田幼稚園について</a></h3>
                            <div class="box">
                                <ul>
                                    <li><a href="<?php echo esc_url(home_url('/about/vision/')); ?>">教育理念</a></li>
                                    <li><a href="<?php echo esc_url(home_url('/about/facilities/')); ?>">施設紹介</a></li>
                                    <li><a href="<?php echo esc_url(home_url('/about/access/')); ?>">アクセス</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion">
                            <h3 class="title"><a href="<?php echo esc_url(home_url('/schedule/')); ?>">園での生活</a></h3>
                            <div class="box">
                                <ul>
                                    <li><a href="<?php echo esc_url(home_url('/schedule/day/')); ?>">１日の流れ</a></li>
                                    <li><a href="<?php echo esc_url(home_url('/schedule/year/')); ?>">年間行事</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion">
                            <h3 class="title"><a href="<?php echo esc_url(home_url('/entry/')); ?>">入園のご案内</a></h3>
                            <div class="box">
                                <ul>
                                    <li><a href="<?php echo esc_url(home_url('/entry/application/')); ?>">募集要項</a></li>
                                    <li><a href="<?php echo esc_url(home_url('/entry/faq/')); ?>">よくある質問</a></li>
                                    <li><a href="<?php echo esc_url(home_url('/entry/kodomoen/')); ?>">認定こども園について</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="no_accordion">
                            <h3 class="title"><a href="<?php echo esc_url(home_url('/members/')); ?>">保護者の方へ</a></h3>
                        </li>
                        <li class="no_accordion">
                            <h3 class="title"><a href="<?php echo esc_url(home_url('/preschool/')); ?>">プレ保育について</a></h3>
                        </li>
                        <li class="no_accordion">
                            <h3 class="title"><a href="<?php echo esc_url(home_url('/recruit/')); ?>">スタッフ募集</a></h3>
                        </li>
                        <li class="no_accordion"><a href="<?php echo esc_url(home_url('/enrolment/')); ?>" class="btn_circle">園の見学</a></li>
                        <li class="no_accordion"><a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn_circle">お問い合わせ</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>