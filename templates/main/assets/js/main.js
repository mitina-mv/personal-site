window.addEventListener('DOMContentLoaded', () => {
    let tabs = document.querySelectorAll('.tabs-component');

    tabs.forEach((component) => {
        let contentCards = component.querySelectorAll('.tabs-component__content:not(.tabs-component__content_default)'),
            btns = component.querySelectorAll('.tabs-component__btn');

        btns.forEach((btn, index) => {
            btn.addEventListener('click', function() {
                document.querySelector('.tabs-component__content_default').classList.remove('tabs-component__content_active');

                contentCards.forEach((item, cindex) => {
                    item.classList.remove('tabs-component__content_active');
                    btns[cindex].classList.remove('tabs-component__btn_active');
                });

                contentCards[index].classList.add('tabs-component__content_active');
                btn.classList.add('tabs-component__btn_active');
            })
        }) 
    })

    let menuBtn = document.querySelector('.menu__burger__container-btn');
    let menuContainer = document.querySelector('.menu');

    menuBtn.addEventListener('click', function() {
        menuContainer.classList.toggle('menu_open');
    })
})
