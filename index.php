<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 2 PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #3a0098a6;
            padding: 50px;
            border-radius: 10px;
        }
        h1 {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-size:20px;
        }
        input, select, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #6800f9;
            border-radius: 5px;
            font-size:20px;
        }
        button {
            background-color: #24015b;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size:25px;
        }
        button:hover {
            background-color: #6200ff;
        }
        .result {
            padding: 10px;
            font-size:20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <h1>Conversor de Números</h1>

            <label for="decimal">Ingresa un Numero Decimal:</label>
            <input type="number" id="decimal" name="decimal">

            <label for="conversion">Selecciona el tipo de conversion:</label>
            <select id="conversion" name="conversion" required>
                <option value="binario">Decimal a Binario</option>
                <option value="octal">Decimal a Octal</option>
                <option value="hexadecimal">Decimal a Hexadecimal</option>
            </select>

            <button type="submit" class="btn btn-primary" name="convertir">Convertir</button>
        </form>

        <?php
        if(isset($_POST['convertir']))
        {
            // Obtener el valor decimal ingresado por el usuario
            $decimal = intval($_POST["decimal"]);  // Convierte el valor ingresado a un entero
            // Obtener el tipo de conversión seleccionado por el usuario
            $conversion = $_POST["conversion"];
            $resultado = "";

            // Realizar la conversión según la opción seleccionada
            switch ($conversion) {
                case "binario":
                    $resultado = decbin($decimal);  // Convierte de decimal a binario
                    break;
                case "octal":
                    $resultado = decoct($decimal);  // Convierte de decimal a octal
                    break;
                case "hexadecimal":
                    $resultado = dechex($decimal);  // Convierte de decimal a hexadecimal
                    break;
                default:
                    $resultado = "Opción no válida.";  // Maneja cualquier opción no válida
                    break;
            }

            // Mostrar el resultado de la conversión
            echo "<div class='result'>";
            echo "<h2>Resultado de la Conversión</h2>";
            echo "<p>El valor en $conversion es: $resultado</p>";
            echo "</div>";
        }
        ?>


    </div>
</body>
</html>