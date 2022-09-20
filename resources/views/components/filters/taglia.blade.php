
<div x-data="{ show: false }">
    <div class="relative">
        <button
            @click="show = !show"
            :aria-expanded="show ? 'true' : 'false'"
            type="button"
            class="block pointer-events-auto w-full mr-3 text-xs font-regular text-gray-700 bg-white border border-gray-400 hover:border-gray-400 hover:bg-gray-400 hover:text-white px-4 py-2 pr-8 rounded-full leading-tight focus:outline-none">
            <span>Taglia</span>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                </svg>
            </div>
        </button>
    </div>

    <div
        x-show="show"
        class="bg-white border border-gray-50 shadow-xl rounded absolute left-0 right-0 transform duration-50 ease-in transition translate-y-0 z-50 top-full mt-2">

        <div class="flex flex-wrap -mx-3 -mt-3">
            <div class="w-1/3 px-3 pt-3">
                <div class="px-5 pt-5">
                    <span class="block font-medium text-[#E72B6F] text-lg mb-6">Filtra per taglia</span>
                </div>

                <div class="max-h-96 overflow-y-auto">
                    <div class="px-5 pb-2">
                        <div class="flex justify-start flex-wrap -ml-4 -mt-4">
                            <div class="ml-4 mt-4" style="min-width: 200px">
                                <label for="">
{{--                                    <input type="checkbox" name="size" id="adopted" value="{{ $item->id }}">--}}
                                    <input type="checkbox" name="size" id="adopted" value="x">x
{{--                                    @if (in_array($brand->id, explode(',', request()->input('filter.brand'))))--}}
{{--                                        checked--}}
{{--                                    @endif--}}
                                </label>
                                <div data-component="checkbox" class="relative">

                                    <label class="flex space-x-4 items-center">
                                        <div class="flex-shrink-0 flex">
                                            <input data-checkbox="" type="checkbox" class="form-checkbox   form-checkbox-secondary  w-5 h-5" value="xxs-36-38" name="filter_mtb-clothing-size">
                                        </div>
                                        <div class="relative flex-1">
                                            <span class="font-normal text-base text-gray-900">
                                                XXS | 36-38
                                            </span>
                                        </div>
                                    </label>
                                    <span data-error-message="" title="" data-active-classes="opacity-100 translate-y-0 pointer-events-auto" data-inactive-classes="opacity-0 translate-y-2 pointer-events-none" class="absolute top-full left-0 w-full text-sm leading-5 transition duration-300 ease-in text-red-600 truncate opacity-0 translate-y-2 pointer-events-none">
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full px-3">
                <div class="px-5 py-3 border-t border-gray-100">
                    <button
                        class="inline-flex uppercase justify-center items-center text-center rounded-full px-5 border transition delay-150 duration-150 ease-in-out focus:outline-none text-sm py-1 px-3 bg-[#E72B6F] text-white border-[#E72B6F] hover:bg-white hover:text-[#E72B6F] focus:bg-white focus:text-[#E72B6F] focus:shadow-outline-[#E72B6F] cursor-pointer" data-disabled-classes="bg-gray-300 text-white border-gray-300 pointer-events-none cursor-not-allowed" data-enabled-classes="bg-[#E72B6F] text-white border-[#E72B6F] hover:bg-white hover:text-[#E72B6F] focus:bg-white focus:text-[#E72B6F] focus:shadow-outline-[#E72B6F] cursor-pointer"
                        type="button">
                        <span class="button-text">
                            <span class="px-4">Applica</span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function getIds(size) {
        let checkBoxes = document.getElementsByName(size);
        return Array.prototype.slice.call(checkBoxes)
            .filter(ch => ch.checked === true)
            .map(ch => ch.value);
    }

    function filterResults () {
        let sizeIds = getIds("size");


        let href = 'filter?';

        if(sizeIds.length) {
            href += 'filter[brand]=' + sizeIds;
        }

        document.location.href=href;

    }


    // console.log(document.getElementById("filter").addEventListener("click", filterResults));

</script>



