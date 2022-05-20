@extends('layout.default')

@section('content')
    <div>
        <h1>
            Auto Singola
        </h1>
        <a href="{{ route('home') }}">Home page</a>
        <a href="{{ route('cars.index') }}">Lista Completa</a>
        <div>
            @if ($errors->any())
                {
                <div class="alert alert-success">
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </div>
                }
            @endif
            <h3>
                {{ $car->model }} - {{ $car->marca }}
            </h3>
            <p>N. telaio: {{ $car->numero_telaio }}</p>
            <p>Porte: {{ $car->porte }}</p>
            <p>Data immatricolazione: {{ $car->data_immatricolazione }}</p>
            <p>Alimentazione: {{ $car->alimentazione }}</p>
            <p>Prezzo: {{ $car->prezzo }}</p>
        </div>

    </div>
@endsection
