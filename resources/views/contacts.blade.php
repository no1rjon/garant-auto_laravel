@extends('static')

    @section('title') Контакты @endsection
    @section('tab-contacts')  border-orange-400 border-b-2 pb-1 @endsection

    @section('main_content')

    <!-- main -->
    <main class="mx-auto px-3 lg:px-0 max-w-lg lg:max-w-6xl mt-16">
        <section class="mb-24 ">
            <h2 class="font-overpass font-bold text-3xl ml-0 lg:ml-28 mb-20">Связаться с нами</h2>
            <div class="flex flex-col ml-0 lg:ml-28 gap-8">
                <a class="text-[#005F9E] font-overpass font-bold text-3xl " href="mailto:asv@garant-tehnika.ru">asv@garant-tehnika.ru</a>
                <a class="text-[#005F9E] font-overpass font-bold text-3xl " href="tel:+74959899570">8 (495) 989-95-70</a>
            </div>
        </section>
        <section>
            <h2 class="font-overpass font-bold text-3xl ml-0 lg:ml-28 mb-10">Где нас найти</h2>
            <iframe class="border-[10px] border-orange-400 w-full h-[600px]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19951.8850327508!2d59.75994008406382!3d58.28907628912372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43eaf9a5efa736a3%3A0x3c8458137be55fae!2z0J_QsNGA0Log0LrRg9C70YzRgtGD0YDRiw!5e0!3m2!1sru!2sru!4v1672292514203!5m2!1sru!2sru"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </main>

    @endsection