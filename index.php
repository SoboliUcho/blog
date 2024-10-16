<?php
include_once('init.php');
?>

<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php header_maker("index", "", "", "index"); ?>
</head>

<body>
    <?php
    $menu = new Menu("main");
    echo $menu;
    ?>
    <div id="Menu">
        <!-- <div class="login">
            <div id="username">
            <a href="login.php">name</a>
            </div>
            <div>
                odhlásit se
            </div>
        </div>
        <div class='menu' id='menu_name'>
            <div class="menu_item">
                <div class="menu_item_name">
                    nazev
                </div>
                <div class="subitems">
                    <div class="subitem">
                        <a href="link">subnazev</a>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</body>

</html>