<?php
session_start();
$_SESSION["User_ID"] = 1;

spl_autoload_register(function ($class) {
    include_once("classes/$class.php");
});

// include_once('database.php');
include_once('log.php');
include_once('header.php');
// include_once('menu.php');
// include_once('user.php');

Db::connect($databese['host'], $databese['database'], $databese['user'], $databese['password']);
function debugTimestamp() {
    echo(strtotime(date('his')));
}
