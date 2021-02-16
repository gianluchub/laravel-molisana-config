@extends('layouts.main')

@section('css')
<link rel="stylesheet" href="{{ asset("css/news.css") }}">
@endsection

@section('scripts')
    <script src="{{ asset('js/script.js') }}" type="text/javascript"></script>
@endsection

@section('content')
    <div class="container">
        <h1>Latest news</h1>
    </div>
@endsection


