<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibo de Pago</title>
</head>
<style>
body {
    font-family: Courier;
    margin: 10%;
    display: flex;
    justify-content: center;
    text-align: center;
}

.container {
    margin: 10%;
    width: auto; height: auto;
    background-color: rgb(225, 239, 175);
    border-radius: 2%;
    text-align: center;
}

.container h1 {
    margin: 1%;
}

.container p {
    margin: 2%;
    text-align: left;
}

.container img {
    margin: 5%;
    width: 100px; height: 100px;
    border-radius: 60px;
}

.container h3 {
    margin: 5%;
    text-align: left;
}

table {
    margin:2%;
    width: 100%;
    margin-bottom: 20px;
    text-align: center;
}

.total {
    margin:5%;
    margin-bottom: 5%;
    text-align: right ;
}
</style>
<body>
    <div class="container">
        <img src="img/logo_olympus.jpg" alt="Logo"><h1>Recibo de Pago</h1>
        <h3>DATOS PERSONALES</h3>
        <p>Nombre: {{ $userData->name }}</p>
        <p>DNI: </p>
        <p>Correo: {{ $userData->email }}</p>

        <h3>PAGO DE LA RESERVA</h3>
        <p>N° de Recibo: {{ $factura->id }}</p>
        <p>Forma de Pago: Yape</p>
        <p>Fecha: {{ now() }}</p>

        <div class="section-title"></div>
        <table>
            <tr>
                <th>Reserva</th>
                <th>Horas</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>Cancha 1</td>
                <td>1</td>
                <td>S/. 40</td>
            </tr>
            <tr>
                <td>Subtotal</td>
                <td>1</td>
                <td>S/. 40</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>1</td>
                <td>S/. 40</td>
            </tr>
        </table>
        <div class="total">
            <strong>TOTAL A PAGAR :</strong> S/. {{ $factura->monto_pagado }}
        </div>
    </div>
</body>
</html>

