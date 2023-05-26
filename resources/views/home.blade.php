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

<body>

    <div class="controls">
        <a href="{{ route('cars.create') }}">Create</a>
    </div>
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
                                <a href="{{ route('cars.edit', $car->id) }}">EDIT</a>
                                <button class="btn" type="submit"><a href="">ELIMINA</a></button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

</body>

</html>
