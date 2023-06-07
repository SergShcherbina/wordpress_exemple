<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- динамическое получение имени сайта bloginfo('name') -->
		<title> <?php bloginfo('name'); echo ' | '; bloginfo('description'); ?> </title>
        <meta name="theme-color" content="#c9e0e04d">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="shortcut icon" href="<?php echo bloginfo('template_url');?>/assets/img/favicons/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="<?php echo bloginfo('template_url');?>/assets/img/favicons/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo bloginfo('template_url');?>/assets/img/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo bloginfo('template_url');?>/assets/img/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo bloginfo('template_url');?>/assets/img/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo bloginfo('template_url');?>/assets/img/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo bloginfo('template_url');?>/assets/img/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo bloginfo('template_url');?>/assets/img/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo bloginfo('template_url');?>/assets/img/favicons/apple-touch-icon-180x180.png">

        <!-- <?php echo bloginfo('template_url');?>/assets/img --- так меняем путь каждой картинки по всему файлу-->
        <!-- <link rel="apple-touch-icon" sizes="180x180" href="./img/favicons/apple-touch-icon-180x180.png">   -- как было -->
        <!-- <link rel="apple-touch-icon" sizes="180x180" href="<?php echo bloginfo('template_url');?>/assets/img/favicons/apple-touch-icon-180x180.png">  -- как стало -->

        <!-- хук для динамического подключения стилей -->
        <?php
            wp_head();
        ?>

    </head>
    <body class="no-svg">
        <header>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-11 col-sm-12 col-md-12 col-lg-3">
                        <div class="header__logo">
                            <!-- добавление динимического логотипа -->
                            <?php the_custom_logo(); ?>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-9 offset-lg-0 col-xl-7 offset-xl-2 ">
                        <div class="header__contacts">
                            <div class="header__contacts-item">
                                <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/svg/email.svg" alt="почта" class="header__contacts-logo">
                                
                                <!-- для изменения во всех частях одновременно одного значения наприсер почты, нужно указать id страницы 2-м параметром 
                                посмотреть есго можнов url страницы при редактировании, в этом случае id=2 (?post=2&action=edit)-->
                                <a href="mailto:<?php the_field('email', 2) ?>" class="header__contacts-mail"><?php the_field('email', 2) ?></a>

                            </div>
                            <div class="header__contacts-item">
                                <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/svg/phone.svg" alt="телефон" class="header__contacts-logo">
                                <div class="header__contacts-tel">
                                    <!-- не забываем про второй параметр id страницы-->
                                    <a href="tel:+<?php the_field('tel_1', 2) ?>"> +<?php the_field('tel_1', 2) ?> </a>
                                    <a href="tel:+<?php the_field('tel_2', 2) ?>"> +<?php the_field('tel_2', 2) ?></a>
                                </div>
                            </div>
                            <div class="header__contacts-item">
                                <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/svg/pointer.svg" alt="указатель" class="header__contacts-logo">
                                <address> <?php the_field('address') ?> </address>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="row" data-slide="1">
                    <ul class="header__nav">
                        <li>
                            <a class="header__nav-item" href="#about">Про компанию</a>
                        </li>
                        <li>
                            <a class="header__nav-item" href="#specialists">Наша команда</a>
                        </li>
                        <li>
                            <a class="header__nav-item" href="#toys">Игрушки</a>
                        </li>
                        <li>
                            <a class="header__nav-item" href="#aboutus">Наша история</a>
                        </li>
                        <li>
                            <a class="header__nav-item" href="#contacts">Контакты и отзывы</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header__hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </header>
