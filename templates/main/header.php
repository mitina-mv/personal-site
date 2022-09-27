<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/menu/' . $config['menu']['top'] . '.php');
?>

<header>
    <div class="header__logo">

    </div>

    <div class="header__burger-menu menu">
        <span class="menu__burger-btn">

        </span>

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