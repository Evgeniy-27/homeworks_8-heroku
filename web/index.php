<?php
declare(strict_types=1);

session_start();

if (isset($_SESSION['username'])) {
    echo "Привет " . $_SESSION['username'] . "!";
    echo "<p><a href='exit.php'>Перейти на главную страницу</a></p>";

} else {
    include 'index.html';
}


//session_destroy();
