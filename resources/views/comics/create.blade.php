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
        <form action="{{ route("comics.store")}}" method="post" class="row row-cols-2" novalidate>
            @csrf
            <div class="col">
                <div class="form-group">
                    <label for="title">Titolo</label>
                    <input type="text" class="form-control @error("title") is-invalid @enderror" name="title" id="title" value="{{ old('title') }}">
                    <div class="invalid-feedback">
                        @error('title')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="description">Desrizione</label>
                    <textarea type="text" class="form-control @error("title") is-invalid @enderror" rows="4" name="description" id="description" value="{{ old('description') }}"></textarea>
                    <div class="invalid-feedback">
                        @error('description')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="thumbnail">URL dell'immagine</label>
                    <input type="text" class="form-control @error("title") is-invalid @enderror" name="thumb" id="thumbnail" value="{{ old('thumb') }}">
                    <div class="invalid-feedback">
                        @error('thumb')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="series">Serie</label>
                    <input type="text" class="form-control @error("title") is-invalid @enderror" name="series" id="series" value="{{ old('series') }}">
                    <div class="invalid-feedback">
                        @error('series')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="type">Tipo</label>
                    <input type="text" class="form-control @error("title") is-invalid @enderror" name="type" id="type" value="{{ old('type') }}">
                    <div class="invalid-feedback">
                        @error('type')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="sale_date">Data di uscita</label>
                    <input type="text" class="form-control @error("title") is-invalid @enderror" name="sale_date" id="sale_date" value="{{ old('sale_date') }}">
                    <div class="invalid-feedback">
                        @error('sale_date')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="price">Prezzo in € </label>
                    <input type="text" class="form-control @error("title") is-invalid @enderror" name="price" id="price" placeholder="Es: 9.99" value="{{ old('price') }}">
                    <div class="invalid-feedback">
                        @error('price')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col">
                <button class="btn btn-primary mt-3">Crea</button>
            </div>
        </form>
    </div>  
</div>
@endsection

