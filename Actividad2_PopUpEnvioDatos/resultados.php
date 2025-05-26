<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>¡Resultados de datos!</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="dive2">
        <h1>Resultados</h1>
        <img src="imagen.jpg" alt="Resultado" width="300">

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo "<p><strong>Nombre:</strong> " . htmlspecialchars($_POST["nombre"]) . "</p>";
                echo "<p><strong>Edad:</strong> " . htmlspecialchars($_POST["edad"]) . "</p>";
                echo "<p><strong>Ciudad:</strong> " . htmlspecialchars($_POST["ciudad"]) . "</p>";
                echo "<p><strong>Pasatiempo:</strong> " . htmlspecialchars($_POST["pasatiempo"]) . "</p>";
            }
        ?>

        <h2>¡Bien Hecho!</h2>

        <button onclick="Alert.render()" class="btn">¡Volver a Ingresar!</button>
    </div>

    <div id="popUpOverlay"></div>
    <div id="popUpBox">
        <div id="box">
            <i class="fas fa-question-circle fa-5x"></i>
            <h1>¿Volver a ingresar datos?</h1>
            <div id="closeModal"></div>
        </div>
    </div>

    <script src="app.js"></script>

</body>
</html>
