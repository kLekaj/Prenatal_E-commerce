<div class="lg:pt-12 lg:mt-10 -mt-6">
    <div class="container w-[90%] md:w-[85%] lg:w-[88%] mt-5 mx-5 mx-auto lg:mt-[80px] lg:pt-3  ">
        <div class="flex justify-between items-center py-4 md:py-6 ">
            <div>
                <a href="/" class="text-black font-bold text-xs" title="Home">Home</a>
                @if($categories_urls == 1)
                    <span class="mx-1 font-normal text-black text-xs">/</span>
                    <a href="http://127.0.0.1:8000/categoria-prodotto/{{ $path_url[1] }}"
                       class="text-[#E72B6F] font-bold text-sm" >
                        {{ strtoupper(str_replace('-',' ', $path_url[1])) }}
                    </a>
                @elseif($categories_urls == 2)
                    <span class="mx-1 font-normal text-black text-xs">/</span>
                    <a href="http://127.0.0.1:8000/categoria-prodotto/{{ $path_url[1] }}"
                       class="text-sm" >
                        {{ strtoupper(str_replace('-',' ', $path_url[1])) }}
                    </a>
                    <span class="mx-1 font-normal text-black text-xs">/</span>
                    <div
                        x-data="{ open: false }"
                        class="inline-block">
                        <div class="relative z-5 ">
                            <span
                                x-on:click="open =! open"
                                class="relative z-10 ">
                                <div class="flex items-center justify-center">
                                    <a
                                        class="text-[#E72B6F] font-bold text-sm cursor-pointer">
                                        {{ str_replace('-',' ',strtoupper($path_url[2])) }}
                                    </a>
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="ml-1 w-4 h-4 text-gray-800"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>                                </div>
                            </span>
                            <div
                                x-show="open"
                                @click.away="open = false"
                                class="absolute z-10 transition duration-150 ease-in transform w-max max-w-xs md:max-w-sm top-full left-1/2 -translate-x-1/2 opacity-100 translate-y-0 pointer-events-auto z-40" data-dropdown-container="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto z-40" data-inactive-classes="opacity-0 translate-y-4 pointer-events-none" style="">
                                @foreach($categories as $c)
                                    @foreach($c['children'] as $sub)
                                        @if(strtolower($c['name']) === $path_url[1])
                                            <div class="flex flex-col bg-white shadow-lg divide-y divide-gray-200">
                                                <a
                                                    href="http://127.0.0.1:8000/categoria-prodotto/{{ $path_url[1] }}/{{ str_replace(' ','-',strtolower($sub['name'])) }}"
                                                    class="font-normal text-base w-full px-5 py-2 hover:text-primary text-pnt-black">
                                                    {{ $sub['name'] }}
                                                </a>
                                            </div>
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>
                            <div class="fixed inset-0 bg-black transition duration-150 opacity-0 pointer-events-auto"></div>
                        </div>
                    </div>

                @elseif($categories_urls == 3)
                    <span class="mx-1 font-normal text-black text-xs">/</span>
                    <a href="http://127.0.0.1:8000/categoria-prodotto/{{ $path_url[1] }}"
                       class="text-sm" >
                        {{ strtoupper(str_replace('-',' ', $path_url[1])) }}
                    </a>
                    <span class="mx-1 font-normal text-black text-xs">/</span>
                    <a href="http://127.0.0.1:8000/categoria-prodotto/{{ $path_url[1] }}/{{ $path_url[2] }}"
                       class="text-sm" >
                        {{ strtoupper(str_replace('-',' ', $path_url[2])) }}
                    </a>
                    <span class="mx-1 font-normal text-black text-xs">/</span>
                    <div
                        x-data="{ open: false }"
                        class="inline-block">
                        <div class="relative z-5 ">
                            <span
                                x-on:click="open =! open"
                                class="relative z-10 ">
                                <div class="flex items-center justify-center">
                                    <a
                                        class="text-[#E72B6F] font-bold text-sm cursor-pointer">
                                        {{ strtoupper($path_url[3]) }}
                                    </a>
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="ml-1 w-4 h-4 text-gray-800">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>                                </div>
                            </span>
                            <div
                                x-show="open"
                                @click.away="open = false"
                                class="absolute z-10 transition duration-150 ease-in transform w-max max-w-xs md:max-w-sm top-full left-1/2 -translate-x-1/2 opacity-100 translate-y-0 pointer-events-auto z-40" data-dropdown-container="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto z-40" data-inactive-classes="opacity-0 translate-y-4 pointer-events-none" style="">
                                @foreach($categories as $c)
                                    @foreach($c['children'] as $sub)
                                        @foreach($sub['children'] as $s)
                                            @if( strtolower($sub['name']) === str_replace('-',' ',$path_url[2]) )
                                                <div class="flex flex-col bg-white shadow-lg divide-y divide-gray-200">
                                                    <a
                                                        href="http://127.0.0.1:8000/categoria-prodotto/{{ $path_url[1] }}/{{ $path_url[2] }}/{{ str_replace(['(',')','/', '+',','],'',str_replace([' '], '-', Str::lower($s['name'])))  }}"
                                                        class="font-normal text-base w-full px-5 py-2 hover:text-[#E72B6F] text-pnt-black">
                                                        {{ str_replace('-',' ',$s['name']) }}
                                                    </a>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endforeach
                                @endforeach
                            </div>
                            <div class="fixed inset-0 bg-black transition duration-150 opacity-0 pointer-events-auto"></div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="container w-[90%] md:w-[85%] lg:w-[88%] mx-5 mx-auto ">
        <h1 class="block text-xl sm:text-2xl md:text-2xl text-gray-800 font-bold">
            @if($categories_urls == 1)
                {{ strtoupper(str_replace('-',' ', $path_url[1])) }}
            @elseif($categories_urls == 2)
                {{ strtoupper(str_replace('-',' ', $path_url[2])) }}
            @elseif($categories_urls == 3)
                {{ strtoupper(str_replace('-',' ', $path_url[3])) }}
            @endif
        </h1>
    </div>

</div>
