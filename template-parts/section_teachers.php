<?php

$arResult = [
    'title' => $args['title'],
];

?>

<section class="teachers">
    <div class="container">
        <div class="teachers__title section-title">Талантливые преподаватели</div>
        <div class="teachers__inner">
            <div class="teachers__list list-reset">


                <div class="teachers__item">
                    <a href="./img/teach.png"><img src="./img/teach.png" alt="Ткач Дина Игоревна" class="teachers__photo"></a>
                    <div class="teachers__card">
                        <div class="teachers__name">Ткач
                            <span>Дина Игоревна</span>
                        </div>
                        <span class="teachers__job">Директор, преподаватель английского и испанского</span>
                        <span class="teachers__exp">Опыт работы — 5 лет</span>
                        <div class="teachers__description"><span class="highlight">“</span>  <span class="highlight">“</span></div>
                    </div>
                </div>


            </div>
            <a href="#" class="teachers__link">Посмотреть всех преподавателей</a>
            <div class="teachers__arrows carousel-arrows__container">
                <div class="teachers__arrows--prev carousel-arrows__item carousel-arrows__item--prev" aria-label="Предыдущий слайд">
                    <svg>
                        <use xlink:href="./spritemap.svg#sprite-ar-prev"></use>
                    </svg>
                </div>
                <div class="teachers__arrows--next carousel-arrows__item carousel-arrows__item--next" aria-label="Следующий слайд">
                    <svg>
                        <use xlink:href="./spritemap.svg#sprite-ar-next"></use>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>