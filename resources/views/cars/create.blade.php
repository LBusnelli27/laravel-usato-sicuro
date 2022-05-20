@extends('layout.default')

@section('content')
    <h1>
        creazione nuova auto
    </h1>
    <form action="{{ route('cars.store') }}" method="POST">
        @csrf
        <label for="numero_telaio">Numero di telaio</label>
        <input type="text" name="numero_telaio" id="numero_telaio">

        <label for="model">Modello</label>
        <input type="text" name="model" id="model">

        <label for="porte">Porte</label>
        <input type="text" name="porte" id="porte">

        <label for="data_immatricolazione">Immatricolazione</label>
        <input type="text" name="data_immatricolazione" id="data_immatricolazione">

        <label for="marca">Marca</label>
        <input type="text" name="marca" id="marca">

        <label for="alimentazione">Alimentazione</label>
        <input type="text" name="alimentazione" id="alimentazione">

        <label for="prezzo">Prezzo</label>
        <input type="text" name="prezzo" id="prezzo">

        <button type="submit">Send</button>
    </form>
@endsection
