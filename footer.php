<footer>
    <div class="wrapper">
        <div class="footer_information flex">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="footer_logo pc_only">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo_tree.png" alt="広田幼稚園"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_text.jpg" alt="Hirota Kindergarten">
            </a>
            <div class="contact flex">
                <div class="contact_sp">
                    <div class="contact_title">
                        <h2>お問い合わせ</h2>
                        <div class="font_noto">
                            <span>お電話：0466-44-6335</span>
                            <span>受付時間：月-金　9時～17時</span>
                        </div>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo_tree.png" alt="tree" class="sp_only">
                </div>
                <div class="btns_contact">
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn_arrow">お問い合わせ</a>
                    <a href="<?php echo esc_url(home_url('/enrolment/')); ?>" class="btn_arrow">見学お申し込み</a>
                </div>
            </div>
        </div>
        <div class="site_map pc_only">
            <ul class="column">
                <li><a href="<?php echo esc_url(home_url('/')); ?>">トップページ</a></li>
                <li><a href="<?php echo esc_url(home_url('/news/')); ?>">お知らせ</a></li>
                <li><a href="<?php echo esc_url(home_url('/about/')); ?>">広田幼稚園について</a>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/about/vision/')); ?>">教育理念</a></li>
                        <li><a href="<?php echo esc_url(home_url('/about/facilities/')); ?>">施設紹介</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="column">
                <li><a href="<?php echo esc_url(home_url('/schedule/')); ?>">園での生活</a>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/schedule/day/')); ?>">１日の流れ</a></li>
                        <li><a href="<?php echo esc_url(home_url('/schedule/year/')); ?>">年間行事</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo esc_url(home_url('/preschool/')); ?>">プレ保育について</a></li>
            </ul>
            <ul class="column">
                <li><a href="<?php echo esc_url(home_url('/entry/')); ?>">入園のご案内</a>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/entry/application/')); ?>">募集要項</a></li>
                        <li><a href="<?php echo esc_url(home_url('/entry/faq/')); ?>">よくある質問</a></li>
                        <li><a href="<?php echo esc_url(home_url('/entry/kodomoen/')); ?>">認定こども園について</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="column">
                <li><a href="<?php echo esc_url(home_url('/members/')); ?>">保護者の方へ</a></li>
                <li><a href="<?php echo esc_url(home_url('/recruit/')); ?>">スタッフ募集</a></li>
                <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a></li>
                <li><a href="<?php echo esc_url(home_url('/enrolment/')); ?>" class="btn_circle">園の見学</a><a href="<?php echo esc_url(home_url('/about/access/')); ?>" class="btn_circle">アクセス</a></li>
            </ul>
        </div>
        <div class="site_map sp_only">
            <ul class="accordion-area">
                <li class="no_accordion">
                    <h3 class="title"><a href="<?php echo esc_url(home_url('/')); ?>">トップページ</a></h3>
                </li>
                <li class="no_accordion">
                    <h3 class="title"><a href="<?php echo esc_url(home_url('/news/')); ?>">お知らせ</a></h3>
                </li>
                <li class="accordion">
                    <h3 class="title"><a href="<?php echo esc_url(home_url('/about/')); ?>">広田幼稚園について</a></h3>
                    <div class="box">
                        <ul>
                            <li><a href="<?php echo esc_url(home_url('/about/vision/')); ?>">教育理念</a></li>
                            <li><a href="<?php echo esc_url(home_url('/about/facilities/')); ?>">施設紹介</a></li>
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
                <li class="no_accordion">
                    <h3 class="title"><a href="<?php echo esc_url(home_url('/preschool/')); ?>">プレ保育について</a></h3>
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
                    <h3 class="title"><a href="<?php echo esc_url(home_url('/recruit/')); ?>">スタッフ募集</a></h3>
                </li>
                <li class="no_accordion">
                    <h3 class="title"><a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a></h3>
                </li>
            </ul>
            <div class="column">
                <a href="<?php echo esc_url(home_url('/enrolment/')); ?>" class="btn_circle">園の見学</a>
                <a href="<?php echo esc_url(home_url('/about/access/')); ?>" class="btn_circle">アクセス</a>
            </div>
        </div>
    </div>
    <p class="copyright">©Hirota Kindergarten</p>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<?php wp_footer() ?>
</body>

</html>