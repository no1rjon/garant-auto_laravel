@extends('static')

    @section('title') Каталог @endsection

    @section('main_content')

    <main class="mx-auto px-3 lg:px-0 max-w-lg lg:max-w-6xl mt-16">
        <section>
            <h2 class="section-title">Каталог</h2>
            <div class="grid grid-cols-3 gap-5 mt-20 mx-auto">
                <div class="card">
                    <h3 class="card__title">Фургоны в наличии</h3>
                    <img src="img/card/card1.png" alt="">
                    <a href="{{ route('category') }}" class="card__link">
                        <span class="card__link_text">Перейти</span>
                        <img class="" src="img/icon/icon_arrow_45.svg">
                    </a>
                </div>
                <div class="card">
                    <h3 class="card__title">Вахтовые автобусы</h3>
                    <img src="img/card/card2.png" alt="">
                    <a href="#" class="card__link">
                        <span class="card__link_text">Перейти</span>
                        <img class="" src="img/icon/icon_arrow_45.svg">
                    </a>
                </div>
                <div class="card">
                    <h3 class="card__title">Передвижные мастерские</h3>
                    <img src="img/card/card3.png" alt="">
                    <a href="#" class="card__link">
                        <span class="card__link_text">Перейти</span>
                        <img class="" src="img/icon/icon_arrow_45.svg">
                    </a>
                </div>
                <div class="card">
                    <h3 class="card__title">Передвижные лаборатории</h3>
                    <img src="img/card/card4.png" alt="">
                    <a href="#" class="card__link">
                        <span class="card__link_text">Перейти</span>
                        <img class="" src="img/icon/icon_arrow_45.svg">
                    </a>
                </div>
                <div class="card">
                    <h3 class="card__title">Спецтехника с краном-манипулятором</h3>
                    <img src="img/card/card5.png" alt="">
                    <a href="#" class="card__link">
                        <span class="card__link_text">Перейти</span>
                        <img class="" src="img/icon/icon_arrow_45.svg">
                    </a>
                </div>
                <div class="card">
                    <h3 class="card__title">Спецтехника МЧС</h3>
                    <img src="img/card/card6.png" alt="">
                    <a href="#" class="card__link">
                        <span class="card__link_text">Перейти</span>
                        <img class="" src="img/icon/icon_arrow_45.svg">
                    </a>
                </div>
                <div class="card">
                    <h3 class="card__title">Спецтехника МВД</h3>
                    <img src="img/card/card7.png" alt="">
                    <a href="#" class="card__link">
                        <span class="card__link_text">Перейти</span>
                        <img class="" src="img/icon/icon_arrow_45.svg">
                    </a>
                </div>
                <div class="card">
                    <h3 class="card__title">Изотермические фургоны</h3>
                    <img src="img/card/card8.png" alt="">
                    <a href="#" class="card__link">
                        <span class="card__link_text">Перейти</span>
                        <img class="" src="img/icon/icon_arrow_45.svg">
                    </a>
                </div>
                <div class="card">
                    <h3 class="card__title">Цельнометаллические фургоны</h3>
                    <img src="img/card/card9.png" alt="">
                    <a href="#" class="card__link">
                        <span class="card__link_text">Перейти</span>
                        <img class="" src="img/icon/icon_arrow_45.svg">
                    </a>
                </div>
                <div class="card">
                    <h3 class="card__title">Фургоны по индивидуальному заказу</h3>
                    <img src="img/card/card10.png" alt="">
                    <a href="#" class="card__link">
                        <span class="card__link_text">Перейти</span>
                        <img class="" src="img/icon/icon_arrow_45.svg">
                    </a>
                </div>
                <div class="card">
                    <h3 class="card__title">Контейнеры различного назначения</h3>
                    <img src="img/card/card11.png" alt="">
                    <a href="#" class="card__link">
                        <span class="card__link_text">Перейти</span>
                        <img class="" src="img/icon/icon_arrow_45.svg">
                    </a>
                </div>
            </div>
        </section>
    </main>

    @endsection