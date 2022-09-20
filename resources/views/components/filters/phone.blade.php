<form  action="" method="GET">
    <div class=""  x-data="{ open: false }">


        <button x-on:click="open = ! open"
                type="button"
                class="relative pointer-events-auto lg:hidden focus:outline-none w-full border-2 rounded-full py-2 flex items-center justify-center border-gray-300 text-base text-[#E72B6F] font-medium hover:border-[#E72B6F]">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-[#E72B6F] transform rotate-90">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
            </svg>
            <span class="uppercase ml-2">Filtri</span>
        </button>



    <div
        x-show="open"
        @click.away="open = false"
        class="relative">
        <div class="fixed z-50 inset-0 bg-black transition duration-150 pointer-events-none opacity-25" ></div>



        <div class="fixed left-0 top-0 bottom-px w-full md:shadow-md md:max-w-5xl md:h-auto md:max-h-11/12 md:left-1/2 md:top-1/2 md:transform md:-translate-x-1/2 md:-translate-y-1/2 flex flex-col bg-white z-50 transition duration-150 ease-in transform  translate-y-4 pointer-events-none" >
            <div class="border-b border-gray-100 w-full flex items-center justify-between py-2 px-4">
                <div>
                    <span class="text-xl font-medium">
                        Filtri
                    </span>
                </div>
                <div>
                    <button data-modal-close-trigger="" class="bg-[#E72B6F] text-white rounded-full p-2" aria-label="Chiudi">
                        <span class="sr-only">Chiudi</span>
                        <svg height="24" viewBox="0 0 24 24" width="24" fill="currentColor" class="w-4 h-4">
                            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
                            <path d="M0 0h24v24H0z" fill="none"></path>
                        </svg>                    </button>
                </div>
            </div>


            <div class="flex flex-col flex-1 overflow-hidden">
                <div class="flex-1 py-4 overflow-y-scroll h-full">
                    <div class="flex flex-col space-y-6 px-5">

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
                                        {{--                                        <p><span class="font-bold">Codice prodotto</span>: <span>{{  }}</span></p>--}}
                                        {{--                                        <p><span class="font-bold">Genere</span>: <span>{{  }}</span></p>--}}
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

{{--                        <div class="accordion-container" >--}}
{{--                            <div class="block">--}}
{{--                                <div>--}}
{{--                                    <div x-data="{open: false}">--}}
{{--                                        <span class="block ac-trigger" id="ac-trigger-0" role="button">--}}
{{--                                            <div class="flex items-center">--}}
{{--                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 mr-2 text-[#E72B6F] open">--}}
{{--                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>--}}
{{--                                                </svg>--}}
{{--                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 mr-2 text-[#E72B6F] close">--}}
{{--                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6"></path>--}}
{{--                                                </svg>--}}
{{--                                                <span class="block font-medium text-[#E72B6F] text-lg">Taglia</span>--}}
{{--                                            </div>--}}
{{--                                        </span>--}}
{{--                                    </div>--}}
{{--                                    <div class="ac-panel" style="height: 0px; transition-duration: 600ms;" id="ac-panel-0" role="region" aria-labelledby="ac-trigger-0">--}}
{{--                                        <div>--}}
{{--                                            <div class="w-full pt-3">--}}
{{--                                                <div class="pt-5">--}}
{{--                                                    <span class="block font-medium text-[#E72B6F] text-lg mb-6">Abbigliamento mamma</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="max-h-96 overflow-y-auto">--}}
{{--                                                    <div class="pb-2">--}}
{{--                                                        <div class="flex justify-start flex-wrap -ml-4 -mt-4">--}}
{{--                                                            <div class="ml-4 mt-4" style="min-width: 200px">--}}
{{--                                                                <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:10,&quot;slug&quot;:&quot;xxs-36-38&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_mtb-clothing-size=xxs-36-38&amp;query_type_mtb-clothing-size=or&quot;,&quot;filter_name&quot;:&quot;filter_mtb-clothing-size&quot;}">--}}

{{--                                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                                            <input data-checkbox="" type="checkbox" class="form-checkbox   form-checkbox-secondary  w-5 h-5" value="xxs-36-38 " name="filter_mtb-clothing-size ">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    XXS | 36-38--}}
{{--                </span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </label>--}}
{{--                                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ml-4 mt-4" style="min-width: 200px">--}}
{{--                                                                <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:104,&quot;slug&quot;:&quot;xs-38-40&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_mtb-clothing-size=xs-38-40&amp;query_type_mtb-clothing-size=or&quot;,&quot;filter_name&quot;:&quot;filter_mtb-clothing-size&quot;}">--}}

{{--                                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                                            <input data-checkbox="" type="checkbox" class="form-checkbox   form-checkbox-secondary  w-5 h-5" value="xs-38-40 " name="filter_mtb-clothing-size ">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    XS | 38-40--}}
{{--                </span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </label>--}}
{{--                                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ml-4 mt-4" style="min-width: 200px">--}}
{{--                                                                <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:111,&quot;slug&quot;:&quot;s-40-42&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_mtb-clothing-size=s-40-42&amp;query_type_mtb-clothing-size=or&quot;,&quot;filter_name&quot;:&quot;filter_mtb-clothing-size&quot;}">--}}

{{--                                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                                            <input data-checkbox="" type="checkbox" class="form-checkbox   form-checkbox-secondary  w-5 h-5" value="s-40-42 " name="filter_mtb-clothing-size ">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    S | 40-42--}}
{{--                </span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </label>--}}
{{--                                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ml-4 mt-4" style="min-width: 200px">--}}
{{--                                                                <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:111,&quot;slug&quot;:&quot;m-42-44&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_mtb-clothing-size=m-42-44&amp;query_type_mtb-clothing-size=or&quot;,&quot;filter_name&quot;:&quot;filter_mtb-clothing-size&quot;}">--}}

{{--                                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                                            <input data-checkbox="" type="checkbox" class="form-checkbox   form-checkbox-secondary  w-5 h-5" value="m-42-44 " name="filter_mtb-clothing-size ">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    M | 42-44--}}
{{--                </span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </label>--}}
{{--                                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ml-4 mt-4" style="min-width: 200px">--}}
{{--                                                                <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:111,&quot;slug&quot;:&quot;l-46-48&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_mtb-clothing-size=l-46-48&amp;query_type_mtb-clothing-size=or&quot;,&quot;filter_name&quot;:&quot;filter_mtb-clothing-size&quot;}">--}}

{{--                                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                                            <input data-checkbox="" type="checkbox" class="form-checkbox   form-checkbox-secondary  w-5 h-5" value="l-46-48 " name="filter_mtb-clothing-size ">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    L | 46-48--}}
{{--                </span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </label>--}}
{{--                                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ml-4 mt-4" style="min-width: 200px">--}}
{{--                                                                <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:107,&quot;slug&quot;:&quot;xl-48-50&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_mtb-clothing-size=xl-48-50&amp;query_type_mtb-clothing-size=or&quot;,&quot;filter_name&quot;:&quot;filter_mtb-clothing-size&quot;}">--}}

{{--                                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                                            <input data-checkbox="" type="checkbox" class="form-checkbox   form-checkbox-secondary  w-5 h-5" value="xl-48-50 " name="filter_mtb-clothing-size ">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    XL | 48-50--}}
{{--                </span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </label>--}}
{{--                                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ml-4 mt-4" style="min-width: 200px">--}}
{{--                                                                <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:90,&quot;slug&quot;:&quot;taglia-unica&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_mtb-clothing-size=taglia-unica&amp;query_type_mtb-clothing-size=or&quot;,&quot;filter_name&quot;:&quot;filter_mtb-clothing-size&quot;}">--}}

{{--                                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                                            <input data-checkbox="" type="checkbox" class="form-checkbox   form-checkbox-secondary  w-5 h-5" value="taglia-unica " name="filter_mtb-clothing-size ">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    Taglia unica--}}
{{--                </span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </label>--}}
{{--                                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="w-full pt-3">--}}
{{--                                                <div class="pt-5">--}}
{{--                                                    <span class="block font-medium text-[#E72B6F] text-lg mb-6">Intimo, pigiami e calze mamma</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="max-h-96 overflow-y-auto">--}}
{{--                                                    <div class="pb-2">--}}
{{--                                                        <div class="flex justify-start flex-wrap -ml-4 -mt-4">--}}
{{--                                                            <div class="ml-4 mt-4" style="min-width: 200px">--}}
{{--                                                                <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:1,&quot;slug&quot;:&quot;l-xl&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_mtb-underwear-size=l-xl&amp;query_type_mtb-underwear-size=or&quot;,&quot;filter_name&quot;:&quot;filter_mtb-underwear-size&quot;}">--}}

{{--                                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                                            <input data-checkbox="" type="checkbox" class="form-checkbox   form-checkbox-secondary  w-5 h-5" value="l-xl " name="filter_mtb-underwear-size ">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    L-XL--}}
{{--                </span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </label>--}}
{{--                                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ml-4 mt-4" style="min-width: 200px">--}}
{{--                                                                <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:1,&quot;slug&quot;:&quot;s-m&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_mtb-underwear-size=s-m&amp;query_type_mtb-underwear-size=or&quot;,&quot;filter_name&quot;:&quot;filter_mtb-underwear-size&quot;}">--}}

{{--                                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                                            <input data-checkbox="" type="checkbox" class="form-checkbox   form-checkbox-secondary  w-5 h-5" value="s-m " name="filter_mtb-underwear-size ">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    S-M--}}
{{--                </span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </label>--}}
{{--                                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ml-4 mt-4" style="min-width: 200px">--}}
{{--                                                                <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:41,&quot;slug&quot;:&quot;xl-46-48&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_mtb-underwear-size=xl-46-48&amp;query_type_mtb-underwear-size=or&quot;,&quot;filter_name&quot;:&quot;filter_mtb-underwear-size&quot;}">--}}

{{--                                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                                            <input data-checkbox="" type="checkbox" class="form-checkbox   form-checkbox-secondary  w-5 h-5" value="xl-46-48 " name="filter_mtb-underwear-size ">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    XL | 46-48--}}
{{--                </span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </label>--}}
{{--                                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ml-4 mt-4" style="min-width: 200px">--}}
{{--                                                                <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:4,&quot;slug&quot;:&quot;xxs-36-38&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_mtb-underwear-size=xxs-36-38&amp;query_type_mtb-underwear-size=or&quot;,&quot;filter_name&quot;:&quot;filter_mtb-underwear-size&quot;}">--}}

{{--                                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                                            <input data-checkbox="" type="checkbox" class="form-checkbox   form-checkbox-secondary  w-5 h-5" value="xxs-36-38 " name="filter_mtb-underwear-size ">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    XXS | 36-38--}}
{{--                </span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </label>--}}
{{--                                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ml-4 mt-4" style="min-width: 200px">--}}
{{--                                                                <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:61,&quot;slug&quot;:&quot;s-40-42&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_mtb-underwear-size=s-40-42&amp;query_type_mtb-underwear-size=or&quot;,&quot;filter_name&quot;:&quot;filter_mtb-underwear-size&quot;}">--}}

{{--                                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                                            <input data-checkbox="" type="checkbox" class="form-checkbox   form-checkbox-secondary  w-5 h-5" value="s-40-42 " name="filter_mtb-underwear-size ">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    S | 40-42--}}
{{--                </span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </label>--}}
{{--                                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ml-4 mt-4" style="min-width: 200px">--}}
{{--                                                                <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:62,&quot;slug&quot;:&quot;m-42-44&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_mtb-underwear-size=m-42-44&amp;query_type_mtb-underwear-size=or&quot;,&quot;filter_name&quot;:&quot;filter_mtb-underwear-size&quot;}">--}}

{{--                                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                                            <input data-checkbox="" type="checkbox" class="form-checkbox   form-checkbox-secondary  w-5 h-5" value="m-42-44 " name="filter_mtb-underwear-size ">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    M | 42-44--}}
{{--                </span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </label>--}}
{{--                                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ml-4 mt-4" style="min-width: 200px">--}}
{{--                                                                <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:69,&quot;slug&quot;:&quot;l-46-48&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_mtb-underwear-size=l-46-48&amp;query_type_mtb-underwear-size=or&quot;,&quot;filter_name&quot;:&quot;filter_mtb-underwear-size&quot;}">--}}

{{--                                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                                            <input data-checkbox="" type="checkbox" class="form-checkbox   form-checkbox-secondary  w-5 h-5" value="l-46-48 " name="filter_mtb-underwear-size ">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    L | 46-48--}}
{{--                </span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </label>--}}
{{--                                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ml-4 mt-4" style="min-width: 200px">--}}
{{--                                                                <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:69,&quot;slug&quot;:&quot;xl-48-50&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_mtb-underwear-size=xl-48-50&amp;query_type_mtb-underwear-size=or&quot;,&quot;filter_name&quot;:&quot;filter_mtb-underwear-size&quot;}">--}}

{{--                                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                                            <input data-checkbox="" type="checkbox" class="form-checkbox   form-checkbox-secondary  w-5 h-5" value="xl-48-50 " name="filter_mtb-underwear-size ">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    XL | 48-50--}}
{{--                </span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </label>--}}
{{--                                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ml-4 mt-4" style="min-width: 200px">--}}
{{--                                                                <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:10,&quot;slug&quot;:&quot;xxl-50-52&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_mtb-underwear-size=xxl-50-52&amp;query_type_mtb-underwear-size=or&quot;,&quot;filter_name&quot;:&quot;filter_mtb-underwear-size&quot;}">--}}

{{--                                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                                            <input data-checkbox="" type="checkbox" class="form-checkbox   form-checkbox-secondary  w-5 h-5" value="xxl-50-52 " name="filter_mtb-underwear-size ">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    XXL | 50-52--}}
{{--                </span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </label>--}}
{{--                                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ml-4 mt-4" style="min-width: 200px">--}}
{{--                                                                <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:1,&quot;slug&quot;:&quot;s-m-40-44&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_mtb-underwear-size=s-m-40-44&amp;query_type_mtb-underwear-size=or&quot;,&quot;filter_name&quot;:&quot;filter_mtb-underwear-size&quot;}">--}}

{{--                                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                                            <input data-checkbox="" type="checkbox" class="form-checkbox   form-checkbox-secondary  w-5 h-5" value="s-m-40-44 " name="filter_mtb-underwear-size ">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    S-M | 40-44--}}
{{--                </span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </label>--}}
{{--                                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ml-4 mt-4" style="min-width: 200px">--}}
{{--                                                                <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:1,&quot;slug&quot;:&quot;l-xl-46-50&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_mtb-underwear-size=l-xl-46-50&amp;query_type_mtb-underwear-size=or&quot;,&quot;filter_name&quot;:&quot;filter_mtb-underwear-size&quot;}">--}}

{{--                                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                                            <input data-checkbox="" type="checkbox" class="form-checkbox   form-checkbox-secondary  w-5 h-5" value="l-xl-46-50 " name="filter_mtb-underwear-size ">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    L-XL | 46-50--}}
{{--                </span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </label>--}}
{{--                                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ml-4 mt-4" style="min-width: 200px">--}}
{{--                                                                <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:5,&quot;slug&quot;:&quot;1&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_mtb-underwear-size=1&amp;query_type_mtb-underwear-size=or&quot;,&quot;filter_name&quot;:&quot;filter_mtb-underwear-size&quot;}">--}}

{{--                                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                                            <input data-checkbox="" type="checkbox" class="form-checkbox   form-checkbox-secondary  w-5 h-5" value="1 " name="filter_mtb-underwear-size ">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    1--}}
{{--                </span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </label>--}}
{{--                                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ml-4 mt-4" style="min-width: 200px">--}}
{{--                                                                <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:17,&quot;slug&quot;:&quot;2&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_mtb-underwear-size=2&amp;query_type_mtb-underwear-size=or&quot;,&quot;filter_name&quot;:&quot;filter_mtb-underwear-size&quot;}">--}}

{{--                                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                                            <input data-checkbox="" type="checkbox" class="form-checkbox   form-checkbox-secondary  w-5 h-5" value="2 " name="filter_mtb-underwear-size ">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    2--}}
{{--                </span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </label>--}}
{{--                                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ml-4 mt-4" style="min-width: 200px">--}}
{{--                                                                <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:19,&quot;slug&quot;:&quot;3&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_mtb-underwear-size=3&amp;query_type_mtb-underwear-size=or&quot;,&quot;filter_name&quot;:&quot;filter_mtb-underwear-size&quot;}">--}}

{{--                                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                                            <input data-checkbox="" type="checkbox" class="form-checkbox   form-checkbox-secondary  w-5 h-5" value="3 " name="filter_mtb-underwear-size ">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    3--}}
{{--                </span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </label>--}}
{{--                                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ml-4 mt-4" style="min-width: 200px">--}}
{{--                                                                <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:16,&quot;slug&quot;:&quot;4&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_mtb-underwear-size=4&amp;query_type_mtb-underwear-size=or&quot;,&quot;filter_name&quot;:&quot;filter_mtb-underwear-size&quot;}">--}}

{{--                                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                                            <input data-checkbox="" type="checkbox" class="form-checkbox   form-checkbox-secondary  w-5 h-5" value="4 " name="filter_mtb-underwear-size ">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    4--}}
{{--                </span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </label>--}}
{{--                                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ml-4 mt-4" style="min-width: 200px">--}}
{{--                                                                <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:14,&quot;slug&quot;:&quot;5&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_mtb-underwear-size=5&amp;query_type_mtb-underwear-size=or&quot;,&quot;filter_name&quot;:&quot;filter_mtb-underwear-size&quot;}">--}}

{{--                                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                                            <input data-checkbox="" type="checkbox" class="form-checkbox   form-checkbox-secondary  w-5 h-5" value="5 " name="filter_mtb-underwear-size ">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    5--}}
{{--                </span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </label>--}}
{{--                                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ml-4 mt-4" style="min-width: 200px">--}}
{{--                                                                <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:2,&quot;slug&quot;:&quot;6&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_mtb-underwear-size=6&amp;query_type_mtb-underwear-size=or&quot;,&quot;filter_name&quot;:&quot;filter_mtb-underwear-size&quot;}">--}}

{{--                                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                                            <input data-checkbox="" type="checkbox" class="form-checkbox   form-checkbox-secondary  w-5 h-5" value="6 " name="filter_mtb-underwear-size ">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    6--}}
{{--                </span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </label>--}}
{{--                                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ml-4 mt-4" style="min-width: 200px">--}}
{{--                                                                <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:1,&quot;slug&quot;:&quot;taglia-unica&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_mtb-underwear-size=taglia-unica&amp;query_type_mtb-underwear-size=or&quot;,&quot;filter_name&quot;:&quot;filter_mtb-underwear-size&quot;}">--}}

{{--                                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                                            <input data-checkbox="" type="checkbox" class="form-checkbox   form-checkbox-secondary  w-5 h-5" value="taglia-unica " name="filter_mtb-underwear-size ">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    Taglia unica--}}
{{--                </span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </label>--}}
{{--                                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="w-full pt-3">--}}
{{--                                                <div class="pt-5">--}}
{{--                                                    <span class="block font-medium text-[#E72B6F] text-lg mb-6">Pantofole mamma</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="max-h-96 overflow-y-auto">--}}
{{--                                                    <div class="pb-2">--}}
{{--                                                        <div class="flex justify-start flex-wrap -ml-4 -mt-4">--}}
{{--                                                            <div class="ml-4 mt-4" style="min-width: 200px">--}}
{{--                                                                <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:5,&quot;slug&quot;:&quot;36-37&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_mtb-footwear-size=36-37&amp;query_type_mtb-footwear-size=or&quot;,&quot;filter_name&quot;:&quot;filter_mtb-footwear-size&quot;}">--}}

{{--                                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                                            <input data-checkbox="" type="checkbox" class="form-checkbox   form-checkbox-secondary  w-5 h-5" value="36-37 " name="filter_mtb-footwear-size ">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    36-37--}}
{{--                </span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </label>--}}
{{--                                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ml-4 mt-4" style="min-width: 200px">--}}
{{--                                                                <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:5,&quot;slug&quot;:&quot;38-39&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_mtb-footwear-size=38-39&amp;query_type_mtb-footwear-size=or&quot;,&quot;filter_name&quot;:&quot;filter_mtb-footwear-size&quot;}">--}}

{{--                                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                                            <input data-checkbox="" type="checkbox" class="form-checkbox   form-checkbox-secondary  w-5 h-5" value="38-39 " name="filter_mtb-footwear-size ">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    38-39--}}
{{--                </span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </label>--}}
{{--                                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ml-4 mt-4" style="min-width: 200px">--}}
{{--                                                                <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:5,&quot;slug&quot;:&quot;40-41&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_mtb-footwear-size=40-41&amp;query_type_mtb-footwear-size=or&quot;,&quot;filter_name&quot;:&quot;filter_mtb-footwear-size&quot;}">--}}

{{--                                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                                            <input data-checkbox="" type="checkbox" class="form-checkbox   form-checkbox-secondary  w-5 h-5" value="40-41 " name="filter_mtb-footwear-size ">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    40-41--}}
{{--                </span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </label>--}}
{{--                                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>                        </div>--}}
{{--                        </div>--}}












{{--                        <div class="pb-8">--}}
{{--                            <div class="flex flex-col space-y-2">--}}
{{--                                <span class="block font-bold text-base text-[#E72B6F] mb-2">Filtra per prezzo</span><span class="hidden">Filtra per prezzo</span><div style="min-width: 160px">--}}
{{--                                    <div data-component="range-slider" class="px-2">--}}
{{--                                        <input type="hidden" name="price-range[]" value="0">--}}
{{--                                        <input type="hidden" name="price-range[]" value="2000">--}}

{{--                                        <div data-range-slider="" data-options="{&quot;min&quot;:0,&quot;max&quot;:2000,&quot;step&quot;:10,&quot;start&quot;:[0,2000],&quot;connect&quot;:true,&quot;tooltips&quot;:true}" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"><div class="noUi-base"><div class="noUi-connects"><div class="noUi-connect" style="transform: translate(0%, 0px) scale(1, 1);"></div></div><div class="noUi-origin" style="transform: translate(-1000%, 0px); z-index: 5;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="2000.0" aria-valuenow="0.0" aria-valuetext="0.00"><div class="noUi-touch-area"></div><div class="noUi-tooltip">0.00</div></div></div><div class="noUi-origin" style="transform: translate(0%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="2000.0" aria-valuenow="2000.0" aria-valuetext="2000.00"><div class="noUi-touch-area"></div><div class="noUi-tooltip">2000.00</div></div></div></div></div>--}}

{{--                                        <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-none" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute text-sm leading-5 transition duration-300 ease-in text-red-600 w-full truncate opacity-0 translate-y-2 pointer-events-none"></span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                        <div>--}}
{{--                            <div class="accordion-container" data-component="accordion" data-options="{}">--}}
{{--                                <div class="ac js-enabled" id="ac-1">--}}
{{--                                    <div class="ac-header" tabindex="0">--}}
{{--                                        <span class="block ac-trigger" id="ac-trigger-1" role="button" aria-controls="ac-panel-1" aria-disabled="false" aria-expanded="false">--}}
{{--                                            <div class="flex items-center mb-4">--}}
{{--                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 mr-2 text-[#E72B6F] open">--}}
{{--                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>--}}
{{--                                                </svg>--}}
{{--                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 mr-2 text-[#E72B6F] close">--}}
{{--                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6"></path>--}}
{{--                                                </svg>--}}
{{--                                                <span class="block font-bold text-lg text-[#E72B6F]">Filtra per marca</span>--}}
{{--                                            </div>--}}
{{--                                        </span>--}}
{{--                                    </div>--}}
{{--                                    <div class="ac-panel" style="height: 0px; transition-duration: 600ms;" id="ac-panel-1" role="region" aria-labelledby="ac-trigger-1">--}}
{{--                                        <div>--}}
{{--                                            <div class="flex flex-col space-y-2">--}}
{{--                                                <div data-component="checkbox" class="relative">--}}

{{--                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                            <input data-checkbox="" type="checkbox" class="form-checkbox   form-checkbox-secondary  w-5 h-5" value="lines" name="filter_brand">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="relative flex-1">--}}
{{--                                                            <span class="font-normal text-base text-gray-900">--}}
{{--                                                                Lines--}}
{{--                                                            </span>--}}
{{--                                                        </div>--}}
{{--                                                    </label>--}}
{{--                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}
{{--                                                    </span>--}}
{{--                                                </div>--}}
{{--                                                <div data-component="checkbox" class="relative">--}}

{{--                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                            <input data-checkbox="" type="checkbox" class="form-checkbox   form-checkbox-secondary  w-5 h-5" value="mamijux" name="filter_brand">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    Mamijux--}}
{{--                </span>--}}
{{--                                                        </div>--}}
{{--                                                    </label>--}}
{{--                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                </div>--}}
{{--                                                <div data-component="checkbox" class="relative">--}}

{{--                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                            <input data-checkbox="" type="checkbox" class="form-checkbox   form-checkbox-secondary  w-5 h-5" value="prenatal" name="filter_brand">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    Prénatal--}}
{{--                </span>--}}
{{--                                                        </div>--}}
{{--                                                    </label>--}}
{{--                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                        <div>--}}
{{--                            <div class="accordion-container" data-component="accordion" data-options="{}">--}}
{{--                                <div class="ac js-enabled" id="ac-2">--}}
{{--                                    <div class="ac-header" tabindex="0">--}}
{{--        <span class="block ac-trigger" id="ac-trigger-2" role="button" aria-controls="ac-panel-2" aria-disabled="false" aria-expanded="false">--}}
{{--            <div class="flex items-center mb-4">--}}
{{--                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 mr-2 text-[#E72B6F] open">--}}
{{--    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>--}}
{{--  </svg>                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 mr-2 text-[#E72B6F] close">--}}
{{--    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6"></path>--}}
{{--</svg>                                        <span class="block font-bold text-lg text-[#E72B6F]">Filtra per sesso</span>--}}
{{--                                    </div>--}}
{{--        </span>--}}
{{--                                    </div>--}}
{{--                                    <div class="ac-panel" style="height: 0px; transition-duration: 600ms;" id="ac-panel-2" role="region" aria-labelledby="ac-trigger-2">--}}
{{--                                        <div>--}}
{{--                                            <div class="flex flex-col space-y-2">--}}
{{--                                                <div data-component="checkbox" class="relative">--}}

{{--                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                            <input data-checkbox="" type="checkbox" class="form-checkbox   form-checkbox-secondary  w-5 h-5" value="femmina" name="filter_gender">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    Femmina--}}
{{--                </span>--}}
{{--                                                        </div>--}}
{{--                                                    </label>--}}
{{--                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                </div>--}}
{{--                                                <div data-component="checkbox" class="relative">--}}

{{--                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                            <input data-checkbox="" type="checkbox" class="form-checkbox   form-checkbox-secondary  w-5 h-5" value="unisex" name="filter_gender">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    Unisex--}}
{{--                </span>--}}
{{--                                                        </div>--}}
{{--                                                    </label>--}}
{{--                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>                    </div>--}}


{{--                        <div>--}}
{{--                            <div class="accordion-container" data-component="accordion" data-options="{}">--}}
{{--                                <div class="ac js-enabled" id="ac-3">--}}
{{--                                    <div class="ac-header" tabindex="0">--}}
{{--        <span class="block ac-trigger" id="ac-trigger-3" role="button" aria-controls="ac-panel-3" aria-disabled="false" aria-expanded="false">--}}
{{--            <div class="flex items-center mb-4">--}}
{{--                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 mr-2 text-[#E72B6F] open">--}}
{{--    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>--}}
{{--  </svg>                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 mr-2 text-[#E72B6F] close">--}}
{{--    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6"></path>--}}
{{--</svg>                                        <span class="block font-bold text-lg text-[#E72B6F]">Filtra per colore</span>--}}
{{--                                    </div>--}}
{{--        </span>--}}
{{--                                    </div>--}}
{{--                                    <div class="ac-panel" style="height: 0px; transition-duration: 600ms;" id="ac-panel-3" role="region" aria-labelledby="ac-trigger-3">--}}
{{--                                        <div>--}}
{{--                                            <div class="flex flex-col space-y-2">--}}
{{--                                                <div data-component="checkbox" class="relative">--}}
{{--                                                    <style>--}}
{{--                                                        [data-component="checkbox"] .form-checkbox-color-ed30729549c9852aac97bd8473a22b43 {--}}
{{--                                                            background-color: #0080ff;--}}
{{--                                                        }--}}

{{--                                                        [data-component="checkbox"] .form-checkbox-color-ed30729549c9852aac97bd8473a22b43:checked {--}}
{{--                                                            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='black' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");--}}
{{--                                                            background-color: #0080ff;--}}
{{--                                                            box-shadow: none;--}}
{{--                                                        }--}}
{{--                                                    </style>--}}

{{--                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                            <input data-checkbox="" type="checkbox" class="form-checkbox form-checkbox-color-ed30729549c9852aac97bd8473a22b43  form-checkbox-secondary  w-5 h-5" value="azzurro" name="filter_color">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    Azzurro--}}
{{--                </span>--}}
{{--                                                        </div>--}}
{{--                                                    </label>--}}
{{--                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                </div>--}}
{{--                                                <div data-component="checkbox" class="relative">--}}
{{--                                                    <style>--}}
{{--                                                        [data-component="checkbox"] .form-checkbox-color-bfdf210cd1b105a5df2072389404edeb {--}}
{{--                                                            background-color: #cec4ab;--}}
{{--                                                        }--}}

{{--                                                        [data-component="checkbox"] .form-checkbox-color-bfdf210cd1b105a5df2072389404edeb:checked {--}}
{{--                                                            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='black' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");--}}
{{--                                                            background-color: #cec4ab;--}}
{{--                                                            box-shadow: none;--}}
{{--                                                        }--}}
{{--                                                    </style>--}}

{{--                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                            <input data-checkbox="" type="checkbox" class="form-checkbox form-checkbox-color-bfdf210cd1b105a5df2072389404edeb  form-checkbox-secondary  w-5 h-5" value="beige" name="filter_color">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    Beige--}}
{{--                </span>--}}
{{--                                                        </div>--}}
{{--                                                    </label>--}}
{{--                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                </div>--}}
{{--                                                <div data-component="checkbox" class="relative">--}}
{{--                                                    <style>--}}
{{--                                                        [data-component="checkbox"] .form-checkbox-color-54922f2e920ba8346f6dc0fba343d673 {--}}
{{--                                                            background-color: #ffffff;--}}
{{--                                                        }--}}

{{--                                                        [data-component="checkbox"] .form-checkbox-color-54922f2e920ba8346f6dc0fba343d673:checked {--}}
{{--                                                            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='black' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");--}}
{{--                                                            background-color: #ffffff;--}}
{{--                                                            box-shadow: none;--}}
{{--                                                        }--}}
{{--                                                    </style>--}}

{{--                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                            <input data-checkbox="" type="checkbox" class="form-checkbox form-checkbox-color-54922f2e920ba8346f6dc0fba343d673  form-checkbox-secondary  w-5 h-5" value="bianco" name="filter_color">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    Bianco--}}
{{--                </span>--}}
{{--                                                        </div>--}}
{{--                                                    </label>--}}
{{--                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                </div>--}}
{{--                                                <div data-component="checkbox" class="relative">--}}
{{--                                                    <style>--}}
{{--                                                        [data-component="checkbox"] .form-checkbox-color-e310d39cbd68145645b89b892116dbbd {--}}
{{--                                                            background-color: #1926da;--}}
{{--                                                        }--}}

{{--                                                        [data-component="checkbox"] .form-checkbox-color-e310d39cbd68145645b89b892116dbbd:checked {--}}
{{--                                                            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");--}}
{{--                                                            background-color: #1926da;--}}
{{--                                                            box-shadow: none;--}}
{{--                                                        }--}}
{{--                                                    </style>--}}

{{--                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                            <input data-checkbox="" type="checkbox" class="form-checkbox form-checkbox-color-e310d39cbd68145645b89b892116dbbd  form-checkbox-secondary  w-5 h-5" value="blue" name="filter_color">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    Blu--}}
{{--                </span>--}}
{{--                                                        </div>--}}
{{--                                                    </label>--}}
{{--                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                </div>--}}
{{--                                                <div data-component="checkbox" class="relative">--}}
{{--                                                    <style>--}}
{{--                                                        [data-component="checkbox"] .form-checkbox-color-04d885c511dd0c2eb61bff08dee8df80 {--}}
{{--                                                            background-color: #7f97b5;--}}
{{--                                                        }--}}

{{--                                                        [data-component="checkbox"] .form-checkbox-color-04d885c511dd0c2eb61bff08dee8df80:checked {--}}
{{--                                                            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='black' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");--}}
{{--                                                            background-color: #7f97b5;--}}
{{--                                                            box-shadow: none;--}}
{{--                                                        }--}}
{{--                                                    </style>--}}

{{--                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                            <input data-checkbox="" type="checkbox" class="form-checkbox form-checkbox-color-04d885c511dd0c2eb61bff08dee8df80  form-checkbox-secondary  w-5 h-5" value="denim" name="filter_color">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    Denim--}}
{{--                </span>--}}
{{--                                                        </div>--}}
{{--                                                    </label>--}}
{{--                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                </div>--}}
{{--                                                <div data-component="checkbox" class="relative">--}}
{{--                                                    <style>--}}
{{--                                                        [data-component="checkbox"] .form-checkbox-color-54922f2e920ba8346f6dc0fba343d673 {--}}
{{--                                                            background-color: #ffffff;--}}
{{--                                                        }--}}

{{--                                                        [data-component="checkbox"] .form-checkbox-color-54922f2e920ba8346f6dc0fba343d673:checked {--}}
{{--                                                            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='black' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");--}}
{{--                                                            background-color: #ffffff;--}}
{{--                                                            box-shadow: none;--}}
{{--                                                        }--}}
{{--                                                    </style>--}}

{{--                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                            <input data-checkbox="" type="checkbox" class="form-checkbox form-checkbox-color-54922f2e920ba8346f6dc0fba343d673  form-checkbox-secondary  w-5 h-5" value="fantasia" name="filter_color">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    Fantasia--}}
{{--                </span>--}}
{{--                                                        </div>--}}
{{--                                                    </label>--}}
{{--                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                </div>--}}
{{--                                                <div data-component="checkbox" class="relative">--}}
{{--                                                    <style>--}}
{{--                                                        [data-component="checkbox"] .form-checkbox-color-c7522a95838a32a66304710be8a7055d {--}}
{{--                                                            background-color: #f7f024;--}}
{{--                                                        }--}}

{{--                                                        [data-component="checkbox"] .form-checkbox-color-c7522a95838a32a66304710be8a7055d:checked {--}}
{{--                                                            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='black' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");--}}
{{--                                                            background-color: #f7f024;--}}
{{--                                                            box-shadow: none;--}}
{{--                                                        }--}}
{{--                                                    </style>--}}

{{--                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                            <input data-checkbox="" type="checkbox" class="form-checkbox form-checkbox-color-c7522a95838a32a66304710be8a7055d  form-checkbox-secondary  w-5 h-5" value="giallo" name="filter_color">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    Giallo--}}
{{--                </span>--}}
{{--                                                        </div>--}}
{{--                                                    </label>--}}
{{--                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                </div>--}}
{{--                                                <div data-component="checkbox" class="relative">--}}
{{--                                                    <style>--}}
{{--                                                        [data-component="checkbox"] .form-checkbox-color-efd5b71d20771d551e9eb2a6882326a0 {--}}
{{--                                                            background-color: #808080;--}}
{{--                                                        }--}}

{{--                                                        [data-component="checkbox"] .form-checkbox-color-efd5b71d20771d551e9eb2a6882326a0:checked {--}}
{{--                                                            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='black' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");--}}
{{--                                                            background-color: #808080;--}}
{{--                                                            box-shadow: none;--}}
{{--                                                        }--}}
{{--                                                    </style>--}}

{{--                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                            <input data-checkbox="" type="checkbox" class="form-checkbox form-checkbox-color-efd5b71d20771d551e9eb2a6882326a0  form-checkbox-secondary  w-5 h-5" value="grigio" name="filter_color">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    Grigio--}}
{{--                </span>--}}
{{--                                                        </div>--}}
{{--                                                    </label>--}}
{{--                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                </div>--}}
{{--                                                <div data-component="checkbox" class="relative">--}}
{{--                                                    <style>--}}
{{--                                                        [data-component="checkbox"] .form-checkbox-color-8b3bfd0b1bbc9e9d1152145a37c87c87 {--}}
{{--                                                            background-color: #64410e;--}}
{{--                                                        }--}}

{{--                                                        [data-component="checkbox"] .form-checkbox-color-8b3bfd0b1bbc9e9d1152145a37c87c87:checked {--}}
{{--                                                            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");--}}
{{--                                                            background-color: #64410e;--}}
{{--                                                            box-shadow: none;--}}
{{--                                                        }--}}
{{--                                                    </style>--}}

{{--                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                            <input data-checkbox="" type="checkbox" class="form-checkbox form-checkbox-color-8b3bfd0b1bbc9e9d1152145a37c87c87  form-checkbox-secondary  w-5 h-5" value="marrone" name="filter_color">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    Marrone--}}
{{--                </span>--}}
{{--                                                        </div>--}}
{{--                                                    </label>--}}
{{--                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                </div>--}}
{{--                                                <div data-component="checkbox" class="relative">--}}
{{--                                                    <style>--}}
{{--                                                        [data-component="checkbox"] .form-checkbox-color-5880b1242eab52159e8a8c2aa4f2bcf0 {--}}
{{--                                                            background-color: #d4b578;--}}
{{--                                                        }--}}

{{--                                                        [data-component="checkbox"] .form-checkbox-color-5880b1242eab52159e8a8c2aa4f2bcf0:checked {--}}
{{--                                                            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='black' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");--}}
{{--                                                            background-color: #d4b578;--}}
{{--                                                            box-shadow: none;--}}
{{--                                                        }--}}
{{--                                                    </style>--}}

{{--                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                            <input data-checkbox="" type="checkbox" class="form-checkbox form-checkbox-color-5880b1242eab52159e8a8c2aa4f2bcf0  form-checkbox-secondary  w-5 h-5" value="naturale" name="filter_color">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    Naturale--}}
{{--                </span>--}}
{{--                                                        </div>--}}
{{--                                                    </label>--}}
{{--                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                </div>--}}
{{--                                                <div data-component="checkbox" class="relative">--}}
{{--                                                    <style>--}}
{{--                                                        [data-component="checkbox"] .form-checkbox-color-77e774e6cc4d94d6a32f6256f02d9552 {--}}
{{--                                                            background-color: #000000;--}}
{{--                                                        }--}}

{{--                                                        [data-component="checkbox"] .form-checkbox-color-77e774e6cc4d94d6a32f6256f02d9552:checked {--}}
{{--                                                            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");--}}
{{--                                                            background-color: #000000;--}}
{{--                                                            box-shadow: none;--}}
{{--                                                        }--}}
{{--                                                    </style>--}}

{{--                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                            <input data-checkbox="" type="checkbox" class="form-checkbox form-checkbox-color-77e774e6cc4d94d6a32f6256f02d9552  form-checkbox-secondary  w-5 h-5" value="nero" name="filter_color">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    Nero--}}
{{--                </span>--}}
{{--                                                        </div>--}}
{{--                                                    </label>--}}
{{--                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                </div>--}}
{{--                                                <div data-component="checkbox" class="relative">--}}

{{--                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                            <input data-checkbox="" type="checkbox" class="form-checkbox   form-checkbox-secondary  w-5 h-5" value="non-definito" name="filter_color">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    Non definito--}}
{{--                </span>--}}
{{--                                                        </div>--}}
{{--                                                    </label>--}}
{{--                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                </div>--}}
{{--                                                <div data-component="checkbox" class="relative">--}}
{{--                                                    <style>--}}
{{--                                                        [data-component="checkbox"] .form-checkbox-color-7470511e86b073a033bfd364034d2bcb {--}}
{{--                                                            background-color: #ecefe1;--}}
{{--                                                        }--}}

{{--                                                        [data-component="checkbox"] .form-checkbox-color-7470511e86b073a033bfd364034d2bcb:checked {--}}
{{--                                                            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='black' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");--}}
{{--                                                            background-color: #ecefe1;--}}
{{--                                                            box-shadow: none;--}}
{{--                                                        }--}}
{{--                                                    </style>--}}

{{--                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                            <input data-checkbox="" type="checkbox" class="form-checkbox form-checkbox-color-7470511e86b073a033bfd364034d2bcb  form-checkbox-secondary  w-5 h-5" value="panna" name="filter_color">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    Panna--}}
{{--                </span>--}}
{{--                                                        </div>--}}
{{--                                                    </label>--}}
{{--                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                </div>--}}
{{--                                                <div data-component="checkbox" class="relative">--}}
{{--                                                    <style>--}}
{{--                                                        [data-component="checkbox"] .form-checkbox-color-672a01a77fc5fa62ea5c6de830781c89 {--}}
{{--                                                            background-color: #dd96bd;--}}
{{--                                                        }--}}

{{--                                                        [data-component="checkbox"] .form-checkbox-color-672a01a77fc5fa62ea5c6de830781c89:checked {--}}
{{--                                                            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='black' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");--}}
{{--                                                            background-color: #dd96bd;--}}
{{--                                                            box-shadow: none;--}}
{{--                                                        }--}}
{{--                                                    </style>--}}

{{--                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                            <input data-checkbox="" type="checkbox" class="form-checkbox form-checkbox-color-672a01a77fc5fa62ea5c6de830781c89  form-checkbox-secondary  w-5 h-5" value="rosa" name="filter_color">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    Rosa--}}
{{--                </span>--}}
{{--                                                        </div>--}}
{{--                                                    </label>--}}
{{--                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                </div>--}}
{{--                                                <div data-component="checkbox" class="relative">--}}
{{--                                                    <style>--}}
{{--                                                        [data-component="checkbox"] .form-checkbox-color-66ae4c7ea8ab330e4593d98ca3185475 {--}}
{{--                                                            background-color: #e82121;--}}
{{--                                                        }--}}

{{--                                                        [data-component="checkbox"] .form-checkbox-color-66ae4c7ea8ab330e4593d98ca3185475:checked {--}}
{{--                                                            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");--}}
{{--                                                            background-color: #e82121;--}}
{{--                                                            box-shadow: none;--}}
{{--                                                        }--}}
{{--                                                    </style>--}}

{{--                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                            <input data-checkbox="" type="checkbox" class="form-checkbox form-checkbox-color-66ae4c7ea8ab330e4593d98ca3185475  form-checkbox-secondary  w-5 h-5" value="rosso" name="filter_color">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    Rosso--}}
{{--                </span>--}}
{{--                                                        </div>--}}
{{--                                                    </label>--}}
{{--                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                </div>--}}
{{--                                                <div data-component="checkbox" class="relative">--}}
{{--                                                    <style>--}}
{{--                                                        [data-component="checkbox"] .form-checkbox-color-54922f2e920ba8346f6dc0fba343d673 {--}}
{{--                                                            background-color: #ffffff;--}}
{{--                                                        }--}}

{{--                                                        [data-component="checkbox"] .form-checkbox-color-54922f2e920ba8346f6dc0fba343d673:checked {--}}
{{--                                                            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='black' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");--}}
{{--                                                            background-color: #ffffff;--}}
{{--                                                            box-shadow: none;--}}
{{--                                                        }--}}
{{--                                                    </style>--}}

{{--                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                            <input data-checkbox="" type="checkbox" class="form-checkbox form-checkbox-color-54922f2e920ba8346f6dc0fba343d673  form-checkbox-secondary  w-5 h-5" value="senza-colore" name="filter_color">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    Senza colore--}}
{{--                </span>--}}
{{--                                                        </div>--}}
{{--                                                    </label>--}}
{{--                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                </div>--}}
{{--                                                <div data-component="checkbox" class="relative">--}}
{{--                                                    <style>--}}
{{--                                                        [data-component="checkbox"] .form-checkbox-color-367ef27272ca8e9a57241be4c80793d5 {--}}
{{--                                                            background-color: #06cb34;--}}
{{--                                                        }--}}

{{--                                                        [data-component="checkbox"] .form-checkbox-color-367ef27272ca8e9a57241be4c80793d5:checked {--}}
{{--                                                            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");--}}
{{--                                                            background-color: #06cb34;--}}
{{--                                                            box-shadow: none;--}}
{{--                                                        }--}}
{{--                                                    </style>--}}

{{--                                                    <label class="flex space-x-4 items-center">--}}
{{--                                                        <div class="flex-shrink-0 flex">--}}
{{--                                                            <input data-checkbox="" type="checkbox" class="form-checkbox form-checkbox-color-367ef27272ca8e9a57241be4c80793d5  form-checkbox-secondary  w-5 h-5" value="verde" name="filter_color">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="relative flex-1">--}}
{{--                <span class="font-normal text-base text-gray-900">--}}
{{--                    Verde--}}
{{--                </span>--}}
{{--                                                        </div>--}}
{{--                                                    </label>--}}
{{--                                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">--}}

{{--    </span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>                    </div>--}}


                    </div>
                </div>


                <div class="bg-white relative px-2 py-2 z-50 border-t-2 border-gray-100 flex">
                    <div class=" w-full ">
                        <button class="w-full flex uppercase justify-center items-center text-center rounded-full px-5 border transition delay-150 duration-150 ease-in-out focus:outline-none text-base py-2 px-5 bg-[#E72B6F] text-white border-[#E72B6F] hover:bg-white hover:text-[#E72B6F] focus:bg-white focus:text-[#E72B6F] focus:shadow-outline-[#E72B6F] cursor-pointer" data-disabled-classes="bg-gray-300 text-white border-gray-300 pointer-events-none cursor-not-allowed" data-enabled-classes="bg-[#E72B6F] text-white border-[#E72B6F] hover:bg-white hover:text-[#E72B6F] focus:bg-white focus:text-[#E72B6F] focus:shadow-outline-[#E72B6F] cursor-pointer" type="submit" aria-label="Applica">
                            <span class="button-text">
                                Applica
                            </span>
                        </button>
                    </div>
                </div>

            </div>

            <input name="filter_dam_attributes" type="hidden" data-filter-dam="">
        </div>
    </div>
    </div>
</form>
