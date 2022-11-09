<div class="hidden lg:block ">
    <div class="mx-auto w-[90%] md:w-[85%] lg:w-[88%] mx-5 mx-auto ">
        <div class="-mx-3 pb-1 ">
            <div x-data="{ show: false }">
                <div class=" flex items-center justify-between space-x-2">
                        <!--        categories-->
                    @foreach($categories as $c)
                        @if (
                               $c['name'] == 'Mamma'
                             or $c['name'] == 'Moda bambina'
                             or $c['name'] == 'Casa'
                             or $c['name'] == 'Passegginiasd'
                             or $c['name'] == 'Auto e viaggio'
                             or $c['name'] == 'Gioco'
                             or $c['name'] == 'Baby food'
                             or $c['name'] == 'Pappa'
                             or $c['name'] == 'allattamento'
                             or $c['name'] == 'Igiene'
                             )

                            <nav class="lg:space-x-1 " >
                                <div
                                    class="inline-block "
                                    x-data="{activeId : 1}"
                                >
                                    <a
                                            @click.outside = "activeId = -1"
                                            class="inline-block px-2 lg:px-3 py-3  leading-5 hover:text-[#E72B6F] font-normal "
                                            x-on:click="
                                                if(activeId === 20) {
                                                    window.location.href = '/categoria-prodotto/{{ str_replace(' ', '-', Str::lower($c['name'])) }}'
                                                }else{
                                                        activeId = 20
                                                }"
                                    >
{{--                                    Category name--}}
                                        {{ $c['name'] }}
                                        <span  class="flex items-center justify-center  top-full left-0 right-0 transition ">
                                            <span x-show="activeId === 20"  class="border-[#E72B6F] -mt-2 block border-8 h-0 " style="border-top-color: transparent; border-left-color: transparent; border-right-color: transparent"></span>
                                        </span>
                                    </a>

                                <!--                           The menu when we click one category-->
                                    <div
                                        x-show="activeId === 20"
                                        class="absolute shadow  left-0 w-full">
                                        <div class="z-40 "
                                             @click.outside = "activeId = 1">
                                            <div class="flex space-between">
                                                <div class="flex w-full bg-white z-40 p-10 pb-20">
                                                    <div class="flex  pl-10  w-full  mx-5 mx-auto pb-10">
                                                        @foreach($c['children'] as $sub)

                                                            <div class="w-1/4">
                                                                <a
                                                                    href="/categoria-prodotto/{{ str_replace(' ', '-', Str::lower($c['name'])) }}/{{ str_replace(' ', '-', Str::lower($sub['name'])) }}"
                                                                    class="font-bold text-base uppercase text-gray-900 hover:text-primary">

                                                                    {{$sub['name']}}
                                                                </a>
                                                                <div class="-ml-2 ">
                                                                    <div class=" pl-2 space-y-3.5 mt-3">
                                                                        @foreach($sub['children'] as $s)
                                                                            <div class="space-y-3">
                                                                                <a
                                                                                    href="/categoria-prodotto/{{ str_replace(' ', '-', Str::lower($c['name'])) }}/{{ str_replace(' ', '-', Str::lower($sub['name'])) }}/{{ str_replace(['(',')','/', '+',','],'',str_replace([' '], '-', Str::lower($s['name'])))  }}"
                                                                                    class="font-normal text-sm text-gray-900 hover:text-primary block"
                                                                                >
                                                                                    {{ $s['name'] }}
                                                                                </a>
                                                                            </div>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <!--                        opacity the page when categoru dropdown is opened-->
                                            <div class="bg-black w-full left-0 inset-0 h-screen w-screen opacity-25 " ></div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        @endif
                @endforeach

                        <!--ato anash -->
                    <div class="space-x-1 flex">
                        <a class=" transition duration-200 inline-block px-2 lg:px-3 py-3 text-base leading-5 hover:text-[#E72B6F] whitespace-nowrap font-normal">
                            Special Offer
                        </a>
                        <a class=" transition duration-200 inline-block px-2 lg:px-3 py-3 text-base leading-5 hover:text-[#E72B6F] whitespace-nowrap font-bold text-[#E72B6F]">
                            Tu e Prénatal
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
