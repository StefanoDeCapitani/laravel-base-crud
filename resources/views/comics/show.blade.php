@extends('layouts.default')

@section("title", $comic->series . "| DC Comics")

@section("content")
<div class="mt-5 mb-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col d-flex align-items-center">
                <h1>{{ $comic->title }}</h1>
                <a href="{{ route("comics.index") }}" class="btn btn-primary ml-auto">Torna all'elenco</a>
            </div>
        </div>
        <div class="row row-cols-2">
            <div class="col">
                <div class="">
                    <h3>Descrizione</h3>
                    <p>{{ $comic->description }}</p>
                </div>
                <div class="">
                    <h3>Serie</h3>
                    <p>{{ $comic->series  }}</p>
                </div>
                <div class="">
                    <h3>Tipo</h3>
                    <p>{{ $comic->type }}</p>
                </div>
                <div class="">
                    <h3>Data di vendita</h3>
                    <p>{{ $comic->sale_date }}</p>
                </div>
                <div class="">
                    <h3>Prezzo</h3>
                    <p>{{ $comic->price . "€" }}</p>
                </div>
            </div>
            <div class="col d-flex justify-content-center align-items-start">
                <img src="{{ $comic->thumb }}" class="w-75" alt="">
            </div>
        </div>
        <a href="{{ route("comics.edit",  $comic->id) }}" class="btn btn-primary mt-3">Modifica</a> 
    </div>

</div>
@endsection