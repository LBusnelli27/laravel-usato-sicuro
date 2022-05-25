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
        <br>
        <label for="model">Modello</label>
        <input type="text" name="model" id="model" value="{{ old('model') ?? $car->model }}">
        <br>
        <label for="porte">Porte</label>
        <input type="text" name="porte" id="porte" value="{{ $car->porte }}">
        <br>
        <label for="data_immatricolazione">Immatricolazione</label>
        <input type="text" name="data_immatricolazione" id="data_immatricolazione"
            value="{{ $car->data_immatricolazione }}">
        <br>
        <label for="brand_id">Marca</label>
        <select name="brand_id" id="brand_id">
            @foreach ($brands as $brand)
                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
            @endforeach
        </select>
        <br>
        <br>
        @foreach ($colors as $color)
        <input type="checkbox" value="{{ $color }}">
        <span style="background-color: {{ $color->color }}; color: #fff; border-radius: .5rem; padding : 1rem">{{ $color->color }}</span>
        @endforeach
        <br>
        <br>
        <label for="alimentazione">Alimentazione</label>
        <input type="text" name="alimentazione" id="alimentazione" value="{{ $car->alimentazione }}">
        <br>
        <label for="prezzo">Prezzo</label>
        <input type="text" name="prezzo" id="prezzo" value="{{ $car->prezzo }}">
        <br>
        <button type="submit">Send</button>
    </form>

@endsection
