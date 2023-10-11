<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["email"];
    $email = $_POST["password"];
    
    // Realizar acciones con los datos recibidos, como guardar en una base de datos o mostrar en pantalla
    echo "Nombre: " . $nombre . "<br>";
    echo "Contraseña: " . $email . "<br>";
} else {
    // Si no se envió una solicitud POST, redirigir o mostrar un mensaje de error.
    echo "Error: Acceso no permitido.";
}
?>

<html>
<head>
<title>Bienvenidos</title>
<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css"
crossorigin="anonymous">
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<link href="vendor/fontawesome-free-5.15.3-web/css/all.css"
rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<style>
</style>
</head>
<body class="bg-image">
<div class="row">
<div class="col-md-12 text-center mt-5">
<h1>Bienvenida a la aplicación, <?php echo $nombre;?>!</h1>
</div>

</body>
</html>