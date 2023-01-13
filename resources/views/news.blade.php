@extends('static')

    @section('title') Новости @endsection

    @section('main_content')

    <main class="mx-auto px-3 lg:px-0 max-w-lg lg:max-w-6xl mt-16">

        <ul class="pl-0 lg:pl-36 text-sm text-[#111831] font-light flex gap-2 pb-4">
            <li><a href=" {{ route('home') }}">Главная</a></li>
            <span>&gt;</span>
            <li><a href="#">Новости</a></li>
        </ul>

        <section class="mt-2">
            <h2 class="section-title">Новости</h2>
            <div class="grid grid-cols-4 mt-24 gap-y-2 lg:gap-x-20 lg:gap-y-14">
                <div class="block-news">
                    <div class="block-news__title">
                        <h3>АО «КАЗ» представляет новый проект</h3>
                        <span>22.01.2022</span>
                    </div>
                    <a href="#" class="block-news__link">
                        <p>Высотныйколенчато-телескопический автогидроподъемник</p>
                        <img src="img/icon/arrow45_orange.svg">
                    </a>
                </div>
                <div class="block-news">
                    <div class="block-news__title">
                        <h3>Мусоровозный агрегат eCollect</h3>
                        <span>01.08.2021</span>
                    </div>
                    <a href="#" class="block-news__link">
                        <p>Теперь новаторские разработки британцев перевоплотились в семейство eRCV</p>
                        <img src="img/icon/arrow45_orange.svg">
                    </a>
                </div>
                <div class="block-news">
                    <div class="block-news__title">
                        <h3>Кузовостроители обращают взор на азиатские машины</h3>
                        <span>08.12.2022</span>
                    </div>
                    <a href="#" class="block-news__link">
                        <p>Заводы-«бодибилдеры» всё активнее используют шасси  европейских производителей</p>
                        <img src="img/icon/arrow45_orange.svg">
                    </a>
                </div>
                <div class="block-news">
                    <div class="block-news__title">
                        <h3>GarantAuto сделали лучший сайт в отрасли</h3>
                        <span>01.04.2021</span>
                    </div>
                    <a href="#" class="block-news__link ">
                        <p>Кто бы сомневался ведь его Кирилл верстал</p>
                        <img src="img/icon/arrow45_orange.svg">
                    </a>
                </div>
            </div>
        </section>      
    </main>

    @endsection