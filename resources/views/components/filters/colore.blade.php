<div x-data="{ show: false }">
    <div class="inline-block relative">
        <button
            @click="show = !show"
            :aria-expanded="show ? 'true' : 'false'"
            type="button" class="block pointer-events-auto w-full mr-3 text-xs font-regular text-gray-700 bg-white border border-gray-400 hover:border-gray-400 hover:bg-gray-400 hover:text-white px-4 py-2 pr-8 rounded-full leading-tight focus:outline-none">
            <span>Colore</span>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path></svg>
            </div>
        </button>
    </div>

    <div
        x-show="show"
        @click.away="show = false"
        class="bg-white border border-gray-50 shadow-xl rounded absolute left-0 right-0 transform duration-50 ease-in transition translate-y-0 z-50 top-full mt-2">

    <div class="space-y-4">
            <div class="px-5 pt-5">
                <span class="block font-medium text-[#E72B6F] text-lg mb-6">Filtra per colore</span>
            </div>
            <div class="max-h-96 overflow-y-auto">
                <div class="px-5 pb-2">
                    <div class="flex justify-start flex-wrap -ml-4 -mt-4">
                        @php
                            $checked = [];
                            if( isset($_GET['filter_color'])){
                                $checked = $_GET['filter_color'];
                            }
                        @endphp
                        <div class="ml-4 mt-4" style="min-width: 200px">
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
                                               name="filter_color[]">
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
                        <div class="ml-4 mt-4" style="min-width: 200px">
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
                                            name="filter_color[]">
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
                        <div class="ml-4 mt-4" style="min-width: 200px">
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
                                            name="filter_color[]">
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
                        <div class="ml-4 mt-4" style="min-width: 200px">
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
                                            name="filter_color[]">
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
                        <div class="ml-4 mt-4" style="min-width: 200px">
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
                                            name="filter_color[]">
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
                        <div class="ml-4 mt-4" style="min-width: 200px">
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
                                            name="filter_color[]">
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
                        <div class="ml-4 mt-4" style="min-width: 200px">
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
                                            name="filter_color[]">
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
                        <div class="ml-4 mt-4" style="min-width: 200px">
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
                                            name="filter_color[]">
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
                        <div class="ml-4 mt-4" style="min-width: 200px">
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
                                            name="filter_color[]">
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
                        <div class="ml-4 mt-4" style="min-width: 200px">
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
                                            name="filter_color[]">
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
                        <div class="ml-4 mt-4" style="min-width: 200px">
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
                                            name="filter_color[]">
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
                        <div class="ml-4 mt-4" style="min-width: 200px">
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
                                            name="filter_color[]">
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
                        <div class="ml-4 mt-4" style="min-width: 200px">
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
                                               name="filter_color[]">
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
                        <div class="ml-4 mt-4" style="min-width: 200px">
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
                                            name="filter_color[]">
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
                        <div class="ml-4 mt-4" style="min-width: 200px">
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
                                            name="filter_color[]">
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
                        <div class="ml-4 mt-4" style="min-width: 200px">
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
                                            name="filter_color[]">
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
</div>
