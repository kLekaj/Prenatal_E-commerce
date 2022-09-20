<div x-data="{ show: false }">
    <div class="inline-block relative">
        <button
            @click="show = !show"
            :aria-expanded="show ? 'true' : 'false'"
            type="button"
            class="block pointer-events-auto w-full mr-3 text-xs font-regular text-gray-700 bg-white border border-gray-400 hover:border-gray-400 hover:bg-gray-400 hover:text-white px-4 py-2 pr-8 rounded-full leading-tight focus:outline-none">
            <span class="whitespace-nowrap">Prezzo &amp; disponibilità</span>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path></svg>
            </div>
        </button>
    </div>

    <div
        x-show="show"
        class="bg-white border border-gray-50 shadow-xl rounded absolute left-0 right-0 transform duration-50 ease-in transition translate-y-0 z-50 top-full mt-2">

        <input type="text" id="sampleSlider" />





        {{--        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>--}}
{{--        <style>--}}
{{--            input[type=range]::-webkit-slider-thumb {--}}
{{--                pointer-events: all;--}}
{{--                width: 24px;--}}
{{--                height: 24px;--}}
{{--                -webkit-appearance: none;--}}
{{--                /* @apply w-6 h-6 appearance-none pointer-events-auto; */--}}
{{--            }--}}
{{--        </style>--}}
{{--        <div class="flex justify-center items-center">--}}
{{--            <div x-data="range()" x-init="mintrigger(); maxtrigger()" class="relative   h-[56px] mt-[16px] ml-[16px] " >--}}
{{--                <div>--}}
{{--                    <input type="range"--}}
{{--                           step="10.00"--}}
{{--                           x-bind:min="min" x-bind:max="max"--}}
{{--                           x-on:input="mintrigger"--}}
{{--                           x-model="minprice"--}}
{{--                           class="absolute pointer-events-none appearance-none z-20 h-2 w-full opacity-0 cursor-pointer">--}}

{{--                    <input type="range"--}}
{{--                           step="10.00"--}}
{{--                           x-bind:min="min" x-bind:max="max"--}}
{{--                           x-on:input="maxtrigger"--}}
{{--                           x-model="maxprice"--}}
{{--                           class="absolute pointer-events-none appearance-none z-20 h-2 w-full opacity-0 cursor-pointer">--}}

{{--                    <div class="relative z-10 h-2">--}}

{{--                        <div class="absolute z-10 left-0  h-[2px] right-0 bottom-0 top-0 rounded-md bg-gray-200"></div>--}}
{{--                        <div--}}
{{--                            class="absolute z-20  h-[2px] top-0 bottom-0 rounded-md bg-[#E72B6F]"--}}
{{--                            x-bind:style="'right:'+maxthumb+'%; left:'+minthumb+'%'"></div>--}}
{{--                        <div--}}
{{--                            class="absolute z-30 w-[16px] p-2 h-[16px] top-0 left-0 bg-white border-2 border-[#E72B6F] rounded-full -mt-2 -ml-1"--}}
{{--                            x-bind:style="'left: '+minthumb+'%'"></div>--}}
{{--                        <div--}}
{{--                            class="absolute z-30 w-[16px] p-2 h-[16px] top-0 right-0 bg-white border-2 border-[#E72B6F] rounded-full -mt-2 -mr-1 "--}}
{{--                            x-bind:style="'right: '+maxthumb+'%'"></div>--}}
{{--                    </div>--}}



{{--                </div>--}}


{{--                <div class="flex justify-between items-center py-5">--}}
{{--                        <input--}}
{{--                            type="text"--}}
{{--                            maxlength="5"--}}
{{--                            x-on:input="mintrigger"--}}
{{--                            x-model="minprice"--}}
{{--                            class="p-[3px] border-none text-[14px]"--}}
{{--                        >--}}
{{--                    <div class="bg-red-100">--}}
{{--                        <input--}}
{{--                            type="text"--}}
{{--                            maxlength="5"--}}
{{--                            x-on:input="maxtrigger"--}}
{{--                            x-model="maxprice"--}}
{{--                            class="p-[3px] border-none text-[14px] "--}}
{{--                        >--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--            <script>--}}
{{--                function range() {--}}
{{--                    return {--}}
{{--                        minprice: 0,--}}
{{--                        maxprice: 2000.00,--}}
{{--                        min: 0,--}}
{{--                        max: 2000.00,--}}
{{--                        minthumb: 0,--}}
{{--                        maxthumb: 0,--}}

{{--                        mintrigger() {--}}
{{--                            this.minprice = Math.min(this.minprice);--}}
{{--                            this.minthumb = ((this.minprice - this.min) / (this.max - this.min)) * 100;--}}
{{--                        },--}}

{{--                        maxtrigger() {--}}
{{--                            this.maxprice = Math.max(this.maxprice);--}}
{{--                            this.maxthumb = 100 - (((this.maxprice - this.min) / (this.max - this.min)) * 100);--}}
{{--                        },--}}
{{--                    }--}}
{{--                }--}}
{{--            </script>--}}
{{--        </div>--}}


