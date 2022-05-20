@extends('layout.default')

@section('content')
    <h1>
        Edit nuova auto
    </h1>
    <div>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <form action="{{ route('cars.update', $car) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="numero_telaio">Numero di telaio</label>
        <input type="text" name="numero_telaio" id="numero_telaio" value="{{ $car->numero_telaio }}">

        <label for="model">Modello</label>
        <input type="text" name="model" id="model" value="{{ $car->model }}">

        <label for="porte">Porte</label>
        <input type="text" name="porte" id="porte" value="{{ $car->porte }}">

        <label for="data_immatricolazione">Immatricolazione</label>
        <input type="text" name="data_immatricolazione" id="data_immatricolazione"
            value="{{ $car->data_immatricolazione }}">

        <label for="marca">Marca</label>
        <input type="text" name="marca" id="marca" value="{{ $car->marca }}">

        <label for="alimentazione">Alimentazione</label>
        <input type="text" name="alimentazione" id="alimentazione" value="{{ $car->alimentazione }}">

        <label for="prezzo">Prezzo</label>
        <input type="text" name="prezzo" id="prezzo" value="{{ $car->prezzo }}">

        <button type="submit">Send</button>
    </form>

@endsection
