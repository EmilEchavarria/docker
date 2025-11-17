<?php
$servername = "db";
$username = "root";
$password = "rootpass";
$database = "practica";

$conn = new mysqli($servername, $username, $password, $database);

$conexionExitosa = true;

if ($conn->connect_error) {
    $conexionExitosa = false;
    $mensaje = "❌ Error de conexión: " . $conn->connect_error;
} else {
    $mensaje = "✔ Conexión a MySQL exitosa";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 7 - Docker</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Segoe UI", Tahoma, sans-serif;
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .card {
            background: rgba(255, 255, 255, 0.12);
            padding: 35px;
            border-radius: 16px;
            width: 90%;
            max-width: 420px;
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.25);
            text-align: center;
        }

        h1 {
            font-size: 28px;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .status {
            padding: 12px;
            border-radius: 8px;
            margin-top: 15px;
            font-size: 18px;
            font-weight: 600;
        }

        .ok {
            background: #198754;
        }

        .error {
            background: #dc3545;
        }

        small {
            margin-top: 15px;
            display: block;
            opacity: 0.7;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Hola Mundo desde Docker 🐳</h1>

        <div class="status <?php echo $conexionExitosa ? 'ok' : 'error'; ?>">
            <?php echo $mensaje; ?>
        </div>

        <small>Practica 7 - Web App + MySQL</small>
    </div>
</body>
</html>
<?php
$conn->close();
?>
