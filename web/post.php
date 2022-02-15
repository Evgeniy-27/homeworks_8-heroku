<?php
declare(strict_types=1);

session_start();

if ($_POST["username"]) {

$_SESSION['username'] = $_POST["username"];
}

//echo "Имя пользователя в сесии: " . $_SESSION['username'] . '<br />';
//echo($_POST["username"]);

header("Location:index.php");