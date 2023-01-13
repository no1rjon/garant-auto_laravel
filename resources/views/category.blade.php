@extends('static')

    @section('title') Категория @endsection

    @section('main_content')

    <!-- main -->
    <main class="mx-auto px-3 lg:px-0 max-w-lg lg:max-w-6xl mt-16 overflow-x-hidden lg:overflow-x-visible scroll-x-">
        <ul class="pl-0 lg:pl-36 text-sm text-[#111831] font-light flex gap-2 pb-4">
            <li><a href="{{ route('product') }}">Каталог</a></li>
            <span>&gt;</span>
            <li><a href="{{ route('category') }}">Фургоны в наличии</a></li>
        </ul>
        
        <section>
            <h2 class="section-title pb-11">Фургоны в наличи</h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 lg:grid-rows-1 items-center justify-center gap-x-5 gap-y-5">
                <div><img class="" src="img/card/card_vans.png"></div>
                <div class="border-2 border-[#FF9B00] px-7 pt-7 pb-7 w-[100%] h-[100%]">
                    <p class="font-light text-xl">
                        Завод ПРОМАВТО специализируется на производстве фургонов на базе грузовых автомобилей.
                        Производственный процесс осуществляется квалифицированными специалистами с использованием современного оборудования и высококачественных материалов.
                        Благодаря прочной и надежной конструкции обеспечивается многолетний срок эксплуатации.
                        Продуманность каждого конструктивного элемента и установка дополнительного оборудования/приспособлений
                        позволяет купить фургон на базе КАМАЗ, ГАЗ, УРАЛ для выполнения задач любой сложности.
                    </p>
                </div>
            </div>
            <div class="pt-4">
                <form action="">
                    <div class="flex flex-col lg:flex-row gap-4">
                        <div class="w-[100%] lg:w-[50%]">
                            <select class="w-[100%]" name="">
                                <option>Тип</option>
                                <option>Пункт 1</option>
                                <option>Пункт 2</option>
                            </select>
                        </div>
                        <div class="w-[100%] lg:w-[50%]">
                            <select class="w-[100%]" name="" aria-placeholder="Модель">
                                <option>Модель</option>
                                <option>Пункт 1</option>
                                <option>Пункт 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex justify-end mt-4">
                        <input class="text-xl font-light text-[#3C4155] cursor-pointer hover:text-[#3c4155c0]" type="reset" value="Сброс">
                    </div>
                </form>
            </div>
        </section>
        <section>
            <h3 class="section-title mb-16 mt-28">Популярные запросы</h3>
            
            <div class="flex flex-nowrap justify-between gap-x-5">
                <div class="popQuerySwiper-button-next self-end w-fit">
                    <svg class="fill-black hover:fill-orange-400 transition-all duration-200" width="50" height="50" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M39.6553 4.66675L12.8335 31.4885L12.8451 31.5001L12.8335 31.5117L39.6553 58.3334L45.529 52.4597L24.5693 31.5001L45.529 10.5404L39.6553 4.66675Z"/>
                    </svg>
                </div>  

                <div class=" overflow-hidden">
                    <div class="popQuerySwiper">                   
                        <div class="swiper-wrapper p-0 list-none">   

                        <div class="swiper-slide flex flex-col">
                            <div class="">
                                <div>
                                    <a class="pop-query__card_link" href="{{ route('vehicle') }}">
                                        <span class="font-bold text-xl lg:text-3xl font-overapss">КамАЗ 6522</span>
                                        <div class="flex flex-col xl:flex-row xl:justify-between">
                                            <span class="before-price">5 820 000 ₽</span>

                                            <div class="relative flex gap-2 self-end xl:self-center">
                                                <span class="self-center text-[#3C4155] font-semibold">Подробнее</span>
                                                <svg class="fill-[#3C4155]" width="32" height="32" viewBox="0 0 46 46" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.953 16.0326L26.375 16.0326L9.1568 33.2508L12.7492 36.8432L29.9674 19.625L29.9674 35.047L35.047 35.047V10.953H10.953L10.953 16.0326Z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <div class="popQueryImageSwiper relative overflow-hidden">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="img/popular_query/Frame_1.png">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="img/popular_query/Frame_1.png">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="img/popular_query/Frame_1.png">
                                            </div>
                                        </div>
                                        <div class="z-[1] absolute bottom-2 right-[30%] sm:right-[40%]">
                                            <div class="popQueryImageSwiper-pagination z-[1]"></div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide flex flex-col">
                            <div class="">
                                <div>
                                    <a class="pop-query__card_link" href="{{ route('vehicle') }}">
                                        <span class="font-bold text-xl lg:text-3xl font-overapss">КамАЗ 5490</span>
                                        <div class="flex flex-col xl:flex-row xl:justify-between">
                                            <span class="before-price">100 000 000 ₽</span>

                                            <div class="relative flex gap-2 self-end xl:self-center">
                                                <span class="self-center text-[#3C4155] font-semibold">Подробнее</span>
                                                <svg class="fill-[#3C4155]" width="32" height="32" viewBox="0 0 46 46" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.953 16.0326L26.375 16.0326L9.1568 33.2508L12.7492 36.8432L29.9674 19.625L29.9674 35.047L35.047 35.047V10.953H10.953L10.953 16.0326Z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <div class="popQueryImageSwiper relative overflow-hidden">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="img/popular_query/Frame_2.png">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="img/popular_query/Frame_2.png">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="img/popular_query/Frame_2.png">
                                            </div>
                                        </div>
                                        <div class="z-[1] absolute bottom-2 right-[30%] sm:right-[40%]">
                                            <div class="popQueryImageSwiper-pagination z-[1]"></div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide flex flex-col">
                            <div class="">
                                <div>
                                    <a class="pop-query__card_link" href="{{ route('vehicle') }}">
                                        <span class="font-bold text-xl lg:text-3xl font-overapss">Doosan 360</span>
                                        <div class="flex flex-col xl:flex-row xl:justify-between">
                                            <span class="before-price">16 957 600 ₽</span>

                                            <div class="relative flex gap-2 self-end xl:self-center">
                                                <span class="self-center text-[#3C4155] font-semibold">Подробнее</span>
                                                <svg class="fill-[#3C4155]" width="32" height="32" viewBox="0 0 46 46" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.953 16.0326L26.375 16.0326L9.1568 33.2508L12.7492 36.8432L29.9674 19.625L29.9674 35.047L35.047 35.047V10.953H10.953L10.953 16.0326Z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <div class="popQueryImageSwiper relative overflow-hidden">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="img/popular_query/Frame_3.png">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="img/popular_query/Frame_3.png">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="img/popular_query/Frame_3.png">
                                            </div>
                                        </div>
                                        <div class="z-[1] absolute bottom-2  right-[30%] sm:right-[40%]">
                                            <div class="popQueryImageSwiper-pagination z-[1]"></div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>

                        </div>
                    </div>
                </div>

                <div class="popQuerySwiper-button-prev self-end w-fit">
                    <svg class="fill-black hover:fill-orange-400 transition-all duration-200" width="50" height="50" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M23.345 58.3332L50.1668 31.5115L50.1552 31.4999L50.1668 31.4883L23.345 4.66657L17.4713 10.5403L38.4309 31.4999L17.4713 52.4595L23.345 58.3332Z"/>
                    </svg>
                </div>
            </div>

           

        </section>
    </main>

    @endsection