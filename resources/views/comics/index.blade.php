@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')
<section id="comics-list" class="upper-content">
    <div class="container">
        @session('message')
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ $value }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endsession
        <a class="create-btn ms-4" href="{{ route('comics.create')}}">Aggiungi un fumetto</a>
    </div>
    <div class="container card-container">
        @foreach ($comics as $comic)
            <div class="comics-card">
                <a href="{{ route('comics.show', $comic->id) }}">
                    <img class="comic-image" src="{{ $comic->thumb }}" alt="{{ $comic->series }}">
                    <h1>{{ $comic['series'] }}</h1>
                </a>
            </div>
        @endforeach
    </div>
</section>
<section class="lower-content">
    <div class="container">
        <ul>
            <li><img src="{{ asset('img/buy-comics-digital-comics.png') }}">digital comics</li>
            <li><img src="{{ asset('img/buy-comics-merchandise.png') }}">dc merchandise</li>
            <li><img src="{{ asset('img/buy-comics-subscriptions.png') }}">subscription</li>
            <li><img src="{{ asset('img/buy-comics-shop-locator.png') }}">comic shop locator</li>
            <li><img src="{{ asset('img/buy-dc-power-visa.svg') }}">dc power visa</li>
        </ul>
    </div>
</section>
@endsection