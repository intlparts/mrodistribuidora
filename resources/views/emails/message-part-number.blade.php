<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Email desde MRODistribuidora</title>
</head>
<body>
    <p>Este correo ha sido enviado desde el formulario de producto en mrodistribuidora.com.</p>
    <p>Estos son los datos que usuario ha enviado:</p>
    <ul>
        <li>Nombre: {{ $data['name'] }}</li>
        <li>Email: {{ $data['email'] }}</li>
        <li>Teléfono: {{ $data['phone'] }}</li>
        <li>Fabricante: {{ $data['manufacturer'] }}</li>
        <li>Número de Parte: {{ $data['part_number'] }}</li>
        <li>Cantidad: {{ $data['quantity'] }}</li>
    </ul>
</body>
</html>