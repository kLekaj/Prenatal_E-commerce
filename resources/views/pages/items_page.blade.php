<x-layout>
    @section('header')
        @include('header')
    @endsection

    @section('slot')
        @include('components/category-path')


        {{--    @include('components/category')--}}

        @include('components/filter')
        @include('components/product')

    @endsection
</x-layout>
