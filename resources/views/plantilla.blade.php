<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo') - LUNEXA NAILS</title>
    <style>
        /* === Transición de fondo suave: rosa claro → blanco === */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background: linear-gradient(135deg, #ffe4e1, #ffffff);
            background-size: 400% 400%;
            animation: gradientBG 12s ease infinite;
            display: flex;
            flex-direction: column;
        }

        @keyframes gradientBG {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* Contenedor principal */
        .container {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        /* Caja de login o contenido */
        .login-box {
            background: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            max-width: 500px;
            width: 100%;
        }

        input,
        select,
        button {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        button {
            background: #ff69b4;
            /* rosa */
            color: white;
            border: none;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #ff1493;
            /* rosa intenso al pasar el mouse */
            color: white;
        }

        /* Títulos */
        h1 {
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 5px;
            color: #d63384;
            /* rosa oscuro */
        }

        h3 {
            text-align: center;
            font-size: 1.2em;
            margin-bottom: 20px;
            color: #555;
        }

        /* Footer */
        footer {
            background: rgba(0, 0, 0, 0.9);
            color: white;
            text-align: center;
            padding: 15px;
            font-size: 14px;
        }

        footer p {
            margin: 5px 0;
        }

        /* Responsivo */
        @media (max-width: 600px) {
            h1 {
                font-size: 2em;
            }

            h3 {
                font-size: 1em;
            }

            .login-box {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Encabezado con nombre y subtítulo -->
        <h1>LUNEXA NAILS</h1>
        <h3>Stefania Osorio</h3>

        <!-- Contenido principal -->
        <div class="login-box">
            @yield('contenido')
        </div>
    </div>

    <!-- Footer con información -->
    <footer>
        <p>Manzana 2 Casa 5, Barrio Villa del Carmen, Cuba</p>
        <p>Tel: 3125433947</p>
    </footer>
</body>

</html>
