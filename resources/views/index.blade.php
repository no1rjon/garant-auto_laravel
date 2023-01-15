@extends('static')

    @section('title') Главная @endsection
    @section('body-background') bg-[url('/img/background/group.png')] @endsection

    
    @section('main_content')
  
    <!-- main -->
    <main class="mx-auto px-3 lg:px-0 max-w-lg lg:max-w-6xl mt-16">
        <!-- section gallery -->
        <section>
            <div class="flex flex-col gap-y-5 min-w-0">
                <div class="gallerySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide flex flex-col content-between gap-14"><img class="" src="{{ asset('img/card/main_card.png') }}"></div>
                        <div class="swiper-slide flex flex-col content-between gap-14"><img class="" src="{{ asset('img/card/main_card.png') }}"></div>
                        <div class="swiper-slide flex flex-col content-between gap-14"><img class="" src="{{ asset('img/card/main_card.png') }}"></div>
                        <div class="swiper-slide flex flex-col content-between gap-14"><img class="" src="{{ asset('img/card/main_card.png') }}"></div>
                        <div class="swiper-slide flex flex-col content-between gap-14"><img class="" src="{{ asset('img/card/main_card.png') }}"></div>
                        <div class="swiper-slide flex flex-col content-between gap-14"><img class="" src="{{ asset('img/card/main_card.png') }}"></div>
                        <div class="swiper-slide flex flex-col content-between gap-14"><img class="" src="{{ asset('img/card/main_card.png') }}"></div>
                        <div class="swiper-slide flex flex-col content-between gap-14"><img class="" src="{{ asset('img/card/main_card.png') }}"></div>
                        <div class="swiper-slide flex flex-col content-between gap-14"><img class="" src="{{ asset('img/card/main_card.png') }}"></div>
                        <div class="swiper-slide flex flex-col content-between gap-14"><img class="" src="{{ asset('img/card/main_card.png') }}"></div>
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="gallerySwiper-button-prev flex justify-start">
                        <svg class="w-[45%] lg:w-[100%] fill-black hover:fill-orange-400 transition duration-200" width="63" height="63" viewBox="0 0 63 63" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M39.6553 4.66675L12.8335 31.4885L12.8451 31.5001L12.8335 31.5117L39.6553 58.3334L45.529 52.4597L24.5693 31.5001L45.529 10.5404L39.6553 4.66675Z"/>
                        </svg>
                    </div>
                    <div class="justify-self-center self-center"><div class="gallerySwiper-pagination"></div></div>
                    <div class="gallerySwiper-button-next flex justify-end">
                        <svg class="w-[45%] lg:w-[100%] fill-black hover:fill-orange-400 transition duration-200" width="63" height="63" viewBox="0 0 63 63" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M23.345 58.3332L50.1668 31.5115L50.1552 31.4999L50.1668 31.4883L23.345 4.66657L17.4713 10.5403L38.4309 31.4999L17.4713 52.4595L23.345 58.3332Z"/>
                        </svg>
                    </div>
                </div>
            </div>


        </section>

        <!-- section catalog -->
        <section class="relative mt-28 mx-auto">
            <h2 class="section-title">Каталог Спецтехники</h2>
            <div class="grid grid-cols-4 gap-5 mt-20 mx-auto">
                <div class="card">
                    <h3 class="card__title">Фургоны в наличии</h3>
                    <img src="img/card/card1.png" alt="">
                    <a href="category.html" class="card__link">
                        <span class="card__link_text">Перейти</span>
                        <img class="" src="img/icon/icon_arrow_45.svg">
                    </a>
                </div>
                <div class="card">
                    <h3 class="card__title">Вахтовые автобусы</h3>
                    <img src="img/card/card2.png" alt="">
                    <a href="#" class="card__link">
                        <span class="card__link_text">Перейти</span>
                        <img src="img/icon/icon_arrow_45.svg">
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
                    <h3 class="card__title">Жилые модули</h3>
                    <img src="img/card/card4.png" alt="">
                    <a href="#" class="card__link">
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
                </div >
                <div class="card">
                    <h3 class="card__title">Передвижные мастерские</h3>
                    <img src="img/card/card3.png" alt="">
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
                    <h3 class="card__title">Жилые модули</h3>
                    <img src="img/card/card4.png" alt="">
                    <a href="#" class="card__link">
                        <span class="card__link_text">Перейти</span>
                        <img class="" src="img/icon/icon_arrow_45.svg">
                    </a>
                </div>
                <div class="card"> 
                    <h3 class="card__title">Жилые модули</h3>
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
                    <h3 class="card__title">Спецтехника с краном-манипулятором</h3>
                    <img src="img/card/card5.png" alt="">
                    <a href="#" class="card__link">
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
                    <h3 class="card__title">Жилые модули</h3>
                    <img src="img/card/card4.png" alt="">
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
            </div>
        </section>

        <!-- section news -->
        <section class="mt-36">
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
                <div class="block-news block-news_overflow">
                    <div class="block-news__title">
                        <h3>Кузовостроители обращают взор на азиатские машины</h3>
                        <span>08.12.2022</span>
                    </div>
                    <a href="#" class="block-news__link">
                        <p>Заводы-«бодибилдеры» всё активнее используют шасси  европейских производителей</p>
                        <img src="img/icon/arrow45_orange.svg">
                    </a>
                </div>
                <div class="block-news block-news_overflow">
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
            <div class="hidden lg:flex justify-end mt-28">
                <a href="{{ route('news') }}" class="block-news__link justify-end">
                    <span class="text-3xl font-bold text-[#00437B] self-center">Перейти к новостям</span>
                    <img class="w-[80px] h-[80px]" src="img/icon/icon_arrow_45.svg">
                </a>
            </div>
        </section>

        <!-- section partners -->
        <section class="mt-36">
            <h2 class="section-title">Наши партнеры</h2>
            <!-- DESCKTOP -->
            <div class="hidden lg:flex items-center justify-between mt-24 pb-10">
                <div class="partnerSwiper-button-prev">
                    <svg class="fill-black w-full hover:fill-orange-400 transition duration-200" width="63" height="63" viewBox="0 0 63 63" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M39.6553 4.66675L12.8335 31.4885L12.8451 31.5001L12.8335 31.5117L39.6553 58.3334L45.529 52.4597L24.5693 31.5001L45.529 10.5404L39.6553 4.66675Z"/>
                    </svg>
                </div>
                <div class="partnerSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide flex flex-col content-between">
                            <div class="flex justify-center items-center h-[120px]"><img class="" src="img/partners/BALT.png"></div>
                            <div class="flex justify-center items-center h-[120px]"><img class="" src="img/partners/VTB.png"></div>
                        </div>
                        <div class="swiper-slide flex flex-col content-between">
                            <div class="flex justify-center items-center h-[120px]"><img class="" src="img/partners/RESO.png"></div>
                            <div class="flex justify-center items-center h-[120px]"><img class="" src="img/partners/CAR.png"></div>
                        </div>
                        <div class="swiper-slide flex flex-col content-between">
                            <div class="flex justify-center items-center h-[120px]"><img class="" src="img/partners/SBER.png"></div>
                            <div class="flex justify-center items-center h-[120px]"><img class="" src="img/partners/EVRO.png"></div>
                        </div>
                        <div class="swiper-slide flex flex-col content-between">
                            <div class="flex justify-center items-center h-[120px]"><img class="" src="img/partners/SOV.png"></div>
                            <div class="flex justify-center items-center h-[120px]"><img class="" src="img/partners/GAZ.png"></div>
                        </div>
                    </div>
                </div>
                <div class="partnerSwiper-button-next">
                    <svg class="fill-black w-full hover:fill-orange-400 transition duration-200" width="63" height="63" viewBox="0 0 63 63" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M23.345 58.3332L50.1668 31.5115L50.1552 31.4999L50.1668 31.4883L23.345 4.66657L17.4713 10.5403L38.4309 31.4999L17.4713 52.4595L23.345 58.3332Z"/>
                    </svg>
                </div>
            </div>
            
            <!-- MOBILE -->
            <div class="flex lg:hidden content-center justify-between mt-24 pb-10">
                <div class="partnerSwiperMobile-button-prev"><img class="w-[100%]" src="img/icon/icon_arrow_left.svg" alt=""></div>
                <div class="partnerSwiperMobile">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="">
                                <img class="" src="img/partners/BALT.png">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="">
                                <img class="" src="img/partners/VTB.png">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="">
                                <img class="" src="img/partners/RESO.png">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="">
                                <img class="" src="img/partners/CAR.png">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="">
                                <img class="" src="img/partners/SBER.png">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="">
                                <img class="" src="img/partners/EVRO.png">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="">
                                <img class="" src="img/partners/SOV.png">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="">
                                <img class="" src="img/partners/GAZ.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="partnerSwiperMobile-button-next"><img class="w-[100%]" src="img/icon/icon_arrow_right.svg" alt=""></div>
            </div>

        </section>

        <!-- our shipments -->
        <section class="mt-36">
            <h2 class="section-title">Наши отгрузки</h2>
            <div class="shipments">
                <div class="shipments__block">
                    <h3 class="row-span-2 font-overpass font-bold text-xl lg:text-3xl pb-16 box-border">Тяжелый самосвал КамАЗ 6522 передан клиенту для работы с инертными материалами</h3>
                    <div class="flex flex-col justify-between gap-4">
                        <span class="flex items-center text-xl font-medium"><img src="img/icon/icon_location.svg"> Нижневартовск</span>
                        <img class="row-span-2" src="img/shipment/shipment_first.png">
                    </div>
                </div>
                <div class="shipments__block">
                    <h3 class="row-span-2 font-overpass font-bold text-xl lg:text-3xl pb-16 box-border">Клиенту из Москвы, передан крупный экскаватор для сноса зданий-Doosan 360 будет работать с гидроножницами (1)</h3>
                    <div class="flex flex-col justify-between gap-4">
                        <span class="flex items-center text-xl font-medium"><img src="img/icon/icon_location.svg"> Москва</span>
                        <img class="row-span-2" src="img/shipment/shipment_second.png">
                    </div>
                </div>
                <a href="{{ route('our_shipments') }}" class="shipments__link">
                    <h3 class="text-blue-900  font-overpass font-bold text-3xl">Посмотреть все отгрузки</h3>
                    <div class="h-40 relative">
                        <svg width="134" height="134" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.953 16.0326L26.375 16.0326L9.1568 33.2508L12.7492 36.8432L29.9674 19.625L29.9674 35.047L35.047 35.047V10.953H10.953L10.953 16.0326Z" fill="#00437B"/>
                        </svg>
                    </div>
                </a>
            </div>
        </section>
    </main>

    @endsection