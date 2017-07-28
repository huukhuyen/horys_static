<?php
/**
 * The Header for our theme
 *
 * @package WordPress
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta <?php bloginfo( 'charset' ); ?>>
    <!--<meta name="viewport" content="width=device-width">-->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>滋賀・京都での会社設立、建設業許可のご相談｜堀裕子行政書士事務所</title>
    <meta http-equiv="keywords" content="京都,滋賀,建設業許可,会社設立,記帳代行,産業廃棄物収集運搬業許可,特殊車両通行許可,行政書士," />
    <meta http-equiv="description" content="滋賀・京都での会社設立・建設業許可申請・特殊車両通行許可申請なら、堀裕子行政書士事務所まで。記帳代行・契約書・遺言・遺産分割協議書・相続についても承ります。２４時間無料相談対応！！" />

    <link rel="shortcut icon" type="image/x-icon" href="http://test-up.jp/horys/favicon.ico">
</head>
    <?php wp_head(); ?>

    <body class="<?php echo is_home() ? 'page--top' : "" ?>">
        <div class="main-body">
            <?php if( is_page_template('contents01.php') || is_page_template('contents02.php') ){ ?>
                <div class="contentLeft">
            <?php } ?>
            <header class="header">
                <div class="headerMenu effect">
                    <a href="#" class="btnToggle menu-trigger">
        				<span></span>
        				<span></span>
        				<span></span>
    				</a>

                    <h1><span class="sp_closeMenu is_mb"><a href="<?php echo home_url(); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_sphead.png" alt="堀裕子行政書士事務所"></a></span></h1> </div>

                    <?php if( !(is_page_template('contents01.php') || is_page_template('contents02.php')) ){ ?>
                        <div class="headerlogo"> <a href="#"><img class="is_pc" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a> </div>
                    <?php } ?>

                <nav class="navMain">
                    <ul>
                        <li class="active"><a href="<?php echo home_url(); ?>/">トップ</a></li>
                        <li class="subNavL2">
                            <a href="contents01.html">サービスのご案内</a>
                            <ul class="subNavL3">
                                <li><a href="<?php echo home_url(); ?>/contents01.html">建設業許可</a></li>
                                <li><a href="<?php echo home_url(); ?>/contents02.html">会社設立</a></li>
                                <li><a href="<?php echo home_url(); ?>/">知的資産経営</a></li>
                                <li><a href="<?php echo home_url(); ?>/">記帳代行</a></li>
                                <li><a href="<?php echo home_url(); ?>/">各種契約書</a></li>
                                <li><a href="<?php echo home_url(); ?>/">遺産相続</a></li>
                                <li><a href="<?php echo home_url(); ?>/">特殊車両通行許可</a></li>
                                <li><a href="<?php echo home_url(); ?>/">産業廃棄物収集運搬業の許可</a></li>
                            </ul>
                        </li>
                        <li class="subNavL2">
                            <a href="<?php echo home_url(); ?>/contents02.html">プロフィール</a>

                        </li class="subNavL2">
                        <li><a href="<?php echo home_url(); ?>/contact.html">お問い合わせ</a></li>
                    </ul>
                </nav>
            </header>
            <!-- /header -->
