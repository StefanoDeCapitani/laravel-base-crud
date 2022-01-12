@extends('layouts.default')

@section("title", "Crea nuovo | DC Comics")

@section('content')
<div class="mt-5 mb-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col d-flex align-items-center">
                <h1>Crea nuova card</h1>
                <a href="{{ route("comics.index") }}" class="btn btn-primary ml-auto">Torna all'elenco</a>
            </div>
        </div>
        @include('comics.partials.createform')
    </div>  
</div>
@endsection

