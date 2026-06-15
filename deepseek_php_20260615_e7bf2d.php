<?php
// Подключение к БД
$conn = new mysqli('localhost', 'root', 'root', 'ekz');
$conn->set_charset("utf8mb4");

// Проверка подключения
if ($conn->connect_error) {
    echo "error: " . $conn->connect_error;
    exit;
}

// Получаем данные из POST
$name = $conn->real_escape_string($_POST['name'] ?? '');
$phone = $conn->real_escape_string($_POST['phone'] ?? '');
$email = $conn->real_escape_string($_POST['email'] ?? '');
$course = $conn->real_escape_string($_POST['course'] ?? '');

// SQL запрос (ТАБЛИЦА ДОЛЖНА НАЗЫВАТЬСЯ "zapis")
$sql = "INSERT INTO zapis (name, phone, email, course) VALUES ('$name', '$phone', '$email', '$course')";

// Выполнение
if ($conn->query($sql)) {
    echo "success";
} else {
    echo "error: " . $conn->error;
}

$conn->close();
?>