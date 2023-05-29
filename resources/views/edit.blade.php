@extends('layouts.generalLayout')
@vite('resources/js/app.js')

<nav class="navbar navbar-light bg-light mb-5">
    <div class="container-fluid">
        <a class="navbar-brand btn btn-primary text-white" href="{{ route('cars.index') }}">Home</a>
    </div>
</nav>
<main>
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <form method="POST" action="{{ route('cars.update', ['car' => $car->id]) }}">

                    @csrf

                    @method('PUT')

                    <div class="mb-3">
                        <label for="brand" class="form-label">Brand</label>
                        <input type="text" class="form-control @error('brand') is-invalid @enderror" id="brand"
                            name="brand" value="{{ old('brand', $car->brand) }}">
                        @error('brand')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
                            name="price" value="{{ old('price', $car->price) }}">
                        @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label for="model" class="form-label">Model</label>
                        <input type="text" class="form-control @error('model') is-invalid @enderror" id="model"
                            name="model" value="{{ old('model', $car->model) }}">
                        @error('model')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="cc" class="form-label">CC</label>
                        <input type="text" class="form-control @error('cc') is-invalid @enderror" id="cc"
                            name="cc" value="{{ old('cc', $car->cc) }}">
                        @error('cc')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label for="year" class="form-label">Year</label>
                        <input type="text" class="form-control @error('year') is-invalid @enderror" id="year"
                            name="year" value="{{ old('year', $car->year_release) }}">
                        @error('year')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="controls mb-3">
                        @foreach ($optionals as $optional)
                            <input type="checkbox" id="optional_{{ $optional->id }}" name="optionals[]"
                                value="{{ $optional->id }}" @if ($car->optionals->contains($optional->id)) checked @endif>
                            <label for="optional_{{ $optional->id }}">{{ $optional->name }}</label><br>
                        @endforeach
                    </div>

                    <button type="submit" class="btn btn-primary">Salva</button>
                </form>

            </div>

        </div>
    </div>
</main>
