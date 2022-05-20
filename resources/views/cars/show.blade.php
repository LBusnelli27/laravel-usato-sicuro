@extends('layout.default')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    {{ $car->model }} - {{ $car->marca }}
                </h1>
                @include('partials.nav')
                <a href="{{ route('cars.edit', $car->id) }}">Edit car</a>
                <div class="p-2 bg-secondary text-white">
                    <p>N. telaio: {{ $car->numero_telaio }}</p>
                    <p>Porte: {{ $car->porte }}</p>
                    <p>Data immatricolazione: {{ $car->data_immatricolazione }}</p>
                    <p>Alimentazione: {{ $car->alimentazione }}</p>
                    <p>Prezzo: {{ $car->prezzo }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
