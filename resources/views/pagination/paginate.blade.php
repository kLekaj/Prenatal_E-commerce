<div class="space-x-3 flex">
    @foreach($items['links'] as $key=>$p)
        @if(!($p['label'] === '&laquo; Previous' or $p['label'] === 'Next &raquo;'))
            <a
                    href="{{ $p['url'] }}"
                    class="hover:font-semibold hover:text-[#E72B6F] cursor-pointer">
                {{ $p['label'] }}
            </a>
        @endif
    @endforeach
</div>