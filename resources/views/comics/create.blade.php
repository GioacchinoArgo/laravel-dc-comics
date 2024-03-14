@extends('layouts.main')

@section('title', 'Crea comic')

@section('main-content')
<section id="comics-list" class="upper-content">
    <div class="container">
        <a class="create-btn" href="{{ route('comics.index')}}">Torna indietro</a>
    </div>
    <div class="container create-comic-container">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-6">
                    <div class="mt-3 text-center">
                        <label for="title" class="form-label"><h2 class="text-white">Inserisci il titolo</h2></label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Es.: Action Comics #1000: The Deluxe Edition">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mt-3 text-center">
                        <label for="series" class="form-label"><h2 class="text-white">Inserisci la serie</h2></label>
                        <input type="text" name="series" class="form-control" id="series" placeholder="Es.: Action Comics">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mt-3 text-center">
                        <label for="type" class="form-label"><h2 class="text-white">Inserisci la tipologia di fumetto</h2></label>
                        <input type="text" name="type" class="form-control" id="type" placeholder="Es.: Comic Book">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mt-3 text-center">
                        <label for="artists" class="form-label"><h2 class="text-white">Inserisci gli artisti</h2></label>
                        <input type="text" name="artists" class="form-control" id="artists">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mt-3 text-center">
                        <label for="writers" class="form-label"><h2 class="text-white">Inserisci gli scrittori</h2></label>
                        <input type="text" name="writers" class="form-control" id="writers">
                    </div>
                </div>
                <div class="col-4">
                    <div class="mt-3 text-center">
                        <label for="sale_date" class="form-label"><h2 class="text-white">Inserisci la data di pubblicazione</h2></label>
                        <input type="text" name="sale_date" class="form-control" id="sale_date">
                      </div>
                </div>
                <div class="col-3 ">
                    <div class="mt-3 text-center">
                        <label for="price" class="form-label"><h2 class="text-white">Inserisci il prezzo</h2></label>
                        <input type="text" name="price" class="form-control" id="price">
                      </div>
                </div>
                <div class="col-9">
                    <div class="mt-3 text-center">
                        <label for="thumb" class="form-label"><h2 class="text-white">Inserisci l'immagine</h2></label>
                        <input type="url" name="thumb" class="form-control" id="thumb" placeholder="Es.: https://">
                    </div>
                </div>
                <div class="col">
                    <div class="mt-3 text-center">
                        <label for="description" class="form-label"><h2 class="text-white">Inserisci la descrizione</h2></label>
                        <textarea type="url" name="description" class="form-control" id="description" rows="3"></textarea>
                    </div>
                </div>               
            </div>
            <div class="d-flex justify-content-center align-items-center pt-5 gap-4">
                <button class="create-btn" type="reset">Svuota tutti i campi</button>
                <button class="create-btn" type="submit">Aggiungi il fumetto</button>
            </div>
        </form>
    </div>
</section>
@endsection


{{-- 
    title fatto f
    thumb
    type f
    price f
    series f
    sale_datef

    #Text-area
    
    description
    artists
    writers
--}}