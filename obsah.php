<?php
// Získání aktuální URL
$url = $_SERVER['REQUEST_URI'];

// Extrahování části URL
$page = trim($url, '/');

// Kontrola na základě URL
switch ($page) {
    case 'obsah':
        $content = 'Toto je stránka obsah.';
        break;
    case 'kontakt':
        $content = 'Toto je stránka kontakt.';
        break;
    case 'sluzby':
        $content = 'Toto je stránka služby.';
        break;
    default:
        $content = 'Vítejte na hlavní stránce.';
}

// HTML výstup
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamický obsah</title>
</head>
<body>
    <h1>Moje dynamická stránka</h1>
    <p><?php echo $content; ?></p>
</body>
</html>
