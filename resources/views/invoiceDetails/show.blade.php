<!-- resources/views/show-invoice-details.blade.php -->

@extends('layouts.app')

@section('title', 'Detalles de Factura')

@section('content')
    <div class="container">
        <h1 style="text-align: center; margin-bottom: 20px;">Detalles de Factura</h1>

        <p><strong>Order ID:</strong> {{ $invoiceDetail->OrderID }}</p>
        <p><strong>Plato ID:</strong> {{ $invoiceDetail->PlatoID }}</p>
        <p><strong>Cantidad:</strong> {{ $invoiceDetail->Cantidad }}</p>
        <p><strong>Precio Unitario:</strong> {{ $invoiceDetail->PrecioUnitario }}</p>

        <div style="margin-top: 20px;">
            <a href="{{ route('invoiceDetails.index') }}" class="btn btn-primary">Volver a la Lista de Detalles de Factura</a>
        </div>
    </div>
@endsection
