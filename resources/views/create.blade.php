@extends('layouts.generalLayout')

<main>
    <form method="POST" action="{{ route('cars.store') }}">

        @csrf

        <div class="mb-3">
            <label for="brand" class="form-label">Brand</label>
            <input type="text" class="form-control @error('brand') is-invalid @enderror" id="brand" name="brand"
                value="{{ old('brand') }}">
            @error('brand')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
                name="price" value="{{ old('price') }}">
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="model" class="form-label">Model</label>
            <input type="text" class="form-control @error('model') is-invalid @enderror" id="model"
                name="model" value="{{ old('model') }}">
            @error('model')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="cc" class="form-label">CC</label>
            <input type="text" class="form-control @error('cc') is-invalid @enderror" id="cc" name="cc"
                value="{{ old('cc') }}">
            @error('cc')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="year" class="form-label">Year</label>
            <input type="text" class="form-control @error('year') is-invalid @enderror" id="year" name="year"
                value="{{ old('year') }}">
            @error('year')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>




        <button type="submit" class="btn btn-primary">Salva</button>
    </form>

</main>
