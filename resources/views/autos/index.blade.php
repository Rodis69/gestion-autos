<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Autos</title>
    <style>
        /* Estilo general para el cuerpo */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        /* Encabezado */
        h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        /* Estilo general para la tabla */
        .table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Estilos para los encabezados */
        .table thead {
            background-color: #333;
            color: #fff;
        }

        .table th, .table td {
            padding: 12px 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        /* Filas alternas para darle un aspecto más limpio */
        .table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Efectos al pasar el mouse */
        .table tbody tr:hover {
            background-color: #f1f1f1;
            cursor: pointer;
        }

        /* Estilo para los botones de acción */
        .btn {
            padding: 6px 12px;
            font-size: 14px;
            text-decoration: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
            border: none;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        /* Estilo para el enlace de crear nuevo auto */
        a {
            text-decoration: none;
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border-radius: 4px;
            display: inline-block;
            margin-bottom: 20px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #218838;
        }

    </style>
</head>
<body>
    <h1>Lista de Autos</h1>
    <center>
    <a href="{{ route('autos.create') }}">Crear Nuevo Auto</a></center>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Año</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($autos as $auto)
            <tr>
                <td>{{ $auto->id }}</td>
                <td>{{ $auto->marca }}</td>
                <td>{{ $auto->modelo }}</td>
                <td>{{ $auto->anio }}</td>
                <td>{{ $auto->precio }}</td>
                <td>
                    <a href="{{ route('autos.edit', $auto->id) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('autos.destroy', $auto->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
