<header>
    <img src="{{ asset('img/marchio-sito-test.png') }}" alt="La Molisana">
    <ul class="list-inline">    
        {{-- @foreach ($menu as $item)
            <li class="{{ Route::currentRouteName() == $item["name"] ? 'active' : '' }}">
                <a href="{{ route($item["name"]) }}">{{ $item["text"] }}</a>
            </li>    
        @endforeach --}}

        <li class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
            <a href="{{ route('home') }}">HOME</a>
        </li>
        <li class="{{ Route::currentRouteName() == 'prodotto' ? 'active' : '' }}">
            <a href="{{ route('prodotto') }}">PRODOTTI</a>
        </li>
        <li class="{{ Route::currentRouteName() == 'news' ? 'active' : '' }}">
            <a href="{{ route('news') }}">LE MIE NEWS</a>
        </li>
    </ul>
</header>