<form action="{{ URL::current() }}" method="GET">
    <div
            class=""
            x-data="{showMenu : false}"
    >

        <button
                @click.prevent="showMenu = !showMenu "
                type="button"
                class="relative pointer-events-auto lg:hidden focus:outline-none w-full border-2 rounded-full py-2 flex items-center justify-center border-gray-300 text-base text-[#E72B6F] font-medium hover:border-[#E72B6F]">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-[#E72B6F] transform rotate-90">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
            </svg>
            <span class="uppercase ml-2">Filtri</span>
        </button>



    <div
        x-show="showMenu"
        class="">
        <div class="fixed z-50 inset-0 bg-black transition duration-150 pointer-events-none opacity-25" ></div>



        <div class="fixed left-0 top-0 bottom-px w-full md:shadow-md md:max-w-5xl md:h-auto md:max-h-11/12 md:left-1/2 md:top-1/2 md:transform md:-translate-x-1/2 md:-translate-y-1/2 flex flex-col bg-white z-50 transition duration-150 ease-in transform  translate-y-4 " >
            <div class="border-b border-gray-100 w-full flex items-center justify-between py-2 px-4">
                <div>
                    <span class="text-xl font-medium">
                        Filtri
                    </span>
                </div>
                <div>
                    <button
                            @click.prevent="showMenu = !showMenu"
                            class="bg-[#E72B6F] text-white rounded-full p-2">
                        <span class="sr-only">Chiudi</span>
                        <svg height="24" viewBox="0 0 24 24" width="24" fill="currentColor" class="w-4 h-4">
                            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
                            <path d="M0 0h24v24H0z" fill="none"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="flex flex-col flex-1 overflow-hidden">
                <div class="flex-1 py-4 overflow-y-scroll h-full">
            {{--    size--}}
            @if(!empty($size_filter))
                <div class="pb-2">
                    <div class="flex-1 overflow-y-scroll h-full">
                        <div class="flex flex-col space-y-6 px-5">
                            <div class="">
                                <div class="block">
                                    <div class="">
                                        <div x-data="{open: false}">
                                            <div class="flex items-center">
                                            <div class="uppercase font-light text-gray-900 text-sm flex items-center leading-4">
                                                <button type="button"  @click="open = !open">
                                                    <span class="text-[#E72B6F]" x-text="open ? '-' : '+'"></span>
                                                    <span class="font-medium text-[#E72B6F] text-lg mr-2">Taglia</span>
                                                </button>
                                            </div>
                                        </div>
                                            <div
                                                    role="region"
                                                    x-show="open"
                                                    :hidden="!open">
                                                <div
                                                        x-data="{ show: false }"
                                                        class="font-normal text-sm text-gray-700 py-2">

                                                    <div class="max-h-96 overflow-y-auto">
                                                        <div class="pb-2">
                                                            @foreach ($size_filter as $m)

                                                                @if(!empty($m))
                                                                    @php
                                                                        $checked = [];
                                                                        if( isset($_GET['filter_taglia'])){
                                                                            $checked = $_GET['filter_taglia'];
                                                                        }
                                                                    @endphp
                                                            <div class="flex justify-start flex-wrap -ml-4 -mt-4">
                                                                <div class="ml-4 mt-4" style="min-width: 200px">
                                                                    <div class="relative" >
                                                                        <label
                                                                                x-data="{ show: false }"
                                                                                class="flex space-x-4 items-center">
                                                                            <div class="flex-shrink-0 flex">
                                                                                <input
                                                                                        class="w-5 h-5"
                                                                                        name="filter_taglia[]"
                                                                                        value="{{ $m }}"
                                                                                        type="checkbox"

                                                                                        @if( in_array($m, $checked)) checked="checked" @endif
                                                                                        {{--                                                onChange="this.form.submit()" {{ request()->filled('category_id.samsung') ? 'checked' :''}}--}}
                                                                                >
                                                                            </div>
                                                                            <div class="relative flex-1">
                                                                                <span class="font-normal text-base text-gray-900">
                                                                                    {{ $m }}
                                                                                </span>
                                                                            </div>
                                                                        </label>
                                                                        <span class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif


{{--            disponibile--}}
            <div class="px-5 mt-2">
                <span class="space-y-6  block font-bold text-base text-[#E72B6F] mb-2">Filtra per disponibilità</span>

                <div class="flex flex-col space-y-2">

                    <div class="block">


                        <div  class="flex items-center w-full relative">
                            <span>Disponibile online</span>

                            <label class="switch ml-4">
                                <input class="hidden" type="checkbox"  value="1">

                                <span class="slider round relative border border-gray-200 rounded-full px-1 py-1 flex items-center">
                                    <span class="teksti uppercase cursor-pointer font-medium text-xs px-2 py-1 bg-transparent text-gray-400 rounded-full z-20 transition-all duration-100 ease-in"
                                          id="first">
                                        No
                                    </span>
                                    <span class="uppercase cursor-pointer font-medium text-xs px-3 py-1 bg-trasnparent text-gray-400 rounded-full z-20 transition-all duration-100 ease-in"
                                          id="second">
                                        Si
                                    </span>
                                </span>
                            </label>
                        </div>


                    </div>

                </div>
            </div>


            {{--            price--}}
            <div class="px-5 mt-6">
                <span class="block font-bold text-base text-[#E72B6F] mb-2">Filtra per prezzo</span>

                <div style="min-width: 160px">
                    <div class=" flex justify-center items-center pt-2">
                        <div x-data="range()" x-init="mintrigger(); maxtrigger()" class="relative max-w-xl w-full">

                            <div>
                                <input
                                        type="range"
                                        step="100"
                                        x-bind:min="min"
                                        x-bind:max="max"
                                        x-on:input="mintrigger"
                                        x-model="minprice"
                                        class="absolute pointer-events-none appearance-none z-20 h-2 w-full opacity-0 cursor-pointer">

                                <input
                                        type="range"
                                        step="100"
                                        x-bind:min="min"
                                        x-bind:max="max"
                                        x-on:input="maxtrigger"
                                        x-model="maxprice"
                                        class="absolute pointer-events-none appearance-none z-20 h-2 w-full opacity-0 cursor-pointer">

                                <div class="relative z-10 h-2 ">

                                    <div class="absolute z-10 left-0 right-0 bottom-0 top-0 rounded-md h-[2px] bg-gray-200"></div>

                                    <div class="absolute z-20 top-0 bottom-0 rounded-md bg-[#E72B6F] h-[2px]"
                                         x-bind:style="'right:'+maxthumb+'%; left:'+minthumb+'%'"></div>

                                    <div class="absolute z-30 w-[16px] h-[16px] border-[2px] top-0 left-0 border-[#E72B6F] rounded-full -mt-2 bg-white"
                                         x-bind:style="'left: '+minthumb+'%'"></div>

                                    <div class="absolute z-30 w-[16px] h-[16px] border-[2px] top-0 right-0 border-[#E72B6F] rounded-full -mt-2 bg-white -mr-3"
                                         x-bind:style="'right: '+maxthumb+'%'"></div>

                                </div>

                            </div>

                            <div class="flex justify-between items-center py-2">
                                <div>
                                    @php
                                        $checked = [];
                                        if( isset($_GET['filter_min_prezzo'])){
                                            $checked = $_GET['filter_min_prezzo'];
                                        }
                                    @endphp
                                    <input
                                            type="text"
                                            maxlength="5"
                                            x-on:input="mintrigger"
                                            name="filter_min_prezzo[]"
                                            x-model="minprice"
                                            class=" border border-gray-200 rounded w-[50px] p-[3px] text-center">
                                </div>
                                @php
                                    $checked = [];
                                    if( isset($_GET['filter_max_prezzo'])){
                                        $checked = $_GET['filter_max_prezzo'];
                                    }
                                @endphp
                                <div>
                                    <input
                                            type="text"
                                            name="filter_max_prezzo[]"
                                            maxlength="5"
                                            x-on:input="maxtrigger"
                                            x-model="maxprice"
                                            class=" border border-gray-200 rounded w-[50px] p-[3px] text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

{{--            marca--}}
                    <div class="">
                    <div class="flex-1 py-4 overflow-y-scroll h-full">
                        <div class="flex flex-col space-y-6 px-5">
                            <div class="">
                                <div class="block">
                                    <div class="">
                                        <div x-data="{open: false}">
                                            <div class="flex items-center">
                                                <div class="uppercase font-light text-gray-900 text-sm flex items-center leading-4">
                                                    <button type="button"  @click="open = !open">
                                                        <span class="text-[#E72B6F]" x-text="open ? '-' : '+'"></span>
                                                        <span class="font-medium text-[#E72B6F] text-lg mr-2">Filtra per marca</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div
                                                    role="region"
                                                    x-show="open"
                                                    :hidden="!open">
                                                <div
                                                        x-data="{ show: false }"
                                                        class="font-normal text-sm text-gray-700 py-2">
                                                    <div class="max-h-96 overflow-y-auto">
                                                        <div class="pb-2">
                                                            @foreach ($marca as $m)

                                                                @if(!empty($m))
                                                                    @php
                                                                        $checked = [];
                                                                        if( isset($_GET['filter_marche'])){
                                                                            $checked = $_GET['filter_marche'];
                                                                        }
                                                                    @endphp
                                                                    <div class="flex justify-start flex-wrap -ml-4 -mt-4">
                                                                        <div class="ml-4 mt-4" style="min-width: 200px">
                                                                            <div class="relative" >
                                                                                <label
                                                                                        x-data="{ show: false }"
                                                                                        class="flex space-x-4 items-center">
                                                                                    <div class="flex-shrink-0 flex">
                                                                                        <input
                                                                                                class="w-5 h-5"
                                                                                                name="filter_marche[]"
                                                                                                value="{{ $m }}"
                                                                                                type="checkbox"

                                                                                                @if( in_array($m, $checked)) checked="checked" @endif
                                                                                                {{--                                                onChange="this.form.submit()" {{ request()->filled('category_id.samsung') ? 'checked' :''}}--}}
                                                                                        >
                                                                                    </div>
                                                                                    <div class="relative flex-1">
                                                                                <span class="font-normal text-base text-gray-900">
                                                                                    {{ $m }}
                                                                                </span>
                                                                                    </div>
                                                                                </label>
                                                                                <span class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


{{--            sesso--}}
                    <div class="">
                    <div class="flex-1 py-4 overflow-y-scroll h-full">
                        <div class="flex flex-col space-y-6 px-5">
                            <div class="">
                                <div class="block">
                                    <div class="">
                                        <div x-data="{open: false}">
                                            <div class="flex items-center">
                                                <div class="uppercase font-light text-gray-900 text-sm flex items-center leading-4">
                                                    <button type="button"  @click="open = !open">
                                                        <span class="text-[#E72B6F]" x-text="open ? '-' : '+'"></span>
                                                        <span class="font-medium text-[#E72B6F] text-lg mr-2">Filtra per sesso</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div
                                                    role="region"
                                                    x-show="open"
                                                    :hidden="!open">
                                                <div
                                                        x-data="{ show: false }"
                                                        class="font-normal text-sm text-gray-700 py-2">
                                                    <div class="max-h-96 overflow-y-auto">
                                                        <div class="pb-2">
                                                            @foreach ($gendre as $m)

                                                                @if(!empty($m))
                                                                    @php
                                                                        $checked = [];
                                                                        if( isset($_GET['filter_sesso'])){
                                                                            $checked = $_GET['filter_sesso'];
                                                                        }
                                                                    @endphp
                                                                    <div class="flex justify-start flex-wrap -ml-4 -mt-4">
                                                                        <div class="ml-4 mt-4" style="min-width: 200px">
                                                                            <div class="relative" >
                                                                                <label
                                                                                        x-data="{ show: false }"
                                                                                        class="flex space-x-4 items-center">
                                                                                    <div class="flex-shrink-0 flex">
                                                                                        <input
                                                                                                class="w-5 h-5"
                                                                                                name="filter_sesso[]"
                                                                                                value="{{ $m }}"
                                                                                                type="checkbox"

                                                                                                @if( in_array($m, $checked)) checked="checked" @endif
                                                                                                {{--                                                onChange="this.form.submit()" {{ request()->filled('category_id.samsung') ? 'checked' :''}}--}}
                                                                                        >
                                                                                    </div>
                                                                                    <div class="relative flex-1">
                                                                                <span class="font-normal text-base text-gray-900">
                                                                                    {{ $m }}
                                                                                </span>
                                                                                    </div>
                                                                                </label>
                                                                                <span class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

{{--                    colore--}}
                    <div class="">
                        <div class="flex-1 py-4 overflow-y-scroll h-full">
                            <div class="flex flex-col space-y-6 px-5">
                                <div class="">
                                    <div class="block">
                                        <div class="">
                                            <div x-data="{open: false}">
                                                <div class="flex items-center">
                                                    <div class="uppercase font-light text-gray-900 text-sm flex items-center leading-4">
                                                        <button type="button"  @click="open = !open">
                                                            <span class="text-[#E72B6F]" x-text="open ? '-' : '+'"></span>
                                                            <span class="font-medium text-[#E72B6F] text-lg mr-2">Filtra per colore</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div
                                                        role="region"
                                                        x-show="open"
                                                        :hidden="!open">
                                                    <div
                                                            x-data="{ show: false }"
                                                            class="font-normal text-sm text-gray-700 py-2">


                                                        <div class="max-h-96 overflow-y-auto">
                                                            <div class="pb-2">
                                                                @php
                                                                    $checked = [];
                                                                    if( isset($_GET['filter_color'])){
                                                                        $checked = $_GET['filter_color'];
                                                                    }
                                                                @endphp
                                                                <div class="ml-4 mt-2" style="min-width: 200px">
                                                                    <div class="relative">
                                                                        <style>
                                                                            [data-component="checkbox"] .form-checkbox-color-ed30729549c9852aac97bd8473a22b43 {
                                                                                background-color: #0080ff;
                                                                            }

                                                                            [data-component="checkbox"] .form-checkbox-color-ed30729549c9852aac97bd8473a22b43:checked {
                                                                                background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='black' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");
                                                                                background-color: #0080ff;
                                                                                box-shadow: none;
                                                                            }
                                                                        </style>

                                                                        <label class="flex space-x-4 items-center">
                                                                            <div class="flex-shrink-0 flex">
                                                                                <input
                                                                                        type="checkbox"
                                                                                        class="form-checkbox form-checkbox-color-ed30729549c9852aac97bd8473a22b43  form-checkbox-secondary  w-5 h-5"
                                                                                        value="azzurro"
                                                                                        name="filter_color[]"
                                                                                        @if( in_array("azzurro", $checked)) checked="checked" @endif
                                                                                >
                                                                            </div>

                                                                            <div class="relative flex-1">
                                        <span class="font-normal text-base text-gray-900">
                                            Azzurro
                                        </span>
                                                                            </div>
                                                                        </label>
                                                                        <span class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="ml-4 mt-2" style="min-width: 200px">
                                                                    <div data-component="checkbox" class="relative" >
                                                                        <style>
                                                                            [data-component="checkbox"] .form-checkbox-color-bfdf210cd1b105a5df2072389404edeb {
                                                                                background-color: #cec4ab;
                                                                            }

                                                                            [data-component="checkbox"] .form-checkbox-color-bfdf210cd1b105a5df2072389404edeb:checked {
                                                                                background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='black' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");
                                                                                background-color: #cec4ab;
                                                                                box-shadow: none;
                                                                            }
                                                                        </style>

                                                                        <label class="flex space-x-4 items-center">
                                                                            <div class="flex-shrink-0 flex">
                                                                                <input
                                                                                        type="checkbox"
                                                                                        class="form-checkbox form-checkbox-color-bfdf210cd1b105a5df2072389404edeb  form-checkbox-secondary  w-5 h-5"
                                                                                        value="beige"
                                                                                        name="filter_color[]"
                                                                                        @if( in_array("beige", $checked)) checked="checked" @endif
                                                                                >
                                                                            </div>

                                                                            <div class="relative flex-1">
                                        <span class="font-normal text-base text-gray-900">
                                            Beige
                                        </span>
                                                                            </div>
                                                                        </label>
                                                                        <span class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">

    </span>
                                                                    </div>
                                                                </div>
                                                                <div class="ml-4 mt-2" style="min-width: 200px">
                                                                    <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:26,&quot;slug&quot;:&quot;bianco&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_color=bianco&amp;query_type_color=or&quot;,&quot;filter_name&quot;:&quot;filter_color&quot;}">
                                                                        <style>
                                                                            [data-component="checkbox"] .form-checkbox-color-54922f2e920ba8346f6dc0fba343d673 {
                                                                                background-color: #ffffff;
                                                                            }

                                                                            [data-component="checkbox"] .form-checkbox-color-54922f2e920ba8346f6dc0fba343d673:checked {
                                                                                background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='black' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");
                                                                                background-color: #ffffff;
                                                                                box-shadow: none;
                                                                            }
                                                                        </style>

                                                                        <label class="flex space-x-4 items-center">
                                                                            <div class="flex-shrink-0 flex">
                                                                                <input
                                                                                        type="checkbox"
                                                                                        class="form-checkbox form-checkbox-color-54922f2e920ba8346f6dc0fba343d673  form-checkbox-secondary  w-5 h-5"
                                                                                        value="bianco"
                                                                                        name="filter_color[]"
                                                                                        @if( in_array("bianco", $checked)) checked="checked" @endif
                                                                                >
                                                                            </div>

                                                                            <div class="relative flex-1">
                                        <span class="font-normal text-base text-gray-900">
                                            Bianco
                                        </span>
                                                                            </div>
                                                                        </label>
                                                                        <span  class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="ml-4 mt-2" style="min-width: 200px">
                                                                    <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:14,&quot;slug&quot;:&quot;blue&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_color=blue&amp;query_type_color=or&quot;,&quot;filter_name&quot;:&quot;filter_color&quot;}">
                                                                        <style>
                                                                            [data-component="checkbox"] .form-checkbox-color-e310d39cbd68145645b89b892116dbbd {
                                                                                background-color: #1926da;
                                                                            }

                                                                            [data-component="checkbox"] .form-checkbox-color-e310d39cbd68145645b89b892116dbbd:checked {
                                                                                background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");
                                                                                background-color: #1926da;
                                                                                box-shadow: none;
                                                                            }
                                                                        </style>

                                                                        <label class="flex space-x-4 items-center">
                                                                            <div class="flex-shrink-0 flex">

                                                                                <input
                                                                                        type="checkbox"
                                                                                        class="form-checkbox form-checkbox-color-e310d39cbd68145645b89b892116dbbd  form-checkbox-secondary  w-5 h-5"
                                                                                        value="blue"
                                                                                        name="filter_color[]"
                                                                                        @if( in_array("blue", $checked)) checked="checked" @endif
                                                                                >
                                                                            </div>

                                                                            <div class="relative flex-1">
                                        <span class="font-normal text-base text-gray-900">
                                            Blu
                                        </span>
                                                                            </div>
                                                                        </label>
                                                                        <span class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">
                                </span>
                                                                    </div>
                                                                </div>
                                                                <div class="ml-4 mt-2" style="min-width: 200px">
                                                                    <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:13,&quot;slug&quot;:&quot;denim&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_color=denim&amp;query_type_color=or&quot;,&quot;filter_name&quot;:&quot;filter_color&quot;}">
                                                                        <style>
                                                                            [data-component="checkbox"] .form-checkbox-color-04d885c511dd0c2eb61bff08dee8df80 {
                                                                                background-color: #7f97b5;
                                                                            }

                                                                            [data-component="checkbox"] .form-checkbox-color-04d885c511dd0c2eb61bff08dee8df80:checked {
                                                                                background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='black' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");
                                                                                background-color: #7f97b5;
                                                                                box-shadow: none;
                                                                            }
                                                                        </style>

                                                                        <label class="flex space-x-4 items-center">
                                                                            <div class="flex-shrink-0 flex">
                                                                                @php
                                                                                    $checked = [];
                                                                                    if( isset($_GET['filter_color'])){
                                                                                        $checked = $_GET['filter_color'];
                                                                                    }
                                                                                @endphp
                                                                                <input
                                                                                        type="checkbox"
                                                                                        class="form-checkbox form-checkbox-color-04d885c511dd0c2eb61bff08dee8df80  form-checkbox-secondary  w-5 h-5"
                                                                                        value="denim"
                                                                                        name="filter_color[]"
                                                                                        @if( in_array("denim", $checked)) checked="checked" @endif
                                                                                >
                                                                            </div>
                                                                            <div class="relative flex-1">
                                        <span class="font-normal text-base text-gray-900">
                                            Denim
                                        </span>
                                                                            </div>
                                                                        </label>
                                                                        <span class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="ml-4 mt-2" style="min-width: 200px">
                                                                    <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:3,&quot;slug&quot;:&quot;fantasia&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_color=fantasia&amp;query_type_color=or&quot;,&quot;filter_name&quot;:&quot;filter_color&quot;}">
                                                                        <style>
                                                                            [data-component="checkbox"] .form-checkbox-color-54922f2e920ba8346f6dc0fba343d673 {
                                                                                background-color: #ffffff;
                                                                            }

                                                                            [data-component="checkbox"] .form-checkbox-color-54922f2e920ba8346f6dc0fba343d673:checked {
                                                                                background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='black' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");
                                                                                background-color: #ffffff;
                                                                                box-shadow: none;
                                                                            }
                                                                        </style>

                                                                        <label class="flex space-x-4 items-center">
                                                                            <div class="flex-shrink-0 flex">
                                                                                @php
                                                                                    $checked = [];
                                                                                    if( isset($_GET['filter_color'])){
                                                                                        $checked = $_GET['filter_color'];
                                                                                    }
                                                                                @endphp
                                                                                <input
                                                                                        type="checkbox"
                                                                                        class="form-checkbox form-checkbox-color-54922f2e920ba8346f6dc0fba343d673  form-checkbox-secondary  w-5 h-5"
                                                                                        value="fantasia"
                                                                                        name="filter_color[]"
                                                                                        @if( in_array("fantasia", $checked)) checked="checked" @endif
                                                                                >
                                                                            </div>
                                                                            <div class="relative flex-1">
                                        <span class="font-normal text-base text-gray-900">
                                            Fantasia
                                        </span>
                                                                            </div>
                                                                        </label>
                                                                        <span class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="ml-4 mt-2" style="min-width: 200px">
                                                                    <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:2,&quot;slug&quot;:&quot;giallo&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_color=giallo&amp;query_type_color=or&quot;,&quot;filter_name&quot;:&quot;filter_color&quot;}">
                                                                        <style>
                                                                            [data-component="checkbox"] .form-checkbox-color-c7522a95838a32a66304710be8a7055d {
                                                                                background-color: #f7f024;
                                                                            }

                                                                            [data-component="checkbox"] .form-checkbox-color-c7522a95838a32a66304710be8a7055d:checked {
                                                                                background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='black' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");
                                                                                background-color: #f7f024;
                                                                                box-shadow: none;
                                                                            }
                                                                        </style>

                                                                        <label class="flex space-x-4 items-center">
                                                                            <div class="flex-shrink-0 flex">
                                                                                @php
                                                                                    $checked = [];
                                                                                    if( isset($_GET['filter_color'])){
                                                                                        $checked = $_GET['filter_color'];
                                                                                    }
                                                                                @endphp
                                                                                <input
                                                                                        type="checkbox"
                                                                                        class="form-checkbox form-checkbox-color-c7522a95838a32a66304710be8a7055d  form-checkbox-secondary  w-5 h-5"
                                                                                        value="giallo"
                                                                                        name="filter_color[]"
                                                                                        @if( in_array("giallo", $checked)) checked="checked" @endif
                                                                                >
                                                                            </div>
                                                                            <div class="relative flex-1">
                                        <span class="font-normal text-base text-gray-900">
                                            Giallo
                                        </span>
                                                                            </div>
                                                                        </label>
                                                                        <span class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="ml-4 mt-2" style="min-width: 200px">
                                                                    <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:38,&quot;slug&quot;:&quot;grigio&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_color=grigio&amp;query_type_color=or&quot;,&quot;filter_name&quot;:&quot;filter_color&quot;}">
                                                                        <style>
                                                                            [data-component="checkbox"] .form-checkbox-color-efd5b71d20771d551e9eb2a6882326a0 {
                                                                                background-color: #808080;
                                                                            }

                                                                            [data-component="checkbox"] .form-checkbox-color-efd5b71d20771d551e9eb2a6882326a0:checked {
                                                                                background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='black' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");
                                                                                background-color: #808080;
                                                                                box-shadow: none;
                                                                            }
                                                                        </style>

                                                                        <label class="flex space-x-4 items-center">
                                                                            <div class="flex-shrink-0 flex">
                                                                                @php
                                                                                    $checked = [];
                                                                                    if( isset($_GET['filter_color'])){
                                                                                        $checked = $_GET['filter_color'];
                                                                                    }
                                                                                @endphp
                                                                                <input
                                                                                        type="checkbox"
                                                                                        class="form-checkbox form-checkbox-color-efd5b71d20771d551e9eb2a6882326a0  form-checkbox-secondary  w-5 h-5"
                                                                                        value="grigio"
                                                                                        name="filter_color[]"
                                                                                        @if( in_array("grigio", $checked)) checked="checked" @endif
                                                                                >
                                                                            </div>
                                                                            <div class="relative flex-1">
                                        <span class="font-normal text-base text-gray-900">
                                            Grigio
                                        </span>
                                                                            </div>
                                                                        </label>
                                                                        <span class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="ml-4 mt-2" style="min-width: 200px">
                                                                    <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:4,&quot;slug&quot;:&quot;marrone&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_color=marrone&amp;query_type_color=or&quot;,&quot;filter_name&quot;:&quot;filter_color&quot;}">
                                                                        <style>
                                                                            [data-component="checkbox"] .form-checkbox-color-8b3bfd0b1bbc9e9d1152145a37c87c87 {
                                                                                background-color: #64410e;
                                                                            }

                                                                            [data-component="checkbox"] .form-checkbox-color-8b3bfd0b1bbc9e9d1152145a37c87c87:checked {
                                                                                background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");
                                                                                background-color: #64410e;
                                                                                box-shadow: none;
                                                                            }
                                                                        </style>

                                                                        <label class="flex space-x-4 items-center">
                                                                            <div class="flex-shrink-0 flex">
                                                                                @php
                                                                                    $checked = [];
                                                                                    if( isset($_GET['filter_color'])){
                                                                                        $checked = $_GET['filter_color'];
                                                                                    }
                                                                                @endphp
                                                                                <input
                                                                                        type="checkbox"
                                                                                        class="form-checkbox form-checkbox-color-8b3bfd0b1bbc9e9d1152145a37c87c87  form-checkbox-secondary  w-5 h-5"
                                                                                        value="marrone"
                                                                                        name="filter_color[]"
                                                                                        @if( in_array("marrone", $checked)) checked="checked" @endif
                                                                                >
                                                                            </div>
                                                                            <div class="relative flex-1">
                                        <span class="font-normal text-base text-gray-900">
                                            Marrone
                                        </span>
                                                                            </div>
                                                                        </label>
                                                                        <span  class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="ml-4 mt-2" style="min-width: 200px">
                                                                    <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:2,&quot;slug&quot;:&quot;naturale&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_color=naturale&amp;query_type_color=or&quot;,&quot;filter_name&quot;:&quot;filter_color&quot;}">
                                                                        <style>
                                                                            [data-component="checkbox"] .form-checkbox-color-5880b1242eab52159e8a8c2aa4f2bcf0 {
                                                                                background-color: #d4b578;
                                                                            }

                                                                            [data-component="checkbox"] .form-checkbox-color-5880b1242eab52159e8a8c2aa4f2bcf0:checked {
                                                                                background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='black' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");
                                                                                background-color: #d4b578;
                                                                                box-shadow: none;
                                                                            }
                                                                        </style>

                                                                        <label class="flex space-x-4 items-center">
                                                                            <div class="flex-shrink-0 flex">
                                                                                @php
                                                                                    $checked = [];
                                                                                    if( isset($_GET['filter_color'])){
                                                                                        $checked = $_GET['filter_color'];
                                                                                    }
                                                                                @endphp
                                                                                <input
                                                                                        type="checkbox"
                                                                                        class="form-checkbox form-checkbox-color-5880b1242eab52159e8a8c2aa4f2bcf0  form-checkbox-secondary  w-5 h-5"
                                                                                        value="naturale"
                                                                                        name="filter_color[]"
                                                                                        @if( in_array("naturale", $checked)) checked="checked" @endif
                                                                                >
                                                                            </div>
                                                                            <div class="relative flex-1">
                                        <span class="font-normal text-base text-gray-900">
                                            Naturale
                                        </span>
                                                                            </div>
                                                                        </label>
                                                                        <span class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">

    </span>
                                                                    </div>
                                                                </div>
                                                                <div class="ml-4 mt-2" style="min-width: 200px">
                                                                    <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:48,&quot;slug&quot;:&quot;nero&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_color=nero&amp;query_type_color=or&quot;,&quot;filter_name&quot;:&quot;filter_color&quot;}">
                                                                        <style>
                                                                            [data-component="checkbox"] .form-checkbox-color-77e774e6cc4d94d6a32f6256f02d9552 {
                                                                                background-color: #000000;
                                                                            }

                                                                            [data-component="checkbox"] .form-checkbox-color-77e774e6cc4d94d6a32f6256f02d9552:checked {
                                                                                background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");
                                                                                background-color: #000000;
                                                                                box-shadow: none;
                                                                            }
                                                                        </style>

                                                                        <label class="flex space-x-4 items-center">
                                                                            <div class="flex-shrink-0 flex">
                                                                                @php
                                                                                    $checked = [];
                                                                                    if( isset($_GET['filter_color'])){
                                                                                        $checked = $_GET['filter_color'];
                                                                                    }
                                                                                @endphp
                                                                                <input
                                                                                        type="checkbox"
                                                                                        class="form-checkbox form-checkbox-color-77e774e6cc4d94d6a32f6256f02d9552  form-checkbox-secondary  w-5 h-5"
                                                                                        value="nero"
                                                                                        name="filter_color[]"
                                                                                        @if( in_array("nero", $checked)) checked="checked" @endif
                                                                                >
                                                                            </div>
                                                                            <div class="relative flex-1">
                                        <span class="font-normal text-base text-gray-900">
                                            Nero
                                        </span>
                                                                            </div>
                                                                        </label>
                                                                        <span  class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="ml-4 mt-2" style="min-width: 200px">
                                                                    <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:2,&quot;slug&quot;:&quot;panna&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_color=panna&amp;query_type_color=or&quot;,&quot;filter_name&quot;:&quot;filter_color&quot;}">
                                                                        <style>
                                                                            [data-component="checkbox"] .form-checkbox-color-7470511e86b073a033bfd364034d2bcb {
                                                                                background-color: #ecefe1;
                                                                            }

                                                                            [data-component="checkbox"] .form-checkbox-color-7470511e86b073a033bfd364034d2bcb:checked {
                                                                                background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='black' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");
                                                                                background-color: #ecefe1;
                                                                                box-shadow: none;
                                                                            }
                                                                        </style>

                                                                        <label class="flex space-x-4 items-center">
                                                                            <div class="flex-shrink-0 flex">
                                                                                @php
                                                                                    $checked = [];
                                                                                    if( isset($_GET['filter_color'])){
                                                                                        $checked = $_GET['filter_color'];
                                                                                    }
                                                                                @endphp
                                                                                <input
                                                                                        type="checkbox"
                                                                                        class="form-checkbox form-checkbox-color-7470511e86b073a033bfd364034d2bcb  form-checkbox-secondary  w-5 h-5"
                                                                                        value="panna"
                                                                                        name="filter_color[]"
                                                                                        @if( in_array("panna", $checked)) checked="checked" @endif
                                                                                >
                                                                            </div>
                                                                            <div class="relative flex-1">
                                        <span class="font-normal text-base text-gray-900">
                                            Panna
                                        </span>
                                                                            </div>
                                                                        </label>
                                                                        <span class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="ml-4 mt-2" style="min-width: 200px">
                                                                    <div  class="relative" data-meta="{&quot;count&quot;:7,&quot;slug&quot;:&quot;rosa&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_color=rosa&amp;query_type_color=or&quot;,&quot;filter_name&quot;:&quot;filter_color&quot;}">
                                                                        <style>
                                                                            [data-component="checkbox"] .form-checkbox-color-672a01a77fc5fa62ea5c6de830781c89 {
                                                                                background-color: #dd96bd;
                                                                            }

                                                                            [data-component="checkbox"] .form-checkbox-color-672a01a77fc5fa62ea5c6de830781c89:checked {
                                                                                background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='black' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");
                                                                                background-color: #dd96bd;
                                                                                box-shadow: none;
                                                                            }
                                                                        </style>

                                                                        <label class="flex space-x-4 items-center">
                                                                            <div class="flex-shrink-0 flex">
                                                                                <input
                                                                                        type="checkbox"
                                                                                        class="form-checkbox form-checkbox-color-672a01a77fc5fa62ea5c6de830781c89  form-checkbox-secondary  w-5 h-5"
                                                                                        value="rosa"
                                                                                        name="filter_color[]"
                                                                                        @if( in_array("rosa", $checked)) checked="checked" @endif
                                                                                >
                                                                            </div>
                                                                            <div class="relative flex-1">
                                        <span class="font-normal text-base text-gray-900">
                                            Rosa
                                        </span>
                                                                            </div>
                                                                        </label>
                                                                        <span  class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="ml-4 mt-2" style="min-width: 200px">
                                                                    <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:1,&quot;slug&quot;:&quot;rosso&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_color=rosso&amp;query_type_color=or&quot;,&quot;filter_name&quot;:&quot;filter_color&quot;}">
                                                                        <style>
                                                                            [data-component="checkbox"] .form-checkbox-color-66ae4c7ea8ab330e4593d98ca3185475 {
                                                                                background-color: #e82121;
                                                                            }

                                                                            [data-component="checkbox"] .form-checkbox-color-66ae4c7ea8ab330e4593d98ca3185475:checked {
                                                                                background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");
                                                                                background-color: #e82121;
                                                                                box-shadow: none;
                                                                            }
                                                                        </style>

                                                                        <label class="flex space-x-4 items-center">
                                                                            <div class="flex-shrink-0 flex">
                                                                                @php
                                                                                    $checked = [];
                                                                                    if( isset($_GET['filter_color'])){
                                                                                        $checked = $_GET['filter_color'];
                                                                                    }
                                                                                @endphp
                                                                                <input
                                                                                        type="checkbox"
                                                                                        class="form-checkbox form-checkbox-color-66ae4c7ea8ab330e4593d98ca3185475  form-checkbox-secondary  w-5 h-5"
                                                                                        value="rosso"
                                                                                        name="filter_color[]"
                                                                                        @if( in_array("rosso", $checked)) checked="checked" @endif
                                                                                >
                                                                            </div>
                                                                            <div class="relative flex-1">
                                        <span class="font-normal text-base text-gray-900">
                                            Rosso
                                        </span>
                                                                            </div>
                                                                        </label>
                                                                        <span class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="ml-4 mt-2" style="min-width: 200px">
                                                                    <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:4,&quot;slug&quot;:&quot;senza-colore&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_color=senza-colore&amp;query_type_color=or&quot;,&quot;filter_name&quot;:&quot;filter_color&quot;}">
                                                                        <style>
                                                                            [data-component="checkbox"] .form-checkbox-color-54922f2e920ba8346f6dc0fba343d673 {
                                                                                background-color: #ffffff;
                                                                            }

                                                                            [data-component="checkbox"] .form-checkbox-color-54922f2e920ba8346f6dc0fba343d673:checked {
                                                                                background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='black' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");
                                                                                background-color: #ffffff;
                                                                                box-shadow: none;
                                                                            }
                                                                        </style>

                                                                        <label class="flex space-x-4 items-center">
                                                                            <div class="flex-shrink-0 flex">
                                                                                @php
                                                                                    $checked = [];
                                                                                    if( isset($_GET['filter_color'])){
                                                                                        $checked = $_GET['filter_color'];
                                                                                    }
                                                                                @endphp
                                                                                <input
                                                                                        type="checkbox"
                                                                                        class="form-checkbox form-checkbox-color-54922f2e920ba8346f6dc0fba343d673  form-checkbox-secondary  w-5 h-5"
                                                                                        value="senza-colore"
                                                                                        name="filter_color[]"
                                                                                        @if( in_array("senza-colore", $checked)) checked="checked" @endif
                                                                                >
                                                                            </div>
                                                                            <div class="relative flex-1">
                                        <span class="font-normal text-base text-gray-900">
                                            Senza colore
                                        </span>
                                                                            </div>
                                                                        </label>
                                                                        <span class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="ml-4 mt-2" style="min-width: 200px">
                                                                    <div data-component="checkbox" class="relative" data-meta="{&quot;count&quot;:5,&quot;slug&quot;:&quot;verde&quot;,&quot;link&quot;:&quot;https:\/\/www.prenatal.com\/categoria-prodotto\/mamma\/?filter_color=verde&amp;query_type_color=or&quot;,&quot;filter_name&quot;:&quot;filter_color&quot;}">
                                                                        <style>
                                                                            [data-component="checkbox"] .form-checkbox-color-367ef27272ca8e9a57241be4c80793d5 {
                                                                                background-color: #06cb34;
                                                                            }

                                                                            [data-component="checkbox"] .form-checkbox-color-367ef27272ca8e9a57241be4c80793d5:checked {
                                                                                background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");
                                                                                background-color: #06cb34;
                                                                                box-shadow: none;
                                                                            }
                                                                        </style>

                                                                        <label class="flex space-x-4 items-center">
                                                                            <div class="flex-shrink-0 flex">
                                                                                @php
                                                                                    $checked = [];
                                                                                    if( isset($_GET['filter_color'])){
                                                                                        $checked = $_GET['filter_color'];
                                                                                    }
                                                                                @endphp
                                                                                <input
                                                                                        type="checkbox"
                                                                                        class="form-checkbox form-checkbox-color-367ef27272ca8e9a57241be4c80793d5  form-checkbox-secondary  w-5 h-5"
                                                                                        value="verde"
                                                                                        name="filter_color[]"
                                                                                        @if( in_array("verde", $checked)) checked="checked" @endif
                                                                                >
                                                                            </div>
                                                                            <div class="relative flex-1">
                                        <span class="font-normal text-base text-gray-900">
                                            Verde
                                        </span>
                                                                            </div>
                                                                        </label>
                                                                        <span class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white relative px-2 py-2 z-50 border-t-2 border-gray-100 flex">
                    <div class="w-full">
                        <button
                                class="w-full flex uppercase justify-center items-center text-center rounded-full px-5 border transition delay-150 duration-150 ease-in-out focus:outline-none text-base py-2 px-5 bg-[#E72B6F] text-white border-[#E72B6F] hover:bg-white hover:text-[#E72B6F] focus:bg-white focus:text-[#E72B6F] focus:shadow-outline-[#E72B6F] cursor-pointer" data-disabled-classes="bg-gray-300 text-white border-gray-300 pointer-events-none cursor-not-allowed" data-enabled-classes="bg-[#E72B6F] text-white border-[#E72B6F] hover:bg-white hover:text-[#E72B6F] focus:bg-white focus:text-[#E72B6F] focus:shadow-outline-[#E72B6F] cursor-pointer"
                                type="submit"
                                aria-label="Applica">
                            <span class="button-text">
                                Applica
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</form>
<style>
    input[type=range]::-webkit-slider-thumb {
        pointer-events: all;
        width: 24px;
        height: 24px;
        -webkit-appearance: none;
    }
    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 30px;
        bottom: 4px;
        background-color: #52762B;
    }

    input:checked + .slider:before {
        -webkit-transform: translateX(40px);
        -ms-transform: translateX(40px);
        transform: translateX(40px);

    }
    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
</style>