<!DOCTYPE html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>
<nav class="navbar navbar-light bg-light mb-5">
    <div class="container-fluid">
        <a class="navbar-brand btn btn-primary text-white" href="{{ route('cars.create') }}">Create</a>
    </div>
</nav>

<body>
    <div class="container">
        <div class="row">
            @foreach ($cars as $car)
                <div class="col-3 mb-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $car->model }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $car->brand }}</h6>
                            <p class="card-text">{{ $car->price }}</p>
                            <p class="card-text">{{ $car->cc }}</p>
                            <p class="card-text">{{ $car->year_release }}</p>
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
                                <button class="btn"><a href="{{route('cars.show',$car->id)}}">Visualizza</a></button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

</body>

</html>
