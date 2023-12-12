<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Restaurante UDI</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-size: 100%;
            background-repeat: no-repeat;
           
         }
         
         header {
            background-color: #231e1e;
            color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
            text-align: center;
            display: flex;
            flex-direction: column; /* Cambiado a columna para mejor adaptabilidad */
            align-items: center;
         }
         header h1 {
            font-size: 28px; /* Aumentado el tamaño de la fuente */
         }
         
         nav{
            background-color: #333;
            color: #fff;
            padding: 1px 0;
            text-align: center;
         }
         nav ul {
            list-style-type: none;
            padding: 0;
            background-color: #333;
            text-align: center;
            margin-top: 0;
            width: 100%;
         }
         
         nav ul li {
            display: inline;
            margin: 0 20px; /* Ajustado el margen para reducir el espacio entre elementos */
         }
         
         nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 18px; /* Ajustado el tamaño de la fuente */
            transition: color 0.3s;
         }
         
         
         nav ul li a:hover {
            color: #ffcc00; /* Cambiado el color al pasar el ratón */
         }
         
         
         .welcome-text {
            font-size: 24px;
            color: #fff;
            white-space: nowrap;
            word-spacing: 3px;
            border-left: 1px solid #fff;
            padding-left: 10px;
            text-align: center;
            margin-top: auto; /* Ajustado para que el margen superior se ajuste automáticamente */
            text-shadow: 2px 2px 4px #000;
         }
         
         /* ... (tu CSS existente) ... */
         .left {
            left: 0;
            top: 70%;
        }
        .center {
            left: 56%;
            top: 70%;
            transform: translateX(-50%);
        }
        .right {
            right: 100;
            top: 70%;
        }
        footer {
            background-color: #1e1616;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
            border-top: 1px solid #988b8b;
            margin-top: auto; /* Ajustado para que el margen superior se ajuste automáticamente */
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
      
    
        .texto{
            color: #fff;
            position: absolute;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            top: 50%;
            left: 80%;
            transform: translate(-50%,-50%);
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
                <h1>Restaurante UDI</h1>
            </header>
            
            <nav>
                <ul>
                    <li><a href="{{ route('login')}}">login</a></li>
                    <li><a href="{{ route('register')}}">register</a></li>                   
                </ul>
            </nav>
           
        
           
           
            <div class="container d-flex">
                <div class="m-auto bg-white p-5 rounded-sm shadow-lg w-form">
                    <img src="{{ asset('images/present.jpg') }}" alt="Descripción de la imagen">
                    <p class="texto">
                        bienvenidos a nuestro Restaurante
                        tendras una expriencia culinaria
                        con los sabores mas deliciosos
                    </p>
                </div>
            </div>
            <footer>
                <p>&copy; 2023 Restaurante UDI</p>
            </footer>
        </div> 
</body>