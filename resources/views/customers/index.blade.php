<!-- resources/views/list-customers.blade.php -->

@extends('layouts.app')

@section('title', 'Lista de Clientes')

@section('content')
    <h1 style="text-align: center;">Lista de Clientes</h1>

    <a href="{{ route('customers.create') }}" style="display: block; margin-bottom: 10px; text-decoration: none; color: #3498db; font-weight: bold; border: 1px solid #3498db; padding: 8px 16px; border-radius: 4px; transition: background-color 0.3s, color 0.3s;">Crear Nuevo Cliente</a>

    @if(session('success'))
        <div style="background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 4px; padding: 10px; margin-bottom: 15px;">
            {{ session('success') }}
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Fecha de Registro</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->Nombre }}</td>
                    <td>{{ $customer->Telefono }}</td>
                    <td>{{ $customer->Email }}</td>
                    <td>{{ $customer->FechaRegistro }}</td>
                    <td>
                        <a href="{{ route('customers.show', $customer->id) }}" style="background-color: green; color: white; border: none; padding: 5px 10px; border-radius: 4px; cursor: pointer;">Ver</a>
                        <a href="{{ route('customers.edit', $customer->id) }}" style="background-color: blue color: white; border: none; padding: 5px 10px; border-radius: 4px; cursor: pointer;">Editar</a>
                        <form method="POST" action="{{ route('customers.destroy', $customer->id) }}" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background-color: #d9534f; color: white; border: none; padding: 5px 10px; border-radius: 4px; cursor: pointer;">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
