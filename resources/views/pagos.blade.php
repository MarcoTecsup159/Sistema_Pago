<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago de la Reserva</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container"> 
        <div class="pedido">
            <img src="img/logo_olympus.jpg" alt="Logo">
            <h1>Pago de la Reserva</h1>
            <form action="{{ route('pago') }}" method="post" enctype="multipart/form-data">
            @csrf
            <table>
                <tr>
                    <th>RESERVA</th>
                    <th>HORAS</th>
                    <th>SUBTOTAL</th>
                </tr>
                <tr>
                    <td>Cancha 1</td>
                    <th>1</th>
                    <td>S/. 40</td>
                </tr>
                <tr>
                    <td>Subtotal</td>
                    <th>1</th>
                    <td>S/. 40</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <th>1</th>
                    <td>S/. 40</td>
                </tr>
            </table>
            <div id="forma-pago">
                <h4>Paga con Yape</h4>
                <button class="image-button" type="button" onclick="mostrar();">
                    <img src="img/Yape.jpeg" alt="Yape" class="yape">
                </button>
                <p>Método de pago mediante QR, cuando se realice el pago se debe adjuntar el comprobante.</p>
            </div>
        </div>

        <div id="qr-section">
            <img src="img/QR.jpeg" alt="QR Code" class="QR">
            <div class="qr-info">
                <p>Importe a pagar</p>
                <h2> S/. 10</h2>
                <p>Escanea el código QR desde la App Yape y realiza el pago. <br> 
                    Luego sube la captura de pantalla del Yapeo realizado. <br>
                    (es el único comprobante de pago) para completar la solicitud.</p>
                    <br>
                <div class="upload-section">
                    <label for="fileToUpload">Subir imagen del comprobante</label>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                </div>
                <button type="submit">Enviar</button>
            </div>
        </div>
        </form>
    </div>
    <script>
        function mostrar() {
            document.getElementById('qr-section').style.display = 'block';
        }
    </script>
</body>
</html>
