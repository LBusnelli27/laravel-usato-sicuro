@extends('layout.default')

@section('content')
    <h1>
        Lista auto
    </h1>
    <a href="{{ route('home') }}">Torna alla Home</a>
    <a href="{{ route('cars.create') }}">Aggiungi Auto</a>
    @if (session('message'))
        <div>
            {{ session('message') }}
        </div>
    @endif
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
                <form action="{{ route('cars.destroy', $car->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
        @endforeach
    </div>
@endsection
