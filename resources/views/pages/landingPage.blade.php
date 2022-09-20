<x-layout>
    @section('header')
        @include('header')
    @endsection

    @section('slot')
        <div class="w-[90%] md:w-[85%] lg:w-[88%] mx-5 mx-auto lg:pt-20">
            @include('components.carousel')
        </div>
        <div class="w-[90%] md:w-[85%] lg:w-[88%] mx-5 mx-auto py-10">
            @include('components.carosels_photos')
        </div>

        @include('components.la_nosta_experienca')

        {{--        carosel problem--}}
        @include('components.categorie_in_evidenca')

        {{--        carosel problem--}}

        @include('components.il_nostri_brand')

        @include('components.one')
        @include('components.family')
        @include('components.history')
    @endsection
</x-layout>
