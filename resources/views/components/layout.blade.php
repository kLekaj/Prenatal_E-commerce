<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
{{--    @vite('resources/css/app.css')--}}
{{--            swipper js--}}
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    {{--    alpine js--}}
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Prenatal</title>


</head>



<body class="relative flex flex-col">

    {{--    top of the page--}}
{{--<section>--}}
    <div class="z-40 flex flex-col w-full fixed">
        @include('components.header-carousel')

        <header class="z-40 w-full border-b border-[#E72B6F] lg:border-gray-200 bg-[#E72B6F] lg:bg-white">
    {{--        header for desktop--}}
            <div class="hidden z-40 lg:block">
                @include('components.desktop_header')
            </div>
            @yield('header')

        </header>
    </div>


{{--    duhet prap per layout--}}
{{--        search for mobile--}}
    <div class="w-[90%] md:w-[85%] lg:hidden mx-5 mx-auto mt-[45px] py-10">
        @include('components.search_mobile')
    </div>


    @yield('slot')



<footer>
    @include('components.ads')
    {{----}}
    @include('components.newsletter')
{{--    for moblie problem need to fix--}}
    @include('components.footer_menu_accordation')
{{----}}
    @include('components.footer_menu_desktop')
    @include('components.footer')
</footer>
@if(session()->has('success'))
    <div
            x-data="{ show: true }"
            x-init="setTimeout(() => show = false, 4000)"
            x-show="show"

            class="fixed bottom-0 right-0 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm bg-[#E72B6F] z-10">
        <p>Your account has been created.</p>
    </div>
@endif
</body>

