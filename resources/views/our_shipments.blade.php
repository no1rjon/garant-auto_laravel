@extends('static')

    @section('title') Наши отгрузки @endsection
    @section('tab-our_shipments')  border-orange-400 border-b-2 pb-1 @endsection    

    @section('main_content')

    <main class="mx-auto px-3 lg:px-0 max-w-lg lg:max-w-6xl mt-16">
        <section class="">
            <h2 class="text-4xl lg:text-5xl font-extrabold font-overpass pb-12 pl-0 sm:pl-16 lg:pl-40">Наши отгрузки</h2>
            <div class="grid grid-cols-2 justify-center gap-2">
                <div class="shipment-post">
                    <img src="img/shipment/shipment_second.png">
                    <div class="shipment-post__article">
                        <p class="text-sm lg:text-xl font-semibold overflow-hidden text-ellipsis">
                            Клиенту из Москвы, передан крупный экскаватор для сноса зданий-Doosan 360 будет работать с гидроножницами.<br>
                            - Экскаватор-разрушитель Doosan обладает высоким уровнем маневренности;<br>
                            - Для машиниста в процессе работы созданы комфортные условия.<br>
                            - Оператор, защищен от попадания пыли в глаза, так как это предусмотрено особенностями конструкции техники, и что крайне важно, ничего не мешает обзору.
                        </p>
                        <div class="flex justify-end h-fit mt-1">
                            <button class="shipments-open">
                                <svg class="h-[50px] w-[50px]" viewBox="0 0 101 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M74.3757 20.7424L50.3111 20.7424L50.3111 12.9204L87.9075 12.9204L87.9075 50.0221L79.9812 50.0221V26.2741L53.4918 52.4151L53.1139 52.788L26.6244 78.9289H50.689L50.689 86.7508L13.0927 86.7508L13.0927 49.6492H21.0189L21.0189 73.3971L47.5084 47.2562L47.8862 46.8833L74.3757 20.7424Z" fill="#111831"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="shipment-post">
                    <img src="img/shipment/shipment_first.png">
                    <div class="shipment-post__article">
                        <p class="text-sm lg:text-xl font-semibold overflow-hidden text-ellipsis">    
                            Тяжелый самосвал КамАЗ 6522 передан клиенту для работы с инертными материалами.<br>
                            Самосвал КАМАЗ-6522 тяжелый полноприводной грузовик с двускатной ошиновкой и грузоподъемностью до 20 т.
                            Благодаря своим характеристикам КАМАЗ-6522 весьма востребован среди горнодобывающих компаний и предприятий ведущих разработку карьеров,
                            строительство автомобильных и железных дорог или иных инфраструктурных объектов.
                        </p>
                        <div class="flex justify-end h-fit mt-1">
                            <button class="shipments-open">
                                <svg class="h-[50px] w-[50px]" viewBox="0 0 101 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M74.3757 20.7424L50.3111 20.7424L50.3111 12.9204L87.9075 12.9204L87.9075 50.0221L79.9812 50.0221V26.2741L53.4918 52.4151L53.1139 52.788L26.6244 78.9289H50.689L50.689 86.7508L13.0927 86.7508L13.0927 49.6492H21.0189L21.0189 73.3971L47.5084 47.2562L47.8862 46.8833L74.3757 20.7424Z" fill="#111831"/>
                                </svg>
                            </button>
                        </div>
                </div>
            </div>
        </section>
    </main>

    <article id="shipments-modal" class="fixed hidden items-center justify-center z-20 top-0 left-0 h-full w-full">
        {{-- bg --}}
        <div class="fixed w-full h-full bg-black opacity-70"></div>
        {{-- window --}}
        <div class="ourShipmentsSwiper relative w-[90%] h-[70%] lg:w-[70vw] lg:h-[80vh]">
            <svg id="shipments-close" class="cursor-pointer z-30 absolute -top-20 right-2 lg:top-2 lg:right-2 fill-white opacity-50 hover:opacity-100 lg:opacity-70 lg:fill-[#3C4155]" id="close-shipment" width="42" height="42" viewBox="0 0 30 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="2" y="21.2132" width="30" height="5" transform="rotate(-45 2 21.2132)"/>
                <rect width="30" height="5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 2.37427 3.53553)"/>
            </svg>
            <div class="swiper-wrapper w-full h-full">
               <div class="swiper-slide flex flex-col lg:flex-row">

                    {{-- inserted swiper img --}}
                    <div class="ourShipmentsSwiperImgIn overflow-hidden relative bg-white">
                        <div class="swiper-wrapper w-full h-[80%] lg:w-[60%]">
                            <div class="swiper-slide"><img class="h-full w-full object-cover" src="/img/shipment/shipment_third.png" alt=""></div>
                            <div class="swiper-slide"><img class="h-full w-full object-cover" src="/img/shipment/shipment_first.png" alt=""></div>
                        </div>
                        <div class="ourShipmentsSwiperImgIn-pagination absolute bottom-10 right-[40%] z-20 flex justify-center"></div>
                    </div>
                    {{-- text --}}
                    <article class="bg-[#FF9B00F2] w-full h-[60%] md:h-[40%] lg:h-full lg:w-[40%] flex flex-col px-4">
                        <div class="flex flex-col content-between justify-between overflow-hidden h-full w-full">
                            <div class="h-[80%] overflow-hidden pt-10 lg:pt-20">
                                <p class="h-full font-semibold text-xl overflow-y-auto">
                                    Клиенту из Москвы, передан крупный экскаватор для сноса зданий-Doosan 360 будет работать с гидроножницами.<br>
                                    Клиенту из Москвы, передан крупный экскаватор для сноса зданий-Doosan 360 будет работать с гидроножницами.<br>
                                    Клиенту из Москвы, передан крупный экскаватор для сноса зданий-Doosan 360 будет работать с гидроножницами.<br>
                                    Клиенту из Москвы, передан крупный экскаватор для сноса зданий-Doosan 360 будет работать с гидроножницами.<br>
                                    Клиенту из Москвы, передан крупный экскаватор для сноса зданий-Doosan 360 будет работать с гидроножницами.<br>
                                    Клиенту из Москвы, передан крупный экскаватор для сноса зданий-Doosan 360 будет работать с гидроножницами.<br>
                                    - Экскаватор-разрушитель Doosan обладает высоким уровнем маневренности;<br>
                                    - Для машиниста в процессе работы созданы комфортные условия.<br>
                                    - Оператор, защищен от попадания пыли в глаза, так как это предусмотрено особенностями конструкции техники, и что крайне важно, ничего не мешает обзору.
                                </p>
                            </div>
                            <div class="flex justify-between items-end py-5">
                                <svg class="fill-[#3C4155] ourShipmentsSwiper-button-prev" width="50" height="50" viewBox="0 0 101 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M58.3865 80.0209L34.4428 56.0773H87.9075V44.9226H34.4428L58.3865 20.9789L50.5001 13.0925L13.0927 50.4999L50.5001 87.9073L58.3865 80.0209Z"/>
                                </svg>
                                
                                <svg class="fill-[#3C4155] ourShipmentsSwiper-button-next" width="50" height="50" viewBox="0 0 101 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M42.6137 80.0212L66.5573 56.0775H13.0927V44.9228H66.5573L42.6137 20.9792L50.5001 13.0928L87.9075 50.5002L50.5001 87.9076L42.6137 80.0212Z"/>
                                </svg>
                            </div>
                        </div>
                    </article>
                </div> 
               
                <div class="swiper-slide flex flex-col lg:flex-row">

                    {{-- inserted swiper img --}}
                    <div class="ourShipmentsSwiperImgIn overflow-hidden relative bg-white">
                        <div class="swiper-wrapper w-full h-[80%] lg:w-[60%]">
                            <div class="swiper-slide"><img class="h-full w-full object-cover" src="/img/shipment/shipment_second.png" alt=""></div>
                            <div class="swiper-slide"><img class="h-full w-full object-cover" src="/img/shipment/shipment_second.png" alt=""></div>
                        </div>
                        <div class="ourShipmentsSwiperImgIn-pagination absolute bottom-10 right-[40%] z-20 flex justify-center"></div>
                    </div>
                    {{-- text --}}
                    <article class="bg-[#FF9B00F2] w-full h-[60%] md:h-[40%] lg:h-full lg:w-[40%] flex flex-col px-4">
                        <div class="flex flex-col content-between justify-between overflow-hidden h-full w-full">
                            <div class="h-[80%] overflow-hidden pt-10 lg:pt-20">
                                <p class="h-full font-semibold text-xl overflow-y-auto overflow-x-hidden">
                                    Тяжелый самосвал КамАЗ 6522 передан клиенту для работы с инертными материалами.<br>
                                    Самосвал КАМАЗ-6522 тяжелый полноприводной грузовик с двускатной ошиновкой и грузоподъемностью до 20 т.
                                    Благодаря своим характеристикам КАМАЗ-6522 весьма востребован среди горнодобывающих компаний и предприятий ведущих разработку карьеров,
                                    строительство автомобильных и железных дорог или иных инфраструктурных объектов.
                                </p>
                            </div>
                            <div class="flex justify-between items-end py-5">
                                <svg class="fill-[#3C4155] ourShipmentsSwiper-button-prev" width="50" height="50" viewBox="0 0 101 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M58.3865 80.0209L34.4428 56.0773H87.9075V44.9226H34.4428L58.3865 20.9789L50.5001 13.0925L13.0927 50.4999L50.5001 87.9073L58.3865 80.0209Z"/>
                                </svg>
                                
                                <svg class="fill-[#3C4155] ourShipmentsSwiper-button-next" width="50" height="50" viewBox="0 0 101 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M42.6137 80.0212L66.5573 56.0775H13.0927V44.9228H66.5573L42.6137 20.9792L50.5001 13.0928L87.9075 50.5002L50.5001 87.9076L42.6137 80.0212Z"/>
                                </svg>
                            </div>
                        </div>
                    </article>
                </div> 


        </div>
    </article>

    <script src="{{ asset('js/modal-shipments.js') }}"></script>
    @endsection