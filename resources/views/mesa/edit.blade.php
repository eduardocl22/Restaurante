@extends('layouts.app')

@section('title', 'Editar Mesa')

@section('content')
    <div class="container">
        <h1 style="text-align: center; margin-bottom: 20px;">Editar Mesa</h1>

        <form method="POST" action="{{ route('mesa.update', $mesas->id) }}" style="max-width: 400px; margin: 0 auto; background-color: #fff; padding: 20px; border: 1px solid #ccc; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);" class="my-4">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="capacidad">Capacidad:</label>
                <input type="number" name="capacidad" value="{{ $mesas->capacidad }}" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 3px;">
            </div>

            <div class="form-group">
                <label for="ubicacion">Ubicación:</label>
                <input type="text" name="ubicacion" value="{{ $mesas->ubicacion }}" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 3px;">
            </div>

            <button type="submit" style="display: inline-block; background-color: #007BFF; color: #fff; padding: 10px 20px; border: none; border-radius: 3px; cursor: pointer;">Actualizar Mesa</button>
        </form>

        <a href="{{ route('mesa.index') }}" style="display: block; margin-top: 10px; text-decoration: none; color: #007BFF;">Volver al Listado</a>
    </div>
@endsection
