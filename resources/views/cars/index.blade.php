@extends('layout.default')

@section('content')
    <h1>
        Lista auto
    </h1>
    <a href="{{ route('home') }}">Torna alla Home</a>
    <a href="{{ route('cars.create') }}">Aggiungi Auto</a>
    <div class="grid">
        @foreach ($cars as $car)
            <div>
                <h3>
                    {{ $car->marca }}
                </h3>
                <h4>
                    {{ $car->numero_telaio }}
                </h4>
                <a href="{{ route('cars.show', $car->id) }}">Dettagli</a>
            </div>
        @endforeach
    </div>
@endsection
