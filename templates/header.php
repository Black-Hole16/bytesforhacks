
<?php
// templates/header.php

// Definir el título de la página.
// Si la variable $pageTitle NO ha sido definida antes (en public/index.php o el router),
// usa un título por defecto. Esto permite que cada página tenga su propio título.
$pageTitle = isset($pageTitle) ? $pageTitle : "Sitio Web Híbrido - PHP Puro";

// Definir la descripción de la página (para SEO)
$pageDescription = isset($pageDescription) ? $pageDescription : "Un sitio web híbrido creado con PHP puro para blog y páginas estáticas.";

// Definir palabras clave (keywords)
$pageKeywords = isset($pageKeywords) ? $pageKeywords : "PHP, blog, desarrollo web, sitio estático, XAMPP, tutorial";

// Puedes incluir otros metadatos o enlaces condicionalmente
// Por ejemplo, si necesitas un CSS específico para una página:
// $customCss = isset($customCss) ? '<link rel="stylesheet" href="' . htmlspecialchars($customCss) . '">' : '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> <title><?php echo htmlspecialchars($pageTitle); ?></title>

    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">

    <meta name="keywords" content="<?php echo htmlspecialchars($pageKeywords); ?>">

    <link rel="icon" href="/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <?php // echo $customCss; // Si se define $customCss en la página que incluye este header ?>

    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta property="og:image" content="http://tuproyecto.local/img/social-share.jpg"> <meta property="og:url" content="http://tuproyecto.local<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
    <meta property="og:type" content="website"> <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@tu_usuario_twitter"> <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="twitter:image" content="http://tuproyecto.local/img/twitter-share.jpg"> </head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="/">Mi Blog PHP</a>
            </div>
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/blog">Blog</a></li>
                <li><a href="/pages/about.html">Acerca de</a></li>
                <li><a href="/pages/contact.html">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <main>