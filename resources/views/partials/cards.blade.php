<section class="container">
    <h2>{{ $title }}</h2>
    <div class="cards">
        @foreach ($pastaArray as $pasta)
            <div class="card">
                <img src="{{ $pasta["src"] }}" alt="{{ $pasta["titolo"] }}">
                <div class="card-text">
                    <a href="{{ route('prodotto', [ 'idProdotto' => $pasta["position"] ]) }}">{{ $pasta["titolo"] }}</a>
                </div>
            </div>
        @endforeach
    </div>
</section>