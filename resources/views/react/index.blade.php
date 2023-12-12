<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Restaurante UDI</title>    
        @viteReactRefresh
        @vite("resources/js/app.js")

    </head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #000;
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
        }
        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        section h2 {
            font-size: 20px;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
        footer p {
            margin: 0;
        }
        .btn-dark {
            background-color: #333; /* Puedes cambiar el color a tu elección */
            color: #fff; /* Puedes cambiar el color del texto a tu elección */
        }

        /* Si deseas reducir aún más el tamaño del botón, puedes ajustar el padding */
        .btn-sm {
            padding: 0.2rem 0.5rem; /* Puedes ajustar estos valores según tus preferencias */
        }
        
       
        
    </style>
            
    <body>
            <div id="root"></div>
    </body>
</html>