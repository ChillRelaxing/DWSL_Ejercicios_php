<?php
$productos = [
    ["nombre" => "Camisa 1", "precio" => 10.00, "imagen" => "img/Camisa1.jpg"],
    ["nombre" => "Camisetas 2", "precio" => 20.00, "imagen" => "img/Camisa2.jpg"],
    ["nombre" => "Camisetas 3", "precio" => 30.00, "imagen" => "img/Camisa3.jpg"],
    ["nombre" => "Camisetas 4", "precio" => 40.00, "imagen" => "img/Camisa4.jpg"],
    ["nombre" => "Camisetas 5", "precio" => 50.00, "imagen" => "img/Camisa5.jpg"],

    ["nombre" => "Camisetas 6", "precio" => 20.00, "imagen" => "img/Camisa6.jpg"],
    ["nombre" => "Camisetas 7", "precio" => 30.00, "imagen" => "img/Camisa7.jpg"],
    ["nombre" => "Camisetas 8", "precio" => 15.00, "imagen" => "img/Camisa8.jpg"],
    ["nombre" => "Camisetas 9", "precio" => 25.00, "imagen" => "img/Camisa9.jpg"],
    ["nombre" => "Camisetas 10", "precio" => 30.00, "imagen" => "img/Camisa10.jpg"]


];

$productosHtml = '';
foreach ($productos as $producto) {
    $productosHtml .= "<div class='producto'>";
    $productosHtml .= "<img src='" . htmlspecialchars($producto['imagen']) . "' alt='" . htmlspecialchars($producto['nombre']) . "' class='producto-img'>";
    $productosHtml .= "<h2>" . htmlspecialchars($producto['nombre']) . "</h2>";
    $productosHtml .= "<p>Precio: $" . number_format($producto['precio'], 2) . "</p>";
    $productosHtml .= "</div>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Tienda de Camisetas</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Productos</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
        <div class="search-container">
            <input type="text" placeholder="Buscar productos...">
            <button type="submit">Buscar</button>
        </div>
    </nav>
    <div class="hero-image"></div>
    <h1 style="text-align: center;">Camisetas Anime - Manga</h1>
    <div class="productos-container">
        <?php echo $productosHtml; ?>
    </div>
</body>
<footer>
    <div class="footer-container">
        <div class="footer-logo">
            <h2>Tienda de Camisetas</h2>
        </div>
        <ul class="footer-links">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Productos</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
        <div class="footer-social">
            <a href="https://www.facebook.com/?locale=es_LA" class="social-icon"><img src="img/facebook.png" alt="Facebook"></a>
            <a href="https://x.com/?lang=es" class="social-icon"><img src="img/X.png" alt="Twitter"></a>
            <a href="https://www.instagram.com/?hl=es-es" class="social-icon"><img src="img/instagram.png" alt="Instagram"></a>
        </div>
        <p class="footer-copy">&copy; <?php echo date("Y"); ?> Tienda de Camisetas. Todos los derechos reservados.</p>
    </div>
</footer>
</html>
