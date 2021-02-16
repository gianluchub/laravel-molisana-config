@extends('layouts.main')

@section('content')

    @include('partials.cards', [ 'title' => 'LE LUNGHE','pastaArray' => $lunghe ] )
    
    @include('partials.cards', [ 'title' => 'LE CORTE', 'pastaArray' => $corte ] )

    @include('partials.cards', [ 'title' => 'LE CORTISSIME', 'pastaArray' => $cortissime ] )    

@endsection
