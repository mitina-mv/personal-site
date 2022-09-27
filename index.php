<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/init.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/templates/' . $config['template-name'] . '/header.php');
?>

<div class="hello-block">
    <a name="main"></a>
    <img src="/main.png" alt="" class="hello-block__image">

    <div class="hello-block__title">
        <span class="hello-block__subtitle">Привет, я</span>
        <h1 class="hello-block__main-title">Митина Мария</h1>
        <span class="hello-block__subtitle">студентка группы ПИ-20-1 и веб-разработчик</span>
    </div>

    <div class="hello-block__social-link">
        <span>
            Найдите меня
        </span>
        <?php foreach($config['social-link'] as $item):?>
            <a href="https://<?=$item['link']?>" target="_blank" rel="noopener noreferrer">
                <i class="fa <?=$item['icon']?>"></i>
            </a>
        <?php endforeach;?>
    </div>
</div>

<div class="technologies">
    <a name='about'></a>
    <?php 
    require_once($_SERVER['DOCUMENT_ROOT'] . '/content/technologies.php');
    ?>
    <h2 class='main-caption'>Мои навыки</h2>

    <div class="technologies__tabs tads-component">
        <div class="tads-component__container">
            <div class="tads-component__content tads-component__content_default">
                <span class='tads-component__content-title'>
                    Люблю дизайн и код одинаково
                </span>
                
                <p class='tads-component__content-text'>
                    Представьте, как это здорово, когда за дизайн и реализацию отвечает один человек: ситуации, когда в макете было лучше, чем на сайте, будут полностью исключены. Со мной это будет не фантазией, а приятной реальностью.
                </p>                    
            </div>
            <?foreach($arTechnologies as $item):?>
                <div class="tads-component__content">
                    <span class='tads-component__content-title'>
                        <?=$item['name'];?>
                    </span>

                    <p class='tads-component__content-text'>
                        <?=$item['desctiption'];?>
                    </p>                    
                </div>
            <?endforeach;?>
        </div>

        <div class="tads-component__btn-group">
            <div class="tads-component__btn-group-before">
                Посмотрите, что я могу предложить:
            </div>

            <?foreach($arTechnologies as $item):?>
                <div class="tads-component__btn">
                    <?=$item['icon'];?>
                </div>
            <?endforeach;?>

            <div class="tads-component__btn-group-after">
                Нажмите на иконку и узнайте больше о моем опыте работы с выбранной технологией
            </div>
        </div>
    </div>
</div>

<div class="projects">
    <a name="projects"></a>

    <?php 
    require_once($_SERVER['DOCUMENT_ROOT'] . '/content/projects.php');
    ?>

    <h2 class='main-caption'>Копилка проектов</h2>

    <div class="projects-slider slider">
        <?foreach($arProjects as $item):?>
            <div class="projects-slider__item slider__item">
                <div class="slider__picture" 
                    style='background-image: url(<?=$item['picture_url'];?>);'>
                </div>

                <div class="slider__info">
                    <span class='slider__title'>
                        <?=$item['name'];?>
                    </span>

                    <p class="slider__desc">
                        <?=$item['description'];?>
                    </p>

                    <p class="slider__tech">
                        <?=implode(' | ', $item['technologies']);?>
                    </p>

                    <a href="<?=$item['detail_url']?>" target="_blank" rel="noopener noreferrer" class='btn'>Смотреть результат</a>
                </div>                   
            </div>
        <?endforeach;?>
    </div>
</div>

<div class="contacts">
    <a name="contacts"></a>

    <h2 class='main-caption'>Появилась идея?</h2>

    <form action="#" class="contacts__send-mail main-form" method='post'>
        <span class='main-form__title'>
            Напишите мне
        </span>

        <input type="text" name="send_name" id="" placeholder="Ваше имя">

        <input type="text" name="send_email" id="" placeholder="Ваша почта">

        <textarea name="send_mess" id="" cols="30" rows="3" placeholder="Опишите Ваш проект"></textarea>

        <div class="send_spam-block spam-block">
            <span class="spam-block__title">Защита от СПАМ'а</span>

            <div class="spam-line">
                <span class="spam-line__slider"></span>
            </div>
        </div>

        <button type="submit" class='btn'>Отправить</button>
    </form>

    <div class="contacts-card">
        <?php 
        require_once($_SERVER['DOCUMENT_ROOT'] . '/content/contacts.php');
        foreach($arContacts as $item):?>
            <div class="contact__item">
                <div class="contact__icon"></div>
                <span class="contact__text"><?=$item['text']?></span>
            </div>
        <?endforeach;?>
    </div>
</div>
