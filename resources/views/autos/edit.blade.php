<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Auto</title>
    <style>
        /* Estilo general del cuerpo */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        /* Estilo para el contenedor del formulario */
        .form-container {
            background-color: white;
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        /* Estilo para las etiquetas y los campos de entrada */
        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-size: 16px;
            color: #333;
            margin-bottom: 5px;
            display: block;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            background-color: #f9f9f9;
        }

        .form-control:focus {
            border-color: #ffc107;
            background-color: #fff;
            outline: none;
        }

        /* Estilo para el botón de submit */
        .btn-warning {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #ffc107;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-warning:hover {
            background-color: #e0a800;
        }

        /* Estilo para el enlace "Volver a la Lista" */
        .back-link {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }

        .back-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h1>Editar Auto</h1>
        
        <!-- Volver a la lista de autos -->
        <a href="{{ route('autos.index') }}" class="back-link">Volver a la Lista</a>
        
        <!-- Formulario de edición -->
        <form action="{{ route('autos.update', $auto->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="marca">Marca:</label>
                <input type="text" id="marca" name="marca" class="form-control" value="{{ $auto->marca }}" required>
            </div>

            <div class="form-group">
                <label for="modelo">Modelo:</label>
                <input type="text" id="modelo" name="modelo" class="form-control" value="{{ $auto->modelo }}" required>
            </div>

            <div class="form-group">
                <label for="anio">Año:</label>
                <input type="number" id="anio" name="anio" class="form-control" value="{{ $auto->anio }}" required>
            </div>

            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="number" step="0.01" id="precio" name="precio" class="form-control" value="{{ $auto->precio }}" required>
            </div>

            <button type="submit" class="btn-warning">Actualizar Auto</button>
        </form>
    </div>

</body>
</html>
