@extends('layouts.app')

@section('title', 'Listado de Órdenes')

@section('content')
    <header style="background-color: #000; color: #fff; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); padding: 10px 0; text-align: center;">
        <h1 style="font-size: 24px;">Listado de Órdenes</h1>
    </header>

    <div class="container" style="max-width: 800px; margin: 20px auto; padding: 20px; background-color: #fff; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
        <h1>Listado de Órdenes</h1>

        <a href="{{ route('orders.create') }}" class="btn btn-primary">Crear Nueva Orden</a>

        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Número de Personas</th>
                    <th>Fecha de Orden</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->customer->Nombre }}</td>
                        <td>{{ $order->NumeroPersonas }}</td>
                        <td>{{ $order->FechaOrden }}</td>
                        <td>
                            <a href="{{ route('orders.show', $order->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
