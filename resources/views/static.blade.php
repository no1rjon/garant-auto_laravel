<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link
        rel="stylesheet"
        href="{{ asset('css/swiper-bundle.min.css') }}"
    />    
    <title>@yield('title') - GarantAuto</title>
</head>
<body class="bg-first @yield('body-background')]">

    <!-- header -->
    <header class="mx-auto py-10 px-3 max-w-lg lg:px-0 lg:max-w-6xl ">

        <!-- Logo and contacts  -->
        <div class="mb-6 flex items-center justify-between">
            <!-- Left side -->
            <div class="max-w-[65%]">
                <a class="logo-link" href="{{ route('home') }}">
                    <svg class="w-full px-6 py-2 border-8 border-[#FF9B00] fill-[#223062] transition-all duration-500" viewBox="0 0 319 41" xmlns="http://www.w3.org/2000/svg">
                        <path d="M318.834 1.05442L310.432 12.8832H297.29L297.29 40.8987H284.988L284.988 12.8832H265.619L274.021 1.05442H318.834Z" />
                        <path d="M249.433 26.5879V40.8987H261.885V1.05442H249.433V14.7509H231.076V26.5879H249.433ZM215.205 40.8987H227.653V1.05442L215.205 1.05442V40.8987Z"/>
                        <path d="M48.6007 40.8987L55.6706 30.9376H69.5628C69.5628 30.9376 71.7412 30.9376 72.6748 30.9376C72.1419 30.2238 71.5783 29.175 70.8661 28.0446C70.0962 26.9733 69.3853 25.9612 68.732 25.0095L61.6202 14.4755L43.0066 40.8987H28.4844L53.9139 4.89444C54.744 3.76401 55.811 2.69273 57.0548 1.80021C58.2999 0.907692 59.9011 0.431854 61.8571 0.431854C63.694 0.431854 65.2952 0.847248 66.539 1.68061C67.7841 2.57312 68.7922 3.6444 69.6812 4.89444L94.4588 40.8987H48.6007Z" />
                        <path d="M165.612 40.8987L172.682 30.9376H186.574C186.574 30.9376 188.753 30.9376 189.686 30.9376C189.153 30.2238 188.59 29.175 187.878 28.0446C187.108 26.9733 186.397 25.9612 185.744 25.0095L178.632 14.4755L160.018 40.8987H145.496L170.925 4.89444C171.755 3.76401 172.822 2.69273 174.066 1.80021C175.311 0.907692 176.913 0.431854 178.869 0.431854C180.706 0.431854 182.307 0.847248 183.551 1.68061C184.796 2.57312 185.804 3.6444 186.693 4.89444L211.47 40.8987H165.612Z" />
                        <path d="M0.476562 34.9373V40.8987H12.9457V12.8995H28.6972L37.1131 1.05442H0.525415V34.9373H0.476562Z" />
                        <path d="M105.303 1.05442L98.1934 11.0155H128.378C128.446 11.0155 128.455 11.0127 128.504 11.0116C128.679 11.0078 128.824 11.0155 128.952 11.0155C131.475 11.0155 133.52 13.2271 133.52 15.7661C133.52 18.3052 131.475 20.3635 128.952 20.3635C128.815 20.3635 128.68 20.3575 128.546 20.3457C128.482 20.3575 128.415 20.3635 128.343 20.3635H98.1934L98.1934 40.8987H111.593V30.0037H130.688C132.527 30.0037 134.439 29.8029 136.427 29.4012C138.414 28.9995 140.228 28.2965 141.868 27.2922C143.557 26.288 144.948 24.9573 146.041 23.3003C147.134 21.593 147.985 18.8311 147.985 15.3734C147.985 11.9158 147.109 9.56557 145.967 7.90853C144.874 6.20128 143.458 4.84552 141.718 3.84126C140.029 2.83699 138.191 2.13401 136.203 1.7323C134.216 1.28038 132.377 1.05442 130.688 1.05442H105.303Z"/>
                    </svg>
                </a>
            </div>
            <!-- Right side -->
            <!-- DESCKTOP -->
            <div class="hidden lg:inline-flex items-center">
                <!-- Contacts -->
                <div class="flex flex-col justify-between pr-9">
                    <div class="inline-flex items-center justify-between">
                        <span class="text-sm pr-9">E-mail:</span>
                        <a href="mailto:asv@garant-tehnika.ru" class="text-sm font-semibold hover:text-blue-900">asv@garant-tehnika.ru</a>
                    </div>
                    <div class="inline-flex items-center justify-between">
                        <span class="text-sm pr-9">Телефон:</span>
                        <a href="tel:+74959899570" class="text-sm font-semibold hover:text-blue-900">8 (495) 989-95-70</a>
                    </div>
                </div>
                <!-- Buttons -->
                <button class="open-collback font-overpass font-extrabold text-3xl text-[#111831] border-[#FF9B00] border-[10px] py-1 px-12 button-animation">Обратная связь</button>
            </div>
            <!-- MOBILE -->
            <div class="block lg:hidden items-center flex-shrink">
                <button id="open-menu">
                    <svg class="" weight="54px" height="54px" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="6" y="9" width="42" height="5" fill="#111831"/>
                        <rect x="6" y="24" width="42" height="5" fill="#111831"/>
                        <rect x="6" y="39" width="42" height="5" fill="#111831"/>
                    </svg> 
                </button>                  
            </div>
        </div>
        <!-- Navigation panel -->
        <nav class="hidden lg:block">
            <ul class="nav">
                <li><a class="@yield('tab-product')" href="{{ route('product') }}">Каталог спецтехники</a></li>
                <li><a class="@yield('tab-services')" href="{{ route('services') }}">Услуги</a></li>
                <li><a class="@yield('tab-our_shipments')" href="{{ route('our_shipments') }}">Наши отгрузки</a></li>
                <li><a class="@yield('tab-contacts')" href="{{ route('contacts') }}">Контакты</a></li>
                <li><a class="@yield('tab-news')" href="{{ route('news') }}">Новости</a></li>
            </ul>
        </nav>
        <!-- modal menu -->
        <nav class="modal-menu" id="modal-menu">
            <div class="modal-menu__window">
                <div class="flex justify-end">
                    <svg id="close-menu" width="30" height="27" viewBox="0 0 30 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="2" y="21.2132" width="30" height="5" transform="rotate(-45 2 21.2132)" fill="#111831"/>
                        <rect width="30" height="5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 2.37427 3.53553)" fill="#111831"/>
                    </svg>
                </div>                        
                <ul>
                    <a href="{{ route('product') }}"><li class="inline-block @yield('tab-product')">Каталог спецтехники </li></a>
                    <a href="{{ route('services') }}"><li class="inline-block @yield('tab-services')">Услуги</li></a>
                    <a href="{{ route('our_shipments') }}"><li class="inline-block @yield('tab-our_shipments')">Наши отгрузки</li></a>
                    <a href="{{ route('contacts') }}"><li class="inline-block @yield('tab-contacts')">Контакты</li></a>
                    <a href="{{ route('news') }}"><li class="inline-block @yield('tab-news')">Новости</li></a>
                </ul>
                <button class="open-collback font-bold text-xl text-[#111831] border-[#FF9B00] border-[10px] py-1 px-7 button-animation">Обратная связь</button>
            </div>
        </nav>

        <!-- modal collback -->
        <div class="modal-collback" id="modal-collback">
            <h2 class="mt-4 lg:mt-16 ml-4 lg:ml-44 font-overpass text-3xl xl:text-5xl text-[#223062] font-bold xl:font-extrabold w-[70%] lg:w-[50%] xl:w-[60%] ">Оставьте ваши контакты, 
                и мы свяжемся с вами!</h2>
            <div class="absolute right-4 top-4 lg:right-44 lg:top-20">
                <svg id="close-collback" class="cursor-pointer fill-[#223062]" width="30" height="27" viewBox="0 0 30 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="2" y="21.2132" width="30" height="5" transform="rotate(-45 2 21.2132)"/>
                    <rect width="30" height="5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 2.37427 3.53553)"/>
                </svg>
            </div>
            <div class="px-4 lg:px-44">
                <form class="collback-form" action="">
                    <div class="collback-form__group">
                        <input class="collback-form__input" type="text" placeholder="  ">
                        <label class="collback-form__label">ФИО</label>
                    </div>
                    <div class="collback-form__group">
                        <input class="collback-form__input" type="text" placeholder="  ">
                        <label class="collback-form__label">Ваш номер телефона</label>
                    </div>                    
                    <div class="collback-form__group">
                        <input class="collback-form__input" type="text" placeholder="  ">
                        <label class="collback-form__label">E-mail</label>
                    </div>
                    <div class="collback-form__group flex flex-col relative">
                        <textarea class="collback-form__input collback-form__input_about resize-none" placeholder="  " cols="300" rows="10"></textarea>
                        <label class="collback-form__label">Информация о заказе</label>
                        <div class="collback-form__file-group">
                            <input name="file" id="file" type="file" class="input-file" multiple>
                            <div id="place-lable" class="collback-form__file-group_hover-place">
                                <label id="lable-text" class="font-light text-sm text-[#7B7F8B] self-center" for="file">Прикрепить документ</label>
                                <label class="" for="file">
                                    <svg class="fill-[#223062]" width="35" height="35" viewBox="0 0 35 35" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M27.5319 10.9375L21.875 5.28063V10.9375H27.5319ZM28.4375 13.125H19.6875V4.375H6.5625V30.625H28.4375V13.125ZM5.46875 2.1875H21.875L30.625 10.9375V31.7188C30.625 32.0088 30.5098 32.287 30.3046 32.4921C30.0995 32.6973 29.8213 32.8125 29.5312 32.8125H5.46875C5.17867 32.8125 4.90047 32.6973 4.69535 32.4921C4.49023 32.287 4.375 32.0088 4.375 31.7188V3.28125C4.375 2.99117 4.49023 2.71297 4.69535 2.50785C4.90047 2.30273 5.17867 2.1875 5.46875 2.1875Z"/>
                                        <rect x="16.5569" y="24.7305" width="9.43114" height="1.88623" transform="rotate(-90 16.5569 24.7305)"/>
                                        <rect x="12.7844" y="19.0718" width="9.43114" height="1.88623"/>
                                    </svg>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="absolute right-2 sm:right-10 lg:right-[45%] bottom-5">
                        <button class="py-1 px-8 w-fit border-[#FF9B00] border-[10px] text-xl lg:text-3xl font-extrabold font-overpass button-animation">Отправить</button>
                    </div>
                </form>
            </div>
        
    </header>

    @yield('main_content')
    
    <!-- footer -->
    <footer class="pt-20 pb-5 px-2 mx-auto bg-[url('/img/background/back_footer.png')] bg-bottom bg-no-repeat lg:block lg:pb-0]">
        <section class="pt-24 mt-40 mx-auto border-t-[10px] border-[#FF9B00] flex flex-col lg:gap-x-32 pb-1 max-w-lg lg:max-w-6xl lg:flex-row lg:justify-between lg:pb-14">
            <!-- left side -->
            <div class="flex flex-col gap-y-16 ">
                <a class="logo-link" href="{{ route('home') }}">
                    <svg class="w-[800px] max-w-full fill-[#223062] " viewBox="0 0 800 100" xmlns="http://www.w3.org/2000/svg">
                        <path d="M789 1.76514L768.176 31.073H735.606L735.606 100.486H705.117L705.117 31.073H657.115L677.939 1.76514H789Z" />
                        <path d="M616.999 65.0289V100.486H647.859V1.76514H616.999V35.7006H571.504V65.0289H616.999ZM532.169 100.486H563.02V1.76514L532.169 1.76514V100.486Z"  />
                        <path d="M119.268 100.487L136.79 75.8062H171.219C171.219 75.8062 176.618 75.8062 178.932 75.8062C177.611 74.0377 176.215 71.4391 174.45 68.6383C172.542 65.984 170.78 63.4763 169.161 61.1183L151.535 35.0184L105.404 100.487H69.4131L132.436 11.2795C134.493 8.47867 137.138 5.82438 140.221 3.61301C143.306 1.40163 147.275 0.222656 152.122 0.222656C156.675 0.222656 160.643 1.25187 163.726 3.31667C166.811 5.52804 169.31 8.18233 171.513 11.2795L232.92 100.487H119.268Z"  />
                        <path d="M409.263 100.487L426.785 75.8062H461.214C461.214 75.8062 466.613 75.8062 468.927 75.8062C467.606 74.0377 466.209 71.4391 464.444 68.6383C462.536 65.984 460.774 63.4763 459.155 61.1183L441.53 35.0184L395.399 100.487H359.408L422.431 11.2795C424.488 8.47867 427.133 5.82438 430.215 3.61301C433.301 1.40163 437.269 0.222656 442.117 0.222656C446.669 0.222656 450.638 1.25187 453.72 3.31667C456.806 5.52804 459.304 8.18233 461.508 11.2795L522.915 100.487H409.263Z"  />
                        <path d="M0 85.7162V100.486H30.9028V31.1134H69.9406L90.7979 1.76514H0.121074V85.7162H0Z"  />
                        <path d="M259.794 1.76514L242.176 26.4455H316.983C317.152 26.4455 317.174 26.4386 317.297 26.436C317.73 26.4266 318.088 26.4455 318.405 26.4455C324.658 26.4455 329.727 31.9251 329.727 38.2161C329.727 44.5071 324.658 49.607 318.405 49.607C318.067 49.607 317.732 49.5921 317.401 49.5628C317.242 49.5919 317.074 49.607 316.896 49.607H242.176L242.176 100.486H275.385V73.4924H322.709C327.265 73.4924 332.006 72.9947 336.931 71.9994C341.857 71.0041 346.352 69.2623 350.415 66.7741C354.602 64.2858 358.05 60.9889 360.759 56.8833C363.468 52.6533 365.577 45.8101 365.577 37.2431C365.577 28.6762 363.406 22.8531 360.574 18.7475C357.865 14.5174 354.356 11.1583 350.046 8.67004C345.859 6.18179 341.303 4.44001 336.377 3.44471C331.452 2.32499 326.896 1.76514 322.709 1.76514H259.794Z"/>
                    </svg>
                </a>
                <button class="open-collback font-overpass font-extrabold text-xl text-[#111831] border-[#FF9B00] border-[10px] py-1 px-12 whitespace-nowrap button-animation block lg:hidden">Обратная связь</button>
                <div class="flex flex-col gap-4 lg:gap-7">
                    <div><a class="text-[#223062] font-bold text-xl lg:text-3xl hover:text-blue-900" href="tel:+74959899570">8 (495) 989-95-70</a></div>
                    <div><a class="text-[#223062] font-bold text-xl lg:text-3xl hover:text-blue-900" href="mailto:asv@garant-tehnika.ru">asv@garant-tehnika.ru</a></div>
                </div>
            </div>
            <!-- right side -->
            <div class="flex flex-col gap-y-11">
                <button class="open-collback font-overpass font-extrabold text-3xl text-[#111831] border-[#FF9B00] border-[10px] py-1 px-12 whitespace-nowrap button-animation hidden lg:block">Обратная связь</button>
                <ul class="font-semibold text-[#111831] text-xl flex flex-col gap-4 mt-4 lg:gap-7 lg:mt-0">
                    <li><a class="hover:text-blue-900" href="{{ route('product') }}">Каталог спецтехники</a></li>
                    <li><a class="hover:text-blue-900" href="{{ route('services') }}">Услуги</a></li>
                    <li><a class="hover:text-blue-900" href="{{ route('our_shipments') }}">Наши отгрузки</a></li>
                    <li><a class="hover:text-blue-900" href="{{ route('contacts') }}">Контакты</a></li>
                    <li><a class="hover:text-blue-900" href="{{ route('news') }}">Новости</a></li>
                </ul>
            </div>
        </section>
    </footer>

    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/modal.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/file-group.js') }}"></script>

</body>
</html>