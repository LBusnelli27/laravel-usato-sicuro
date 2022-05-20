@extends('layout.default')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    Lista auto
                </h1>
                @include('partials.nav')
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
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('cars.show', $car->id) }}">Dettagli</a>
                                <form action="{{ route('cars.destroy', $car->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
@endsection
