@extends('layouts.generalLayout')
@vite('resources/js/app.js')

<nav class="navbar navbar-light bg-light mb-5">
    <div class="container-fluid">
        <a class="navbar-brand btn btn-primary text-white" href="{{ route('cars.index') }}">Home</a>
    </div>
</nav>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $car->model }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $car->brand }}</h6>
                        <p class="card-text">{{ $car->price }}</p>
                        <p class="card-text">{{ $car->cc }}</p>
                        <p class="card-text">{{ $car->year_release }}</p>

                        @foreach ($car->optionals as $optional)
                            <span class="badge rounded-pill text-bg-primary">{{ $optional->name }}</span>
                        @endforeach

                    </div>
                    <div class="card-footer">
                        <form action="{{ route('cars.destroy', ['car' => $car->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button class=" btn btn-warning ml-2" type="submit"><a
                                    class="text-white text-decoration-none"
                                    href="{{ route('cars.edit', $car->id) }}">edit</a>
                            </button>
                            <button class=" btn btn-danger text-white ml-2" type="submit">elimina
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>
