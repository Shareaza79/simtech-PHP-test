<?php

//ПРОЦЕДУРНЫЙ
/*Попытка подключения к серверу MySQL. Предполагая, что вы используете MySQL
сервер с настройкой по умолчанию (пользователь root без пароля)*/

$link = mysqli_connect("127.0.0.1", "root", "alohomora", "");

// Проверка подключения
if ($link === false) {
    die("Ошибка: Не можем подключиться. " . mysqli_connect_error());
}
// Распечатать информацию о хосте
echo "Connect Successfully. Host info: " . mysqli_get_host_info($link) . "
";
// Закрыть соединение
// mysqli_close($link);

// ООП
/*Попытка подключения к серверу MySQL. Предполагая, что вы используете MySQL
сервер с настройкой по умолчанию (пользователь root без пароля)*/
/*
$mysqli = new mysqli("localhost", "root", "alohomora", "feedbacktest");
// Check connection
if ($mysqli === false) {
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
// Распечатать информацию о хосте
echo "Ты не пройдешь. Host info: " . $mysqli->host_info . "
";
// Закрыть соединение
$mysqli->close();*/


// PDO
/*try {
    $pdo = new PDO("mysql:host=localhost;dbname=feedbacktest", "root", "alohomora");

    // Установите error mode PDO в исключение
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Распечатать информацию о хосте
    echo "Connect Successfully. Host info: " .
        $pdo->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));
} catch (PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
}
// Закрыть соединение
unset($pdo);
*/
