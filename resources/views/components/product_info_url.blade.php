<div class="">
    <div class="">
        <div class="flex justify-between items-center py-4 md:py-6 ">
            <div>
                <a href="{{ '/' }}" class="text-black font-bold text-xs" title="Home">Home</a>
                <span class="mx-1 font-normal text-black text-xs">/</span>

                @if($itemPath[0] == 0)
                    @foreach($itemPath as $i)
                        @if(is_array($i))
                            <a href="http://127.0.0.1:8000/categoria-prodotto/{{ strtolower($i[0]) }}"
                               class="text-[#E72B6F] font-bold text-sm" >
                                {{ $i[0] }}
                            </a>
                        @endif
                    @endforeach
                @endif

                @if($itemPath[0] == 1)

                    @foreach($itemPath as $i)
                        @if(is_array($i))
                            <a href="http://127.0.0.1:8000/categoria-prodotto/{{ strtolower($i[0]) }}"
                               class="text-sm" >
                                {{ $i[0] }}
                            </a>
                        @endif
                    @endforeach
                    <span class="mx-1 font-normal text-black text-xs">/</span>
                    <div
                            x-data="{ open: false }"
                            class="inline-block">
                        <div class="relative z-5 ">
                            <span x-on:click="open =! open"
                                  class="relative z-10 ">
                                <div class="flex items-center justify-center">
                                    @foreach($itemPath as $i)
                                        @if(is_array($i))
                                            <a class="text-[#E72B6F] font-bold text-sm cursor-pointer">
                                                {{ $i[1] }}
                                            </a>
                                        @endif
                                    @endforeach
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="ml-1 w-4 h-4 text-gray-800"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>                                </div></span>
                            <div
                                    x-show="open"
                                    @click.away="open = false"
                                    class="absolute z-10 transition duration-150 ease-in transform w-max max-w-xs md:max-w-sm top-full left-1/2 -translate-x-1/2 opacity-100 translate-y-0 pointer-events-auto z-40" data-dropdown-container="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto z-40" data-inactive-classes="opacity-0 translate-y-4 pointer-events-none" style="">

                                @foreach($categories as $c)
                                    @foreach($c['children'] as $sub)
                                        @foreach($itemPath as $i)
                                            @if(is_array($i))
                                                @if( str_replace(' ', '',strtolower($c['name'])) === str_replace(' ', '',strtolower($i[0]) ))
                                                    <div class="flex flex-col bg-white shadow-lg divide-y divide-gray-200">
                                                        <a
                                                                {{--                                                                href="http://127.0.0.1:8000/categoria-prodotto/{{ $path_url[1] }}/{{ str_replace(' ','-',strtolower($sub['name'])) }}"--}}
                                                                class="font-normal text-base w-full px-5 py-2 hover:text-[#E72B6F] text-black">
                                                            {{ $sub['name'] }}
                                                            {{--                                                            {{ $c['name'] }}->--}}
                                                        </a>
                                                    </div>
                                                @endif
                                            @endif
                                        @endforeach
                                    @endforeach
                                @endforeach
                                <div class="fixed inset-0 bg-black transition duration-150 opacity-0 pointer-events-auto"></div>
                            </div>
                        </div>
                    </div>
                @endif




                @if($itemPath[0] == 2)
                    @foreach($itemPath as $i)
                        @if(is_array($i))
                            <a
{{--                                    href="http://127.0.0.1:8000/categoria-prodotto/{{ strtolower($i[1]) }}"--}}
                               class="text-sm" >
                                {{ $i[0] }}
                            </a>
                        @endif
                    @endforeach
                    <span class="mx-1 font-normal text-black text-xs">/</span>
                        @foreach($itemPath as $i)
                            @if(is_array($i))
                                <a
{{--                                        href="http://127.0.0.1:8000/categoria-prodotto/{{ strtolower($i[2]) }}"--}}
                                   class="text-sm" >
                                    {{ $i[1] }}
                                </a>
                            @endif
                        @endforeach
                    <span class="mx-1 font-normal text-black text-xs">/</span>

                    <div x-data="{ open: false }" class="inline-block">
                        <div class="relative z-5 ">
                            <span x-on:click="open =! open" class="relative z-10 ">
                                <div class="flex items-center justify-center">
                                    <a class="text-[#E72B6F] font-bold text-sm cursor-pointer">
                                        {{ strtoupper($i[2]) }}
                                    </a>
                                    @foreach($itemPath as $i)
                                        @if(is_array($i))
                                            <a
{{--                                                    href="http://127.0.0.1:8000/categoria-prodotto/{{ strtolower($i[0]) }}" --}}
                                               class="text-[#E72B6F] font-bold text-sm cursor-pointer">
                                                {{ $i[2] }}
                                            </a>
                                        @endif
                                    @endforeach
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="ml-1 w-4 h-4 text-gray-800">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                            </span>
                            <div x-show="open" @click.away="open = false"
                                 class="absolute z-10 transition duration-150 ease-in transform w-max max-w-xs md:max-w-sm top-full left-1/2 -translate-x-1/2 opacity-100 translate-y-0 pointer-events-auto z-40">
                                @foreach($categories as $c)
                                    @foreach($c['children'] as $sub)
                                        @foreach($sub['children'] as $s)
                                            @if( str_replace(' ', '',strtolower($sub['name'])) === str_replace(' ', '',strtolower($i[1])) )

                                                <div class="flex flex-col bg-white shadow-lg divide-y divide-gray-200">
                                                    <a
{{--                                                            href="http://127.0.0.1:8000/categoria-prodotto/{{ $path_url[1] }}/{{ $path_url[2] }}/{{ str_replace(['(',')','/', '+',','],'',str_replace([' '], '-', Str::lower($s['name'])))  }}"--}}
                                                            class="font-normal text-base w-full px-5 py-2 hover:text-[#E72B6F] text-pnt-black">
                                                        {{ $s['name'] }}
                                                    </a>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif



            </div>
        </div>
    </div>


</div>
