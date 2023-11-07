<?php
if (isset($_POST['calificacion'])) {
    $calificacion = floatval($_POST['calificacion']);

    if ($calificacion >= 9 && $calificacion <= 10) {
        $mensaje = "Excelente";
    } elseif ($calificacion >= 7 && $calificacion < 9) {
        $mensaje = "Buen trabajo";
    } elseif ($calificacion >= 6 && $calificacion < 7) {
        $mensaje = "Aprobado";
    } elseif ($calificacion >= 0 && $calificacion < 6) {
        $mensaje = "Reprobado";
    } else {
        $mensaje = "Calificación fuera de rango";
    }
} else {
    $mensaje = "Por favor, ingrese una calificación.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <title>Resultado</title>
</head>
<body>
    <div class="container">
        <h1>Resultado</h1>
        <p><?php echo $mensaje; ?></p>
        <a href="index.html">Volver</a>
    </div>
</body>
</html>
