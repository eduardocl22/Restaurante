@extends('layouts.app')

@section('title', 'Crear Reserva')

@section('content')
    <header style="background-color: #007BFF; color: #fff; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); padding: 10px 0; text-align: center;">
        <h1 style="font-size: 24px;">Crear Reserva</h1>
    </header>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #007BFF;
            color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 10px 0;
            text-align: center;
        }
        header h1 {
            font-size: 24px;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            color: #fff;
            background-color: #007BFF;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Crear Reserva</h1>
    </header>

    <div class="container">
        <h1>Crear Reserva</h1>

        <form method="POST" action="{{ route('reservation.store') }}">
            @csrf

            <div class="form-group">
                <label for="customer_id">Cliente:</label>
                <input name="customer_id" class="form-control" required>
        
                
            </div>

            <div class="form-group">
                <label for="mesa_id">Mesa:</label>
                <input name="mesa_id" class="form-control" required>
                   
                </select>
            </div>

            <div class="form-group">
                <label for="FechaReserva">Fecha de Reserva:</label>
                <input type="date" name="FechaReserva" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="NumeroPersonas">Número de Personas:</label>
                <input type="number" name="NumeroPersonas" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="Activo">Estado activo:</label>
                <select name="Activo" id="Activo">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>
            </div>

            <button type="submit" class="btn">Crear Reserva</button>
        </form>
    </div>
@endsection
