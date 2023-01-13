@extends('static')

    @section('title') Наши отгрузки @endsection
        
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
                            <button>
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
                            Самосвал КАМАЗ-6522 тяжелый полноприводной грузовик с двускатной ошиновкой и грузоподъемностью до 20 т. Благодаря своим характеристикам КАМАЗ-6522 весьма востребован среди горнодобывающих компаний и предприятий ведущих разработку карьеров, строительство автомобильных и железных дорог или иных инфраструктурных объектов.
                        </p>
                        <div class="flex justify-end h-fit mt-1">
                            <button>
                                <svg class="h-[50px] w-[50px]" viewBox="0 0 101 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M74.3757 20.7424L50.3111 20.7424L50.3111 12.9204L87.9075 12.9204L87.9075 50.0221L79.9812 50.0221V26.2741L53.4918 52.4151L53.1139 52.788L26.6244 78.9289H50.689L50.689 86.7508L13.0927 86.7508L13.0927 49.6492H21.0189L21.0189 73.3971L47.5084 47.2562L47.8862 46.8833L74.3757 20.7424Z" fill="#111831"/>
                                </svg>
                            </button>
                        </div>
                </div>
            </div>
        </section>
    </main>

    @endsection