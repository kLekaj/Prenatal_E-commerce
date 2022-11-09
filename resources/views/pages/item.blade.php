<x-layout>
    @section('header')
        @include('header')
    @endsection

    @section('slot')
            <div class="flex-grow mx-5 mx-auto lg:pt-20  w-full ">

                <div class="container mx-5 mx-auto pt-20">
                    @include('components.product_info_url')
                </div>
                <div class="container mx-5 mx-auto">
                    <div class="w-full flex flex-col mb-6 lg:flex-row lg:-mt-5">
                        <div class="flex-1 flex flex-wrap lg:pt-5">
                            <div class=" w-full mb-3 lg:mb-0 lg:mr-10">
                                <div class=" top-4 transform -translate-x-1 z-10">
                                    <div class="flex flex-col space-y-2">
                                    </div>
                                </div>
                                <div class="lg:hidden swiper mySwiperItem lg:-mx-3 -mx-2 lg:-mt-3">
                                    <div class="swiper-wrapper w-full lg:w-full flex lg:flex-wrap pb-8">
                                        @if(count($item['gallery']) < 4)
                                            @foreach($item['gallery'] as $k=>$i)
                                                <div  class="lg:w-1/2 lg:p-3 w-full px-2 swiper-slide">
                                                    <div class="border border-gray-300 h-full ">
                                                        <div class=" w-full aspect-3/4">
                                                            <img
                                                                    class=" object-cover w-full h-full"
                                                                    alt="{{ $i['item_id'] }}"
                                                                    src={{ $i['image'] }}>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            @foreach($item['gallery'] as $k=>$i)
                                                <div  class="swiper-slide  lg:w-1/2 lg:p-3 w-full px-2">
                                                    <div class="border border-gray-300 h-full ">
                                                        <div class=" w-full aspect-3/4">
                                                            <img
                                                                class=" object-cover w-full h-full"
                                                                alt="{{ $i['item_id'] }}"
                                                                src={{ $i['image'] }}>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="z-10 flex justify-between items-center absolute left-0 transform top-1/2 -translate-y-1/2 right-0  lg:hidden">
                                        <button class="sliderPrevItem p-3 rounded-full text-[#E72B6F] active:ring-4 ring-[#E72B6F]/40">
                                            <svg class="svg-icon w-5 h-5" viewBox="0 0 20 20">
                                                <path fill="#E72B6F" d="M8.388,10.049l4.76-4.873c0.303-0.31,0.297-0.804-0.012-1.105c-0.309-0.304-0.803-0.293-1.105,0.012L6.726,9.516c-0.303,0.31-0.296,0.805,0.012,1.105l5.433,5.307c0.152,0.148,0.35,0.223,0.547,0.223c0.203,0,0.406-0.08,0.559-0.236c0.303-0.309,0.295-0.803-0.012-1.104L8.388,10.049z"></path>
                                            </svg>
                                        </button>
                                        <button class="sliderNextItem p-3 rounded-full text-[#E72B6F] active:ring-4 ring-[#E72B6F]/40">
                                            <svg class="svg-icon w-5 h-5" viewBox="0 0 20 20">
                                                <path fill="#E72B6F" d="M11.611,10.049l-4.76-4.873c-0.303-0.31-0.297-0.804,0.012-1.105c0.309-0.304,0.803-0.293,1.105,0.012l5.306,5.433c0.304,0.31,0.296,0.805-0.012,1.105L7.83,15.928c-0.152,0.148-0.35,0.223-0.547,0.223c-0.203,0-0.406-0.08-0.559-0.236c-0.303-0.309-0.295-0.803,0.012-1.104L11.611,10.049z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>


                                <div class="md:hidden hidden lg:block lg:-mx-3 lg:-mt-3">
                                    <div class="swiper-wrapper w-full lg:w-full flex lg:flex-wrap pb-8">
                                        @if(count($item['gallery']) < 4)
                                            @foreach($item['gallery'] as $k=>$i)
                                                <div  class="lg:w-1/2 lg:p-3 w-full px-2 swiper-slide">
                                                    <div class="border border-gray-300 h-full ">
                                                        <div class=" w-full aspect-3/4">
                                                            <img
                                                                    class=" object-cover w-full h-full"
                                                                    alt="{{ $i['item_id'] }}"
                                                                    src={{ $i['image'] }}>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <div  class="lg:w-1/2 lg:p-3 w-full px-2 swiper-slide">
                                                <div class="border border-gray-300">
                                                    <div class=" w-full aspect-3/4">
                                                        <img class="object-cover w-full"
                                                             alt="Armadio dolce stella - Foppapedretti"
                                                             src="{{ URL::to('/images/prenatal-product-none.jpeg') }}"
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            @foreach($item['gallery'] as $k=>$i)
                                                <div  class="swiper-slide  lg:w-1/2 lg:p-3 w-full px-2">
                                                    <div class="border border-gray-300 h-full ">
                                                        <div class=" w-full aspect-3/4">
                                                            <img
                                                                    class=" object-cover w-full h-full"
                                                                    alt="{{ $i['item_id'] }}"
                                                                    src={{ $i['image'] }}>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="z-10 flex justify-between items-center absolute left-0 transform top-1/2 -translate-y-1/2 right-0  lg:hidden">
                                        <button class="sliderPrevItem p-3 rounded-full text-[#E72B6F] active:ring-4 ring-[#E72B6F]/40">
                                            <svg class="svg-icon w-5 h-5" viewBox="0 0 20 20">
                                                <path fill="#E72B6F" d="M8.388,10.049l4.76-4.873c0.303-0.31,0.297-0.804-0.012-1.105c-0.309-0.304-0.803-0.293-1.105,0.012L6.726,9.516c-0.303,0.31-0.296,0.805,0.012,1.105l5.433,5.307c0.152,0.148,0.35,0.223,0.547,0.223c0.203,0,0.406-0.08,0.559-0.236c0.303-0.309,0.295-0.803-0.012-1.104L8.388,10.049z"></path>
                                            </svg>
                                        </button>
                                        <button class="sliderNextItem p-3 rounded-full text-[#E72B6F] active:ring-4 ring-[#E72B6F]/40">
                                            <svg class="svg-icon w-5 h-5" viewBox="0 0 20 20">
                                                <path fill="#E72B6F" d="M11.611,10.049l-4.76-4.873c-0.303-0.31-0.297-0.804,0.012-1.105c0.309-0.304,0.803-0.293,1.105,0.012l5.306,5.433c0.304,0.31,0.296,0.805-0.012,1.105L7.83,15.928c-0.152,0.148-0.35,0.223-0.547,0.223c-0.203,0-0.406-0.08-0.559-0.236c-0.303-0.309-0.295-0.803,0.012-1.104L11.611,10.049z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>




                            </div>
                        </div>
                        <div class="self-start w-full lg:sticky lg:top-0 lg:pt-5 lg:max-w-sm" style="top: 169px">
                            <div>
                                <div class="flex min-h-8">
                                    <div>
                                        <img src="https://storage.googleapis.com/prenatal-italy/2021/04/c07b6bd1-logo-giordani-200x100px.png" alt="Giordani" class="h-8 w-auto block">
                                    </div>
                                    <div class="right-3 top-1 md:hidden">
                                        <button data-modal-trigger="social-share-modal" type="button">
                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="27px" height="27px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path d="M406,332c-29.636,0-55.969,14.402-72.378,36.571l-141.27-72.195C194.722,288.324,196,279.809,196,271
                                    c0-11.931-2.339-23.324-6.574-33.753l148.06-88.958C354.006,167.679,378.59,180,406,180c49.626,0,90-40.374,90-90
                                    c0-49.626-40.374-90-90-90c-49.626,0-90,40.374-90,90c0,11.47,2.161,22.443,6.09,32.54l-148.43,89.18
                                    C157.152,192.902,132.941,181,106,181c-49.626,0-90,40.374-90,90c0,49.626,40.374,90,90,90c30.122,0,56.832-14.876,73.177-37.666
                                    l140.86,71.985C317.414,403.753,316,412.714,316,422c0,49.626,40.374,90,90,90c49.626,0,90-40.374,90-90
                                    C496,372.374,455.626,332,406,332z M406,30c33.084,0,60,26.916,60,60s-26.916,60-60,60s-60-26.916-60-60S372.916,30,406,30z
                                     M106,331c-33.084,0-60-26.916-60-60s26.916-60,60-60s60,26.916,60,60S139.084,331,106,331z M406,482c-33.084,0-60-26.916-60-60
                                    s26.916-60,60-60s60,26.916,60,60S439.084,482,406,482z"></path>
                                </svg>
                                        </button>
                                    </div>
                                </div>

                                <h1 class="font-normal text-pnt-black text-2xl">{{ $item['title'] }}</h1>
                                <div class="flex flex-wrap justify-between mt-4">
                                    <div class="flex items-center space-x-4">
                                        <div>
                                            <span>5</span>
                                            <span>/</span>
                                            <span>5</span>
                                        </div>

                                        <span>
                                <div class="">
                                    <div class="top-0 left-0">
                                        <div class="overflow-hidden whitespace-nowrap" style="width: 100%;">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 flex-shrink-0 text-[#E72B6F] inline-block">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 flex-shrink-0 text-[#E72B6F] inline-block">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 flex-shrink-0 text-[#E72B6F] inline-block">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 flex-shrink-0 text-[#E72B6F] inline-block">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 flex-shrink-0 text-[#E72B6F] inline-block">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </span>
                                    </div>

                                </div>

                                <div class="mt-8 mb-8 lg:mb-0">
                                    <div class="flex flex-col ">
                                        <div class="flex gap-2 md:gap-4 mt-1  ">
                                            <span class="text-[#E72B6F] font-normal text-3xl md:text-4xl leading-none">
                                                € {{ $item['price'] }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- product info descripton and other information --}}

                            <div class="mt-8">
                                <div class="flex flex-col space-y-4">
                                    <div class="flex flex-col">
                                        <form  class="cart w-full flex flex-col space-y-6">


                                            @if(!empty($itemSizes))
                                                <div class="my-6 space-y-6">
                                                    <div class="flex flex-col">
                                                        <div class="flex items-center justify-between">
                                                            <span class="uppercase text-sm">taglie</span>
                                                            <div>
                                                <span >
                                                    <div class="text-sm font-normal underline text-center cursor-pointer">
                                                        Guida alle taglie
                                                    </div>
                                                </span>
                                                            </div>
                                                        </div>

                                                        <div class="flex flex-wrap">
                                                            @foreach($itemSizes as $i)
                                                                <div class="mr-1 sm:mr-2 md:mr-4 mt-4 flex-shrink-0">
                                                                    <label class="inline-flex items-center">
                                                                        <input type="radio" class="hidden" name="size-attribute" id="product-variation-2354948" >
                                                                        <label  class="font-normal text-xs md:text-base border text-center py-1 md:py-0 px-3 rounded-full cursor-pointer border-gray-400">
                                                                            {{ $i->taglia }}
                                                                        </label>
                                                                    </label>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif



                                            <button class="inline-flex uppercase justify-center items-center text-center rounded-full px-5 border transition delay-150 duration-150 ease-in-out focus:outline-none text-base py-2 px-5 bg-[#E72B6F] text-white border-[#E72B6F] hover:bg-white hover:text-[#E72B6F] focus:bg-white focus:text-[#E72B6F] focus:shadow-outline-[#E72B6F] cursor-pointer" >
                                    <span class="mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.844" height="26.308" viewBox="0 0 22.844 26.308" fill="currentColor" class="w-6 h-6">
                                            <g >
                                                <path data-name="Path 684" d="M1.949 24.595L3.094 8.386l16.638.068 1.112 16.209zm20.864.665L21.452 7.329a.822.822 0 00-.82-.759H2.195a.821.821 0 00-.82.76L.002 25.424a.822.822 0 00.82.884h21.2a.823.823 0 00.822-.823.8.8 0 00-.031-.225z"></path><path data-name="Path 685" d="M11.413 0a6.588 6.588 0 00-6.579 6.581v3.278a.823.823 0 101.645 0V6.581a4.935 4.935 0 119.869 0v3.278a.823.823 0 101.645 0V6.581A6.588 6.588 0 0011.413 0z"></path>
                                            </g>
                                        </svg>
                                    </span>
                                                <span class="button-text">
                                        <span>Aggiungi al carrello</span>
                                    </span>
                                            </button>
                                            <div class="flex flex-col space-y-2">
                                                <div>
                                                    <a class="w-full flex uppercase justify-center items-center text-center rounded-full py-2 px-5 transition delay-150 duration-150 ease-in-out focus:outline-none cursor-pointer border border-transparent text-base py-2 bg-transparent text-pnt-black border border-transparent hover:border-[#E72B6F] hover:bg-white hover:text-[#E72B6F] focus:bg-white focus:text-[#E72B6F] focus:shadow-outline-[#E72B6F] cursor-pointer" >
                                            <span class="mr-2">
                                                <span class="sr-only">Wishlist</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-[#E72B6F]" data-wishlist-icon="data-wishlist-icon" data-active-classes="fill-current" data-inactive-classes="fill-none">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                                </svg>
                                            </span>
                                                        <span>
                                                <div>
                                                    <span >Aggiungi alla lista</span>
                                                </div>
                                            </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="md:block swiper-paginationItem absolute top-[105%] flex justify-center"></div>
                            </div>
                            <div class="font-normal text-base mt-6 mb-6">
                                <div class="flex justify-start flex-col mt-6">
                                    <div
                                        x-data="{ isCollapsed: false, maxLength: 240, originalContent: '', content: '' }"
                                        x-init="originalContent = $el.firstElementChild.textContent.trim(); content = originalContent.slice(0, maxLength)"
                                        class="archive-description collapsed text-sm text-black mt-2">
                                        <p x-text="isCollapsed ? originalContent : content">
                                            {{ str_replace('"','',$item['description']) }}
                                        </p>
                                        <button
                                            @click="isCollapsed = !isCollapsed"
                                            x-show="originalContent.length > maxLength"
                                            x-text="isCollapsed ? '[-]' : '[+]'"
                                            class="text-[#E72B6F]"
                                        ></button>
                                    </div>
                                </div>
                            </div>


                            <div class="">
                                <div x-data="{open: false}">
                                    <div class="uppercase font-light text-gray-900 text-sm flex items-center leading-4">
                                        <button @click="open = !open">
                                            <span class="text-sm" x-text="open ? '-' : '+'"></span>
                                            INFO PRODOTTO
                                        </button>
                                    </div>
                                    <div
                                        role="region"
                                        x-show="open"
                                        :hidden="!open">
                                        <div class="font-normal text-sm text-gray-700 py-2">
                                            <p><span class="font-bold">Codice prodotto</span>: <span>{{ $item['id'] }}</span></p>
                                            <p><span class="font-bold">Genere</span>: <span>{{ $item['genere'] }}</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3.5"
                                     x-data="{open: false}"
                                >
                                    <div class="uppercase font-light text-gray-900 text-sm flex items-center leading-4">
                                        <button @click="open = !open">
                                            <span class="text-sm" x-text="open ? '-' : '+'"></span>
                                            CONSEGNA E RESO
                                        </button>
                                    </div>
                                    <div
                                        role="region"
                                        x-show="open"
                                        :hidden="!open"
                                    >
                                        <div class="font-normal text-sm text-gray-700 py-2"
                                             data-lazy-content="single-product-delivery-and-refunds">
                                            <p class="font-bold">Consegna</p>
                                            <p>La consegna avviene mediamente entro 3 giorni lavorativi dalla conferma d’ordine.</p>
                                            <p class="mt-2 font-bold">Rimborsi</p>
                                            <p>Il reso è sempre gratuito e il rimborso verrà emesso sullo stesso metodo di pagamento.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>


            <script>
                var swiper = new Swiper(".mySwiperItem", {
                    slidesPerView: 1,
                    loopedSlides:9,
                    breakpoints:{
                        768:{
                            slidesPerView: 2,
                            loop: true
                        },
                    },
                    pagination: {
                        el: ".swiper-paginationItem",
                        clickable: true,
                    },
                    autoplay: {
                        delay: 2000,
                        disableOnInteraction: false,
                    },
                    navigation: {
                        nextEl: ".sliderNextItem",
                        prevEl: ".sliderPrevItem",
                        clickable: true,
                    },
                });
            </script>


        @endsection
</x-layout>
