@extends('layouts.app')

@section('title', 'Listado de Mesas')

@section('content')
    <h1>Listado de Mesas</h1>

    <table style="width: 100%; border-collapse: collapse;">
        <tr>
            <th style="background-color: #4CAF50; color: white; border: 1px solid #ddd; padding: 8px; text-align: left;">ID</th>
            <th style="background-color: #4CAF50; color: white; border: 1px solid #ddd; padding: 8px; text-align: left;">Capacidad</th>
            <th style="background-color: #4CAF50; color: white; border: 1px solid #ddd; padding: 8px; text-align: left;">Ubicacion</th>
            <th style="background-color: #4CAF50; color: white; border: 1px solid #ddd; padding: 8px; text-align: left;">Acciones</th>
        </tr>
        @foreach ($mesas as $mesa)
        <tr>
            <td>{{ $mesa->id }}</td>
            <td>{{ $mesa->capacidad }}</td>
            <td>{{ $mesa->ubicacion }}</td>
            <td>
                <a href="{{ route('mesa.show', $mesa->id) }}" style="text-decoration: none; color: #007BFF;">Ver</a>
                <a href="{{ route('mesa.edit', $mesa->id) }}" style="text-decoration: none; color: #007BFF;">Editar</a>
            </td>
        </tr>
        @endforeach
    </table>

    <a href="{{ route('mesa.create') }}" style="display: block; margin-top: 10px; text-decoration: none; color: #007BFF;">Agregar Mesa</a>
@endsection
