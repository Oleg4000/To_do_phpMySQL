<?php
require_once './todo_config.php';


// Отримання дат з форми
$fromDate = $_POST['fromDate'];
$toDate = $_POST['toDate'];

// Запит до бази даних
//$q = mysqli_query($connect, "SELECT * FROM `todo_car` WHERE `date_start` = '$fromDate' AND `date_end` = '$toDate'");

// Запит до бази даних
$sql = ("SELECT * FROM todo_car WHERE date_start >= '$fromDate' AND date_end <= '$toDate'");

// Виконання запиту до бази даних
$result = $conn->query($sql);

// Вивід результатів запиту
if ($result->num_rows > 0) {
    // Вивід заголовків таблиці
    echo "<table><tr><th>ID</th><th>Місто</th><th>Компанія</th><th>Адреса</th><th>Хто призначив</th><th>Опис завдання</th><th>Розмір об'єкту</th><th>Пріоритет</th><th>Що зробити</th><th>Дата початку</th><th>Дата закінчення</th><th>Дата створення</th></tr>";

    // Вивід даних таблиці
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id_task"] . "</td><td>" . $row["city"] . "</td><td>" . $row["company"] . "</td><td>" . $row["adress"] . "</td><td>" . $row["who"] . "</td><td>" . $row["task"] . "</td><td>" . $row["priority"] . "</td><td>" . $row["object_size"] . "</td><td>" . $row["take_or_away"] . "</td><td>" . $row["date_start"] . "</td><td>" . $row["date_end"] . "</td><td>" . $row["submit_date"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Не знайдено результатів";
}

// Закриття підключення до бази даних
$conn->close();
