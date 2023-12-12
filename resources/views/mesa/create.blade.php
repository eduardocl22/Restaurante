@extends('layouts.app')

@section('title', 'Crear Nueva Mesa')

@section('content')
    <div class="container">
        <h1 style="text-align: center; margin-bottom: 20px;">Crear Nueva Mesa</h1>

        <form method="POST" action="{{ route('mesa.store') }}" style="max-width: 400px; margin: 0 auto; background-color: #fff; padding: 20px; border: 1px solid #ccc; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);" class="my-4">
            @csrf
            <div class="form-group">
                <label for="capacidad">Capacidad:</label>
                <input type="number" name="capacidad" required style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">
            </div>
            <div class="form-group">
                <label for="ubicacion">Ubicación:</label>
                <input type="text" name="ubicacion" required style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">
            </div>
            <button type="submit" class="btn btn-success" style="background-color: #4CAF50; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">Guardar Mesa</button>
        </form>

        <a href="{{ route('mesa.index') }}" class="btn btn-primary" style="display: block; text-decoration: none; color: #3498db; font-weight: bold; border: 1px solid #3498db; padding: 8px 16px; border-radius: 4px; transition: background-color 0.3s, color 0.3s; margin-top: 10px;">Volver al Listado</a>
    </div>
@endsection
