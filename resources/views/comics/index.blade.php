@extends('layouts.default')

@php
    use \Illuminate\Support\Str; 
@endphp

@section("title", "Comics | DC Comics")

@section('content')
<div class="mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col d-flex align-items-center">
                <h1>Comics</h1>
                <a href="{{ route("comics.create") }}" class="btn btn-primary ml-auto">Aggiungi nuovo</a>
            </div>
        </div>
        @if(Session::get("message"))
            <div class="alert alert-danger" role="alert">
                {{ Session::get("message") }}
            </div>
        @endif
        <div class="row row-cols-3 my-3">
            @foreach ($comics as $comic)
                <div class="col p-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ $comic->thumb }}" alt="Card image cap"> 
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <p class="card-text">{{ Str::limit($comic ->description, 100) }}</p>
                            <div class="d-flex">
                                <a href="{{ route("comics.show", $comic->id) }}" class="btn btn-primary">Dettagli</a>
                                <form action="{{ route("comics.destroy", $comic->id) }}" method="POST" class="ml-auto">
                                    @csrf
                                    @method("DELETE")
                                    <button class="btn btn-danger">Elimina</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
