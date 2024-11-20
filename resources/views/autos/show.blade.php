<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Auto</title>
    <style>
        /* Estilo para la tabla */
        .table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-family: 'Arial', sans-serif;
        }

        .table thead {
            background-color: #333;
            color: #fff;
        }

        .table th, .table td {
            padding: 12px 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table tbody tr:hover {
            background-color: #ddd;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Detalles del Auto</h1>
    <a href="{{ route('autos.index') }}">Volver a la Lista</a><br><br>

    <p><strong>Marca:</strong> {{ $auto->marca }}</p>
    <p><strong>Modelo:</strong> {{ $auto->modelo }}</p>
    <p><strong>Año:</strong> {{ $auto->anio }}</p>
    <p><strong>Precio:</strong> ${{ number_format($auto->precio, 2) }}</p>
</body>
</html>
