<div data-before-filters="" class="container mt-6 mb-5 lg:mt-10 md:mb-0 mx-5 mx-auto w-[90%] md:w-[85%] lg:w-[88%]">
    <div class="relative justify-between space-y-4 lg:flex lg:space-y-0">
        <div class="hidden lg:block">

            @include('components.filters.desktop')
        </div>




        <div class="lg:hidden">
            @include('components.filters.phone')
        </div>


        <div>
            <div class="flex items-center justify-center lg:justify-end">
                <div class="mr-2 flex">
                    <span class="whitespace-nowrap font-medium text-[#E72B6F] text-xs md:text-sm"> {{ $posts['total'] }}</span>
                    <span class="whitespace-nowrap font-normal text-pnt-black text-xs md:text-sm ml-1"> ordinati per</span>
                </div>
                <div>
                    <div class="inline-block relative">
                        <form class="block" method="get">
                            <select onchange="this.parentNode.submit()" name="orderby" class="block appearance-none w-full text-base sm:text-xs font-regular text-gray-600 bg-white border border-gray-200 hover:border-gray-200 px-4 py-2 pr-8 rounded-full leading-tight focus:outline-none" aria-label="Il tuo ordine">
                                <option value="popularity">Popolarità</option>
                                <option value="rating">Valutazione media</option>
                                <option value="date" selected="selected">Ordina in base al più recente</option>
                                <option value="price">Prezzo: dal più economico</option>
                                <option value="price-desc">Prezzo: dal più caro</option>
                            </select>
                            <input type="hidden" name="paged" value="1">
                        </form>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-400">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
