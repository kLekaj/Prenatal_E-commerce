<form data-filter-form="desktop"  action="" method="GET">
    <div class="flex items-center space-x-2">
        {{--                    logo for filtri --}}
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-[#E72B6F] transform rotate-90">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
            </svg>
            <span class="ml-1 mr-6 uppercase font-medium text-[#E72B6F] text-sm">Filtri</span>
        </div>



        <div class=" flex items-center space-x-3 pr-3">
{{--            @include('filters.prezzo')--}}
            @include('components.filters.marca')
{{--            @include('filters.genere')--}}
{{--            @include('components.filters.colore')--}}


        </div>
    </div>

</form>
