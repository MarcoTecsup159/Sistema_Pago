<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva Aprobada</title>
    <style>
        /* Incluimos el CSS directamente en el HTML para simplificar */
        .container {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            max-width: 600px;
            margin: auto;
        }
        .header {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            padding: 20px;
            background-color: white;
            border-radius: 0 0 5px 5px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Reserva Aprobada</h1>
        </div>
        <div class="content">
            <p>Estimado/a [Nombre del Cliente],</p>
            <p>Nos complace informarle que su reserva ha sido aprobada.</p>
            <p>Detalles de la reserva:</p>
            <ul>
                <li>Fecha: [Fecha de la Reserva]</li>
                <li>Hora: [Hora de la Reserva]</li>
                <li>Ubicación: [Ubicación de la Reserva]</li>
            </ul>
            <p>¡Gracias por su preferencia!</p>
            <p>Saludos cordiales,</p>
            <p>[Nombre de la Empresa]</p>
        </div>
        <div class="footer">
            <p>&copy; 2024 [Nombre de la Empresa]. Todos los derechos reservados.</p>
        </div>
    </div>
</body>
</html>
