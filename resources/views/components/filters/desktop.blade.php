<form  action="" method="GET">
    <div class="flex items-center space-x-2">
        {{--                    logo for filtri --}}
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-[#E72B6F] transform rotate-90">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
            </svg>
            <span class="ml-1 mr-6 uppercase font-medium text-[#E72B6F] text-sm">Filtri</span>
        </div>



        <div class=" flex items-center space-x-3 pr-3">
            @include('components.filters.marca')
        </div>
    </div>

    <div class="flex items-center flex-wrap -ml-2 -mt-2 pt-4">
        @foreach($filtered_values as $ch)
            @foreach($ch as $key=>$i)
                @if($key === 'marche')
                    <div class="mt-2 flex flex-wrap items-center text-sm space-x-1 text-gray-600">
                        <span class="ml-2">Marca:</span>
                        <span class="font-bold"></span>
                        @foreach($i as $a)
                            <div class="px-2 py-1 border border-gray-400 rounded-full flex items-center">
                                <span class="font-bold">{{ ucwords($a) }}</span>
                            </div>
                        @endforeach
                    </div>
                @endif
                 @if( !($min_price[0][0] == 0 and $max_price[0][0] == 2000) )
                        @if($key === 'filter_min_prezzo')
                            <div class="ml-2 mt-2">
                                <div class="px-2 py-1 border border-gray-400 text-gray-600 rounded-full text-sm flex items-center">
                                    <span>Prezzo:</span>
                                    <span class="font-bold">€ {{ $min_price[0][0] }}-{{ $max_price[0][0] }}</span>
                                </div>
                            </div>
                        @endif
                    @endif


                    @if($key === 'filter_taglia')
                        <div class="mt-2 flex flex-wrap items-center text-sm space-x-1 text-gray-600">
                            <span class="ml-2">Taglia Neonato Abbigliamento:</span> <span class="font-bold"></span>

                    @foreach($i as $a)
                                <div class="px-2 py-1 border border-gray-400 rounded-full flex items-center">
                                    <span class="font-bold">{{ ucwords($a) }}</span>
                                </div>
                    @endforeach
                        </div>
                @endif

                @if($key === 'filter_color')
                        <div class="mt-2 flex flex-wrap items-center text-sm space-x-1 text-gray-600">
                            <span class="ml-2">Colore:</span>
                            <span class="font-bold"></span>
                    @foreach($i as $a)
                                <div class="px-2 py-1 border border-gray-400 rounded-full flex items-center">
                                    <span class="font-bold">{{ ucwords($a) }}</span>
                                </div>
                    @endforeach
                        </div>

                    @endif


                @if($key === 'sesso')
                        <div class="mt-2 flex flex-wrap items-center text-sm space-x-1 text-gray-600">
                            <span class="ml-2">Genere:</span>
                            <span class="font-bold"></span>
                            @foreach($i as $a)
                                <div class="px-2 py-1 border border-gray-400 rounded-full flex items-center">
                                    <span class="font-bold">{{ ucwords($a) }}</span>
                                </div>
                            @endforeach
                        </div>

                    @endif


            @endforeach
        @endforeach

            @if(!empty($filtered_values))
                <div class="ml-2 mt-2">
                    <a href="{{ URL::current() }}">
                        <button class="inline-flex uppercase justify-center items-center text-center rounded-full px-5 border transition delay-150 duration-150 ease-in-out focus:outline-none text-sm py-1 px-3 bg-transparent text-[#E72B6F] border-[#E72B6F] hover:bg-[#E72B6F] hover:text-white focus:bg-[#E72B6F] focus:text-white focus:shadow-outline-[#E72B6F] cursor-pointer" data-disabled-classes="bg-transparent text-gray-300 border-gray-300 cursor-not-allowed pointer-events-none" data-enabled-classes="bg-transparent text-[#E72B6F] border-[#E72B6F] hover:bg-[#E72B6F] hover:text-white focus:bg-[#E72B6F] focus:text-white focus:shadow-outline-[#E72B6F] cursor-pointer"
                                type="reset"
                                aria-label="Resetta">
                            <span class="mr-2">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                </svg>
                            </span>
                            <span class="button-text">
                                Resetta
                            </span>
                        </button>
                    </a>
                </div>
            @endif
    </div>
</form>
