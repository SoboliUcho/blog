<?php
include_once('init.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php header_maker("chyba", "chyba", "", "chyba"); ?>
</head>
<body>
    <?php
    $menu = new Menu("main");
    echo $menu;
    ?>
    <h1>Požadovaná stránka neexistuje</h1>
</body>
</html>