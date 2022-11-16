<div class="mx-5 mx-auto  w-[90%] md:w-[85%] lg:w-[88%]">
    <div class="py-8 md:py-12">
        <div class="container mx-auto mx-5">
            <div class="flex flex-wrap -m-2">
                @if(!empty($items['data']))
                    @foreach($items['data'] as $key=>$value)
                        <div id="posts" class=" w-1/2 p-2 xs:w-1/2 lg:w-1/3 xl:w-1/4"
                             x-data="{ open: false }"
                             @mouseleave="open = false">
                            <div class=" mx-5 mx-auto " >
                                <div class="zoom hover:scale-105 hover:shadow-2xl hover:ease-in transform transition duration-300 ease-in-out relative"
                                     @mouseover="open = true">
                                    <div class="w-full h-[80%] border border-gray-200  z-0">
                                        <div class="">
                                            <div class="swiper mySwiper150" >
                                                <div
                                                        onclick="location.href='/prodotto/{{ str_replace('https://www.prenatal.com/prodotto/','',$value['link']) }}'"
                                                        style="cursor:pointer;"
                                                        class="swiper-wrapper">
                                                    @if(empty($value['gallery']))
                                                        <a class="w-full aspect-3/4">
                                                            <div class=" left-0 top-0 w-full -mb-6">
                                                                <img  class="object-cover w-full"
                                                                      sizes="(max-height: 860px, ) 100vw, 860px"
                                                                >
                                                                <img class="object-cover w-full"
                                                                     alt="Armadio dolce stella - Foppapedretti"
                                                                     src="https://storage.googleapis.com/prenatal-italy/2021/01/0773ff06-single-product-placeholder-300x400-1.jpg"
                                                                >
                                                            </div>
                                                        </a>
                                                    @else
                                                        @foreach( $value['gallery'] as $k=>$i)
                                                            <div class="swiper-slide w-full h-auto">
                                                                <a class="w-full aspect-3/4">
                                                                    <div class=" left-0 top-0 w-full h-auto">
                                                                        <img  class="cover w-full h-full"
                                                                              sizes="(max-width: 860px) 100vw, 860px"
                                                                              alt="{{ $i['item_id'] }}"
                                                                              src={{ $i['image'] }}
                                                                        >
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                                <div class="md:group-hover:block"
                                                     x-show="open">
                                                    <div class="  right-0 z-10 flex justify-between items-center absolute left-0 transform top-1/2 -translate-y-1/2 right-0 ">
                                                        <button class="sliderPrev150 p-3 rounded-full text-[#E72B6F] active:ring-4 ring-[#E72B6F]/40">
                                                            <span class="sr-only">Precedente</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 pointer-events-none">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                                            </svg>
                                                        </button>
                                                        <button  class="sliderNext150 p-3 rounded-full text-[#E72B6F] active:ring-4 ring-[#E72B6F]/40">
                                                            <span class="sr-only">Avanti</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 pointer-events-none">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" bottom-2 right-2">
                                            {{--                                zemra--}}
                                            <div
                                                    class=" transition duration-200 ease-in md:group-hover:opacity-100 md:group-hover:pointer-events-auto -mt-12 mr-2 absolute right-0 z-40"
                                                    x-show="open">
                                                <button  class="focus:outline-none bg-white  border-2 border-[#E72B6F] text-[#E72B6F] hover:text-white rounded-full p-1 h-10 w-10 flex items-center justify-center hover:fill-white hover:bg-[#E72B6F]">
                                                    <span class="sr-only">Wishlist</span>
                                                    <svg stroke="#E72B6F" fill="white" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-center hover:stroke-white hover:fill-[#E72B6F]" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="py-2 transform md:group-hover:scale-95 transition-all duration-150 ease" >
{{--                    pershkrimi--}}
                                        @if( ($value['sale_price'] and $value['vip_price']) != 0 and $value['sale_price'] !== $value['vip_price']  )
                                            <div class="flex items-center sm:mt-2 pb-2">
                                                <div class="flex flex-col items-center md:flex-row md:items-end " >
                                                    <span class="flex-shrink-0 text-base sm:text-xl text-[#E72B6F] text-success font-medium whitespace-nowrap appearance-none" >
                                                        €{{ $value['sale_price'] }}
                                                    </span>
                                                </div>
                                                <div class="border-t border-[#52762B] flex-1 mx-2 block md:] appearance-none" ></div>
                                                <div class="flex xs:items-start xs:flex-col flex-row items-center">
                                                    <span class="flex-shrink-0 text-base sm:text-xl text-[#52762B] text-success font-medium whitespace-nowrap appearance-none" >
                                                        €{{ $value['vip_price'] }}
                                                    </span>
                                                    <div class="flex">
                                                        <button type="button">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="ml-1 w-3 h-3 text-[#52762B]">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                            </svg>
                                                        </button>
                                                        <span class="text-xxxs md:text-xs text-[#52762B] text-success uppercase block pl-1 leading-none appearance-none" >
                                                            con <br>vip card
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="flex items-center sm:mt-2 pb-2">
                                                <div class="flex flex-col items-center md:flex-row md:items-end ">
                                                    <span class="text-[#E72B6F] font-normal text-sm sm:text-base line-through mr-1 leading-none mb-0.5"></span>
                                                    <span class="flex-shrink-0 text-base sm:text-xl text-[#E72B6F] font-medium leading-none whitespace-nowrap">€{{ $value['price'] }}</span>
                                                </div>
                                            </div>
                                        @endif
{{--                    pjesa e fundit kur sesht hover--}}

                                        <span class="uppercase font-light text-sm leading-none block mt-2">{{ $value['marche'] }}</span>
                                        <div class="min-h-8 mb-3">
                                            <a href='/prodotto/{{ str_replace('https://www.prenatal.com/prodotto/','',$value['link']) }}'  class="text-base block whitespace-normal leading-4" >
                                                {{ $value['title'] }}
                                            </a>
                                        </div>
{{--                pjesa e fundit kur esht hover--}}

                                        <div class="z-40"
                                             x-show="open">
                                            <div class=" md:group-hover:block transition duration-300 ease-in-out top-0 left-0 right-0">
                                                <div class="z-40">
                                                    @if($value['availability'] == 'in stock')
                                                        <div class="flex flex-col md:flex-row">
                                                            <p class="uppercase text-[#52762B] text-xs block my-1">Disponibile online</p>
                                                        </div>
                                                        <div class="w-full mt-5">
                                                            <a class=" w-full flex uppercase justify-center items-center text-center rounded-full px-5 border transition delay-150 duration-150 ease-in-out focus:outline-none text-base py-2 px-5 bg-[#E72B6F] text-white border-[#E72B6F] hover:bg-white hover:text-[#E72B6F] focus:bg-white focus:text-[#E72B6F] focus:shadow-outline-[#E72B6F] cursor-pointer uppercase text-sm">
                                                                <span class="button-text">
                                                                    Seleziona una taglia
                                                                </span>
                                                                </a>
                                                        </div>
                                                        @else
                                                        <div class="w-full mt-5">
                                                            <a class=" w-full flex uppercase justify-center items-center text-center rounded-full px-5 border transition delay-150 duration-150 ease-in-out focus:outline-none text-base py-2 px-5 bg-gray-300 text-white uppercase text-sm">
                                                                <span class="button-text">
                                                                    Non Disponibile
                                                                </span>
                                                            </a>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="container my-8 text-center">
                        <p class="text-xl text-[#E72B6F]">Non è stato trovato nessun prodotto che corrisponde alla tua selezione.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="pb-12">
    <div class="flex flex-col items-center text-xs mt-11 sm:mt-20">
        <p class="text-black">
            Hai visto
            <span data-count="">{{ $items['current_page']*$items['per_page'] }}</span>
            di
            {{ $items['total'] }}
            articoli
        </p>
        <button
                onclick="window.location.href='{{ $items['next_page_url'] }}'"
                class="py-3 mt-4 font-bold text-white uppercase border rounded-full border-[#E72B6F] bg-[#E72B6F] focus:outline-none hover:bg-white hover:text-[#E72B6F] w-60 md:text-xs">
            Carica altri
        </button>
    </div>
    <div class="flex flex-col items-center justify-center mt-10 space-y-3 text-2xs sm:text-base">
        @include('pagination.paginate')
    </div>
</div>

<script>
    var swiper = new Swiper(".mySwiper150", {
        slidesPerView: 'auto',
        loop:true,
        navigation: {
            nextEl: ".sliderNext150",
            prevEl: ".sliderPrev150",
            clickable: true,
        },
    });
</script>



