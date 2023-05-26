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

    <div>
        <ul>
            @foreach ($cars as $car)
                <li class="mb-3">
                    {{ $car->brand }} -{{ $car->price }}

                    <form action="{{ route('cars.destroy', ['car' => $car->id]) }}" method="POST">
                        @csrf

                        @method('DELETE')
                        <a href="{{ route('cars.edit', $car->id) }}">EDIT</a>
                        <button class="btn" type="submit"><a href="">ELIMINA</a></button>
                    </form>
                </li>
            @endforeach ( $cars as $car )

        </ul>

    </div>

</body>

</html>
