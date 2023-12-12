<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstreap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta charset="UTF-8">
    <title>Restaurante UDI</title>
  
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #272222;
            color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 10px 0;
            text-align: center;
        }
        header h1 {
            font-size: 24px;
        }
        nav {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin: 0 20px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3;
        }
         
        nav ul li a:hover {
            color: #ffcc00; /* Cambiado el color al pasar el ratón */
        }
       
        section h2 {
            font-size: 20px;
        }
        footer {
            background-color: #272222;
            
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
            border-top: 1px solid #ff3333;
            margin-top: auto; /* Añadido para evitar que el contenido flote sobre el pie de página */

        }
       
        .btn-dark {
            background-color: #333; /* Puedes cambiar el color a tu elección */
            color: #fff; /* Puedes cambiar el color del texto a tu elección */
        }

        /* Si deseas reducir aún más el tamaño del botón, puedes ajustar el padding */
        .btn-sm {
            padding: 0.2rem 0.5rem; /* Puedes ajustar estos valores según tus preferencias */
        }
        
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            border: none;
            text-align: center;
            text-decoration: none;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
            position: absolute;
            right: 50px;
            top: 15px;
        }
        .main-container {
            position: 10px;
        }

        .main-container img {
            width: 100%;
            max-height: 400px;
        }

        
    </style>
</head>
<body>
 <div class="main-container">
    <header>
        <h1>Bienvenido a Mi Restaurante</h1>
    </header>

    <nav>
        <ul>
            <li><a href="{{ route('dish.index') }}">Platos</a></li>
            <li><a href="{{ route('customers.react') }}">Platos con React</a></li>
            <li><a href="{{ route('customers.index') }}">Clientes</a></li>
            <li><a href="{{ route('invoiceDetails.index') }}"> Facturas</a></li>
            <li><a href="{{ route('orders.index') }}"> Órdenes</a></li>
            <li><a href="{{ route('reservation.index') }}"> Reservaciones</a></li>
            <li><a href="{{ route('mesa.index') }}">Ir a la lista de mesas</a></li>
        </ul>
    </nav>


    <footer>
        <p>&copy; {{ date("Y") }} Restaurante UDI</p>
    </footer>
    <div class="container d-flex">
        <div class="m-auto bg-white p-5 rounded-sm shadow-lg w-form">
            <img src="{{ asset('images/admin.jpg') }}" alt="Descripción de la imagen">
            <form method="POST" action="{{ route('signOut')}}">
                @csrf
                <button type="submit" class="btn btn-dark btn-sm btn-block mt-3">Cerrar sesión</button>
            </form>
        </div>
    </div>
</div>
   <!-- ... (tus scripts existentes) ... -->
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


</body>
</html>
