<form action="{{ route("comics.store")}}" method="POST" class="row row-cols-2" novalidate>
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
            <textarea type="text" class="form-control @error("description") is-invalid @enderror" rows="4" name="description" id="description" value="{{ old('description') }}"></textarea>
            <div class="invalid-feedback">
                @error('description')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="thumbnail">URL dell'immagine</label>
            <input type="text" class="form-control @error("thumb") is-invalid @enderror" name="thumb" id="thumbnail" value="{{ old('thumb') }}">
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
            <input type="text" class="form-control @error("series") is-invalid @enderror" name="series" id="series" value="{{ old('series') }}">
            <div class="invalid-feedback">
                @error('series')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="type">Tipo</label>
            <input type="text" class="form-control @error("type") is-invalid @enderror" name="type" id="type" value="{{ old('type') }}">
            <div class="invalid-feedback">
                @error('type')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="sale_date">Data di vendita</label>
            <input type="date" class="form-control @error("sale_date") is-invalid @enderror" name="sale_date" id="sale_date" value="{{ old('sale_date') }}">
            <div class="invalid-feedback">
                @error('sale_date')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="price">Prezzo in € </label>
            <input type="text" class="form-control @error("price") is-invalid @enderror" name="price" id="price" placeholder="Es: 9.99" value="{{ old('price') }}">
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