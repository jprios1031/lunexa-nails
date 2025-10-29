<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo') - LUNEXA NAILS</title>
    <style>
        /* === Fondo animado rosa suave === */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background: linear-gradient(135deg, #ffe4e1, #ffffff);
            background-size: 400% 400%;
            animation: gradientBG 12s ease infinite;
            display: flex;
            flex-direction: column;
        }
p{
    text-content: center;
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

        /* Caja de contenido */
        .login-box {
            background: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 420px;
            box-sizing: border-box;
        }

        /* Formularios */
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-weight: bold;
            color: #555;
        }

        input,
        select,
        button {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 16px;
            box-sizing: border-box;
            transition: 0.3s ease;
        }

        input:focus,
        select:focus {
            outline: none;
            border-color: #ff69b4;
            box-shadow: 0 0 6px rgba(255, 105, 180, 0.3);
        }

        button {
            background: #ff69b4;
            color: white;
            font-weight: bold;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background: #ff1493;
            transform: scale(1.03);
        }

        /* Títulos */
        h1 {
            text-align: center;
            font-size: 2.3em;
            margin-bottom: 5px;
            color: #d63384;
        }

        h3 {
            text-align: center;
            font-size: 1.1em;
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

        /* Responsividad */
        @media (max-width: 600px) {
            .login-box {
                max-width: 90%;
                padding: 20px;
            }

            h1 {
                font-size: 1.8em;
            }

            h3 {
                font-size: 1em;
            }

            input,
            button,
            select {
                font-size: 15px;
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Encabezado -->
        <h1>LUNEXA NAILS</h1>
        <h3>Stefania Osorio</h3>

        <!-- Contenido principal -->
        <div class="login-box">
            @yield('contenido')
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>Manzana 2 Casa 5, Barrio Villa del Carmen, Cuba</p>
        <p>Tel: 3125433947</p>
    </footer>
</body>

</html>