{{--    <div class="flex flex-wrap -mx-3 -mt-4">--}}
{{--            <div class="px-3 pt-4">--}}
{{--                <div class="px-5 pt-5">--}}
{{--                    <span class="block font-medium text-[#E72B6F] text-lg mb-2">Filtra per disponibilità</span>--}}
{{--                </div>--}}

{{--                <div class="max-h-96 overflow-y-auto">--}}
{{--                    <div class="px-5 pb-4">--}}
{{--                        <div class="flex justify-start flex-wrap -ml-4">--}}
{{--                            <div class="ml-4" style="min-width: 200px">--}}
{{--                                <div class="block">--}}
{{--                                    <div data-component="switch" data-field="" class="flex items-center w-full relative">--}}
{{--                                        <span>Disponibile online</span>--}}

{{--                                        <label class="ml-4">--}}
{{--                                            <input hidden="" data-switch="" class="hidden" type="checkbox" name="exclude_out_of_stock" value="1">--}}

{{--                                            <span class="toggle-switch relative border border-gray-200 rounded-full px-1 py-1 flex items-center">--}}
{{--                                                            <span class="uppercase cursor-pointer font-medium text-xs px-2 py-1 bg-transparent text-gray-400 rounded-full z-20 transition-all duration-100 ease-in" id="first">No</span>--}}
{{--                                                            <span class="uppercase cursor-pointer font-medium text-xs px-3 py-1 bg-trasnparent text-gray-400 rounded-full z-20 transition-all duration-100 ease-in" id="second">Si</span>--}}
{{--                                                        </span>--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="px-3 pt-4">--}}
{{--                <div class="max-h-96">--}}
{{--                    <div class="px-5 pb-4 pt-5">--}}
{{--                        <div class="flex justify-start flex-wrap -ml-4 -mt-4">--}}
{{--                            <div class="ml-4 mt-4" style="min-width: 200px">--}}
{{--                                <span class="block font-medium text-[#E72B6F] text-lg mb-6">Filtra per prezzo</span><span class="hidden">Filtra per prezzo</span><div style="min-width: 160px">--}}
{{--                                    <div data-component="range-slider" class="px-2">--}}
{{--                                        <input type="hidden" name="price-range[]" value="0">--}}
{{--                                        <input type="hidden" name="price-range[]" value="2000">--}}

{{--                                        <div data-range-slider="" data-options="{&quot;min&quot;:0,&quot;max&quot;:2000,&quot;step&quot;:10,&quot;start&quot;:[0,2000],&quot;connect&quot;:true,&quot;tooltips&quot;:true}" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"><div class="noUi-base"><div class="noUi-connects"><div class="noUi-connect" style="transform: translate(0%, 0px) scale(1, 1);"></div></div><div class="noUi-origin" style="transform: translate(-1000%, 0px); z-index: 5;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="2000.0" aria-valuenow="0.0" aria-valuetext="0.00"><div class="noUi-touch-area"></div><div class="noUi-tooltip">0.00</div></div></div><div class="noUi-origin" style="transform: translate(0%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="2000.0" aria-valuenow="2000.0" aria-valuetext="2000.00"><div class="noUi-touch-area"></div><div class="noUi-tooltip">2000.00</div></div></div></div></div>--}}


{{--                                        <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-none" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute text-sm leading-5 transition duration-300 ease-in text-red-600 w-full truncate opacity-0 translate-y-2 pointer-events-none"></span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="w-full px-3">--}}
{{--                <div class="px-5 py-3 border-t border-gray-100">--}}
{{--                    <button class="inline-flex uppercase justify-center items-center text-center rounded-full px-5 border transition delay-150 duration-150 ease-in-out focus:outline-none text-sm py-1 px-3 bg-[#E72B6F] text-white border-[#E72B6F] hover:bg-white hover:text-[#E72B6F] focus:bg-white focus:text-[#E72B6F] focus:shadow-outline-[#E72B6F] cursor-pointer" data-disabled-classes="bg-gray-300 text-white border-gray-300 pointer-events-none cursor-not-allowed" data-enabled-classes="bg-[#E72B6F] text-white border-[#E72B6F] hover:bg-white hover:text-[#E72B6F] focus:bg-white focus:text-[#E72B6F] focus:shadow-outline-[#E72B6F] cursor-pointer" type="submit" aria-label="Applica">--}}
{{--                        <span class="button-text">--}}
{{--                            <span class="px-4">Applica</span>--}}
{{--                        </span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>



