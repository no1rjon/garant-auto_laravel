@extends('static')

    @section('title') Транспорт @endsection
    @section('tab-product')  border-orange-400 border-b-2 pb-1 @endsection

    @section('main_content')

    <!-- main -->
    <main class="mx-auto px-3 lg:px-0 max-w-lg lg:max-w-6xl mt-16 overflow-x-hidden lg:overflow-x-visible scroll-x-">
        <ul class="pl-0 lg:pl-36 text-sm text-[#111831] font-light flex gap-2 pb-4">
            <li><a href="{{ route('product') }}">Каталог</a></li>
            <span>&gt;</span>
            <li><a href="{{ route('category') }}">Фургоны в наличии</a></li>
            <span>&gt;</span>
            <li><a href="#">КамАЗ 6522</a></li>
        </ul>

        <section class="flex flex-col lg:flex-row gap-x-4 justify-between mt-12">
            <h2 class="inline lg:hidden font-overpass font-extrabold text-3xl mb-6 -order-1">КамАЗ 6522</h2>
            <div class="flex lg:hidden gap-2 items-center mb-6 -order-1">
                <span class="text-xl font-light">от</span>
                <span class="font-overpass font-light text-2xl">582000</span>
            </div>
            <article class="flex flex-col gap-y-16 w-full lg:w-[35%]">
                <h2 class="hidden lg:inline font-overpass font-extrabold text-5xl">КамАЗ 6522</h2>
                <div class="hidden lg:flex gap-2 items-center">
                    <span class="text-xl font-light">от</span>
                    <span class="font-overpass font-light text-3xl">582000</span>
                </div>
                

                <div class="flex flex-col gap-y-8">
                    <p class="font-light text-sm">
                        КамАЗ-6522 — российский крупнотоннажный грузовой автомобиль-самосвал повышенной проходимости, 
                        выпускаемый Камским автомобильным заводом (КамАЗ) с 2004 года по настоящее время.
                    </p>
                    <ul class="flex flex-col gap-y-4">
                        <li class="gap-10 grid grid-cols-2">
                            <span class="font-semibold text-sm pr-4">Грузоподъёмность:</span>
                            <span class="font-light text-sm">18000 кг</span>
                        </li>
                        <li class="gap-10 grid grid-cols-2">
                            <span class="font-semibold text-sm pr-4">Масса:</span>
                            <span class="font-light text-sm">13 950 кг</span>
                        </li>
                        <li class="gap-10 lg:gap-0 grid grid-cols-2">
                            <span class="font-semibold text-sm pr-4">Похожие модели:</span>
                            <span class="font-light text-sm">Урал-6370, МАЗ-6317</span>
                        </li>
                    </ul>
                </div>
            </article>

            <div id="imageZoom-open" class="-order-1 lg:order-1 mb-6 lg:mb-0">
                <img class="w-full h-full" src="img/popular_query/Frame_1.png" alt="">
            </div>
        </section>

        <section class="my-36">
            <h3 class="section-title mb-20">Техническое описание</h3>
            
            <div class="about-vehicle border-t-4 grid grid-cols-2 items-center">
                <span class="font-semibold text-xl">Шасси</span>
                <span>43118-3027-50</span>
            </div>

            <div class="about-vehicle border-t-4 grid grid-cols-2 items-center">
                <span class="font-semibold text-xl">Количество посадочных мест</span>
                <span>36+2</span>
            </div>

            <div class="about-vehicle border-t-4 grid grid-cols-2 items-center">
                <span class="font-semibold text-xl">Фургон</span>
                <div class="flex flex-col gap-y-6">
                    <span>Габаритные размеры: 7860x2500x2100 мм</span>
                    <span>Технология производства: каркасная</span>
                    <span>Форма: прямоугольная</span>
                </div>
            </div>

            <div class="about-vehicle border-t-4 border-b-4 grid grid-cols-2 items-center">
                <span class="font-semibold text-xl">Стены</span>
                <div class="flex flex-col gap-y-6">
                    <span>Наружная обшивка: плакированная сталь 0,55 мм</span>
                    <span>Утеплитель: ППС 80 мм</span>
                    <span>Внутренняя обшивка: ПВХ панели 5 мм белые</span>
                    <span>Обвязка: анодированный алюминий</span>
                    <span>Уголки: окрашенная оцинкованная сталь</span>
                </div>
            </div>

        </section>

        <article id="imageZoom-modal" class="hidden fixed w-full h-full inset-0 z-20">
            <div id="imageZoom-close" class=" fixed w-full h-full bg-black opacity-50 z-20">
            </div>
            <div class="w-[100%] h-[35%] top-[32.5%] left-0 lg:w-[50%] lg:h-[60%] lg:top-[20%] lg:left-[25%] fixed z-30 opacity-100">
                <img class="w-full h-full" src="img/popular_query/Frame_1.png" alt="">
            </div>
        </article>
        
    </main>

    @endsection