<!DOCTYPE html>
<?php wp_head(); ?>
<html lang="ja">

    <head>
        <title>MINE</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
        <?php wp_deregister_script('jquery'); ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@500&display=swap" rel="stylesheet">
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/resources/js/mine.js" type="text/javaScript" charset="utf-8"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/resources/css/mine-common.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/resources/css/mine-top.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/resources/css/mine-second.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/resources/css/mine-about-us.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/resources/css/mine-thought.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/resources/css/mine-faq.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/resources/css/mine-contact.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/resources/css/facility-guidance.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/resources/css/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    </head>

    <body <?php body_class(); ?>>
        <header>
            <div class="mine-header header-container pcview">
                <!-- ロゴ -->
                <div id="logo">
                    <a href="/mine">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/MINE-02.webp"></div>
                    </a>
                <!-- ナビゲーションメニュー -->
                <nav>
                    <ul>
                        <li><a href="./facility-guidance">施設案内</a></li>
                        <li><a href="./commitment">こだわり</a></li>
                        <li><a href="./funeral-plan">葬儀プラン</a></li>
                        <li><a href="./faq">よくある質問</a></li>
                        <li><a href="./about-us">会社概要</a></li>
                        <li><a href="./contact">お問合せ</a></li>
                    </ul>
                </nav>
            </div>
            <div class="sphead hamburger-menu spview">
                <input type="checkbox" id="menu-btn-check">
                <label for="menu-btn-check" class="menu-btn"><span></span></label>
                <div class="menu-content">
                    <div style="margin: 25px 0;text-align: center;">
                        <a href="/mine">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/MINE-01.webp" style="width: 50%;"/>
                        </a>
                    </div>
                    <ul>
                        <li><a href="./facility-guidance">施設案内</a></li>
                        <li><a href="./commitment">こだわり</a></li>
                        <li><a href="./funeral-plan">葬儀プラン</a></li>
                        <li><a href="./faq">よくある質問</a></li>
                        <li><a href="./about-us">会社概要</a></li>
                        <li><a href="./contact">お問合せ</a></li>
                    </ul>
                </div>
            </div>
        </header>