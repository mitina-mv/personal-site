<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/init.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/templates/' . $config['template-name'] . '/header.php');
?>

<div class="hello-block container">
    <img src="<?="/templates/" . $config['template-name'] . "/assets/images/main.png"?> " class="hello-block__image">

    <div class="hello-block__title">
        <a name="main"></a>

        <span class="hello-block__subtitle">Привет, я</span>
        <h1 class="hello-block__main-title">Митина Мария</h1>
        <span class="hello-block__subtitle">студентка группы ПИ-20-1 и веб-разработчик</span>
    </div>

    <div class="hello-block__social-link">
        <div class='hello-block__social-title'> 
            Найдите меня
            <span class="arrow_image"></span>
        </div>
        <?php foreach($config['social-link'] as $item):?>
            <a class='social-link__item' href="https://<?=$item['link']?>" target="_blank" rel="noopener noreferrer" style='background-image: url(<?=$item['icon']?>)'>
            </a>
        <?php endforeach;?>
    </div>
</div>

<a name='about'></a>
<h2 class='main-caption'>Мои навыки</h2>

<div class="technologies container">
    <?php 
    require_once($_SERVER['DOCUMENT_ROOT'] . '/content/technologies.php');
    ?>

    <div class="technologies__tabs tabs-component">
        <div class="tabs-component__container">
            <div class="tabs-component__content tabs-component__content_default tabs-component__content_active">
                <span class='tabs-component__content-title'>
                    Люблю дизайн и код одинаково
                </span>
                
                <p class='tabs-component__content-text'>
                    Представьте, как это здорово, когда за дизайн и реализацию отвечает один человек: ситуации, когда в макете было лучше, чем на сайте, будут полностью исключены. Со мной это будет не фантазией, а приятной реальностью.
                </p>                    
            </div>
            <?foreach($arTechnologies as $item):?>
                <div class="tabs-component__content">
                    <span class='tabs-component__content-title'>
                        <?=$item['name'];?>
                    </span>

                    <p class='tabs-component__content-text'>
                        <?=$item['desctiption'];?>
                    </p>                    
                </div>
            <?endforeach;?>
            <div class="tabs-component__content">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?controls=0&amp;list=PL1UWCIDGAMybCbmtUPoqtJJoL-fNnecMR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        <div class="tabs-component__btn-group">
            <div class="tabs-component__btn-group-before">
                Посмотрите, что я могу предложить:
            </div>

            <div class="tabs-component__btn-block">                
                <?foreach($arTechnologies as $item):?>
                    <div class="tabs-component__btn" style='background-image: url("<?=$item['icon'];?>");'>                   
                    </div>
                <?endforeach;?>
                <div class="tabs-component__btn"> видео      
                    </div>
            </div>

            <div class="tabs-component__btn-group-after">
                Нажмите на иконку и узнайте больше о моем опыте работы с выбранной технологией
            </div>
        </div>
    </div>

    <div class="technologies__picture">
        <img src="<?="/templates/" .$config['template-name']. "/assets/images/about.png"?>" alt="" srcset="">
    </div>
</div>

<div class="projects">
    <a name="projects"></a>

    <?php 
    require_once($_SERVER['DOCUMENT_ROOT'] . '/content/projects.php');
    ?>

    <h2 class='main-caption'>Копилка проектов</h2>

    <div class="projects-slider slider swiper">
        <div class="swiper-wrapper">
            <?foreach($arProjects as $item):?>
                <div class="projects-slider__item slider__item swiper-slide">
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

                        <?if($item['detail_url']):?>
                            <a href="<?=$item['detail_url']?>" target="_blank" rel="noopener noreferrer" class='btn'>Смотреть результат</a>
                        <?endif;?>
                    </div>                   
                </div>
            <?endforeach;?>
        </div>  

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <script>
        let swiper = new Swiper(".projects-slider", {
            effect: "cards",
            grabCursor: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</div>

<a name="contacts"></a>
<h2 class='main-caption'>Появилась идея?</h2>

<div class="contacts container">
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
        <span class='main-form__title'>
            Контакты
        </span>
        <?php 
        require_once($_SERVER['DOCUMENT_ROOT'] . '/content/contacts.php');
        foreach($arContacts as $item):?>
            <div class="contact__item">
                <div class="contact__icon" style='background-image: url(<?=$item['icon'];?>);'></div>
                <span class="contact__text"><?=$item['text']?></span>
            </div>
        <?endforeach;?>
    </div>
</div>
<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/templates/' . $config['template-name'] . '/footer.php');
?>