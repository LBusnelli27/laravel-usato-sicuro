@extends('layout.default')

@section('content')
    <h1>
        creazione nuova auto
    </h1>
    <form action="{{ route('cars.store') }}" method="POST">
        @csrf
        <label for="numero_telaio">Numero di telaio</label>
        <input type="text" name="numero_telaio" id="numero_telaio">
        <br>
        <label for="model">Modello</label>
        <input type="text" name="model" id="model">
        <br>
        <label for="porte">Porte</label>
        <input type="text" name="porte" id="porte">
        <br>
        <label for="data_immatricolazione">Immatricolazione</label>
        <input type="date" name="data_immatricolazione" id="data_immatricolazione">
        <br>
        <label for="marca">Marca</label>
        <input type="text" name="marca" id="marca">
        <br>
        <label for="alimentazione">Alimentazione</label>
        <input type="text" name="alimentazione" id="alimentazione">
        <br>
        <label for="prezzo">Prezzo</label>
        <input type="text" name="prezzo" id="prezzo">
        <br>
        <button type="submit">Send</button>
    </form>
@endsection
