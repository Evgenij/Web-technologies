<?
    $hostname = "localhost"; // название/путь сервера, с MySQL
    $username = "root";
    $password = "root"; // пароль пользователя
    $dbName = "posts"; // название базы данных

    /* Создаем соединение */
    $connect = mysqli_connect($hostname, $username, $password, $dbName);

    if (!$connect) {
        die('Error connect to DataBase');
    }