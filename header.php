<?php
function header_maker($page_name, $title, $aditional = "" , $description = "", $keywords = "", $image = "", $robots = "index, follow", $revisit = "7 days")
{
    if (!isset($description)) {
        $description = $title;
    }
    if (!isset($keywords)) {
        $keywords = $title;
    }
    if (!isset($image)) {
        $image = "/img/logo.png";
    }
    // echo "<!DOCTYPE html>";
    echo "<html lang='cs'>";
    // echo "<head>";
    // echo "<meta charset='UTF-8'>";
    // echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<meta name='author' content='Sobolí ucho'>";
    echo "<meta name='description' content='$description'>";
    echo "<meta name='keywords' content='$description'>";
    echo "<meta name='robots' content='$robots'>";
    echo "<meta name='revisit-after'' content='$revisit'>";
    echo "<meta property='og:title' content='$title'>";
    echo "<meta property='og:description' content='$description'>";
    echo "<meta property='og:image' content='$image'>";
    echo "<meta property='og:site_name' content=''>"; // doplnit
    echo "<meta property='og:type' content='website'>";
    echo "<meta property='og:locale' content='cs_CZ'>";
    echo "<meta property='og:locale:alternate' content='en_US'>";

    echo "<link rel='icon' href='img/icon.ico' type='image/x-icon'>";
    echo '<link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css">';

    echo "<link rel='stylesheet' href='css/$page_name.css'>";
    echo $aditional;
    echo "<script src='$page_name.js'></script>";
    echo "<title>$title</title>";
    // echo "</head>";
}