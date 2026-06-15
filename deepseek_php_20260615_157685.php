<?php
$conn = new mysqli('localhost', 'root', 'root');

// Создаем БД
$conn->query("CREATE DATABASE IF NOT EXISTS ekz");

// Выбираем БД
$conn->select_db('ekz');

// Создаем таблицу zapis
$sql = "CREATE TABLE IF NOT EXISTS zapis (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL,
    course VARCHAR(100) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql)) {
    echo "Таблица 'zapis' создана успешно!";
} else {
    echo "Ошибка: " . $conn->error;
}

$conn->close();
?>