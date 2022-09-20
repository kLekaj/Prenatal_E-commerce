<div x-data="{ show: false }">
    <div class="inline-block relative">
        <button
            @click="show = !show"
            :aria-expanded="show ? 'true' : 'false'"
            type="button" class="block pointer-events-auto w-full mr-3 text-xs font-regular text-gray-700 bg-white border border-gray-400 hover:border-gray-400 hover:bg-gray-400 hover:text-white px-4 py-2 pr-8 rounded-full leading-tight focus:outline-none">
            <span>Genere</span>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path></svg>
            </div>
        </button>
    </div>

    <div
        x-show="show"
        class="bg-white border border-gray-50 shadow-xl rounded absolute left-0 right-0  duration-50 ease-in transition  mt-2 z-50">

        <div class="space-y-4">
            <div class="px-5 pt-5">
                <span class="block font-medium text-[#E72B6F] text-lg mb-6">Filtra per sesso</span>
            </div>
            <div class="max-h-96 overflow-y-auto">
                <div class="px-5 pb-2">
                    @foreach ($gendre as $m)
                        @if(!empty($m))
                        <div class="flex justify-start flex-wrap -ml-4 -mt-4">
                            <div class="ml-4 mt-4" style="min-width: 200px">
                                <label class="flex space-x-4 items-center">
                                    <input
                                        class=""
                                        name="category"
                                        {{--                                        value="{{ $m->id }}"--}}
                                        type="checkbox"
                                    >
                                    {{ $m }}
                                </label>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

        <div class="px-5 py-3 border-t border-gray-100">
            <button class="inline-flex uppercase justify-center items-center text-center rounded-full px-5 border transition delay-150 duration-150 ease-in-out focus:outline-none text-sm py-1 px-3 bg-[#E72B6F] text-white border-[#E72B6F] hover:bg-white hover:text-[#E72B6F] focus:bg-white focus:text-[#E72B6F] focus:shadow-outline-[#E72B6F] cursor-pointer" data-disabled-classes="bg-gray-300 text-white border-gray-300 pointer-events-none cursor-not-allowed" data-enabled-classes="bg-[#E72B6F] text-white border-[#E72B6F] hover:bg-white hover:text-[#E72B6F] focus:bg-white focus:text-[#E72B6F] focus:shadow-outline-[#E72B6F] cursor-pointer" type="submit" aria-label="Applica">
                <span class="button-text">
                    <span class="px-4">
                        Applica
                    </span>
                </span>
            </button>
        </div>
    </div>

</div>

