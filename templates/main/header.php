<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/menu/' . $config['menu']['top'] . '.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?='/templates/' . $config['template-name'] . "/style.css"?>">
    <title>Личный сайт Митиной Марии</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="<?='/templates/' . $config['template-name'] . "/assets/js/main.js"?>"></script>

</head>
<body>
    <header>
        <div class="header__logo">
            <img src="<?='/templates/' . $config['template-name'] . "/assets/images/logo.png"?>" alt="">
        </div>

        <div class="header__burger-menu menu">
            <div class="menu__burger__container-btn">
                <span class="menu__burger-btn">
                </span>
            </div>

            <div class="menu__container">
                <nav>
                    <?php 
                    foreach($arSiteMenu[$config['menu']['top']] as $item):?>
                        <a class='menu__item' href="<?=$item['link']?>">
                            <?=$item['title']?>
                        </a>
                    <?php endforeach;?>
                </nav>
            </div>
        </div>
    </header>