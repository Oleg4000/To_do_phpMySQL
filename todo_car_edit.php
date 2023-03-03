<?php
require_once './todo_config.php';
include_once "../findId.php";
include_once "../userhost.php";
print_r($_GET);
$id_task = $_GET['id'];

$car_edit = mysqli_query($connect, "SELECT * FROM `to_do_car` WHERE `id`='$id_task'");
$car_edit = mysqli_fetch_assoc($car_edit);
print_r($car_edit);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="todo_car.css">
    <title>Edit</title>
</head>

<body>
    <div id="editForm" class="modal">
        <h2>Редагувати завдання</h2>
        <form id="editTaskForm" action="edit.php" method="POST">
            <input type="hidden" name="id_task" value="<?echo $id_task ?>">
            <div class="input-container">
                <div class="input-field">
                    <label for="city">Місто</label>
                    <input type="text" id="city" name="city" value="<?= $car_edit['city']?>">
                </div>
                <div class="input-field">
                    <label for="company">Компанія</label>
                    <input type="text" id="company" name="company" value="<?= $car_edit['company']?>">
                </div>
                <div class="input-field">
                    <label for="adress">Адреса</label>
                    <input type="text" id="adress" name="adress" value="<?= $car_edit['adress'] ?>">
                </div>
                <div class="input-field">
                    <label for="who">Хто призначив</label>
                    <input type="text" id="who" name="who" value="<?echo $username?>"/>
                </div>
                <div class="input-field">
                    <label for="task">Опис завдання</label>
                    <input type="text" id="task" name="task" value="<?= $car_edit['task'] ?>">
                </div>
                <div class="input-field">
                    <label for="object_size">Розмір об'єкта (ширина-висота)</label>
                    <input type="text" id="object_size" name="object_size" value="<?= $car_edit['object_size'] ?>">
                </div>
                <div class="input-field">
                <label for="object_weight">Вага об'єкту в кг</label>
                <input type="text" id="object_weight" name="object_weight" value="<?= $car_edit['object_weight'] ?>"/>
            </div>
                <div class="input-field">
                    <label for="priority">Пріоритет</label>
                    <input type="text" id="priority" name="priority" value="<?= $car_edit['priority'] ?>">
                </div>
                <div class="input-field">
                    <label for="take_or_away">Що зробити</label>
                    <input type="text" id="take_or_away" name="take_or_away" value="<?= $car_edit['take_or_away'] ?>">
                </div>
                <div class="input-field">
                    <label for="date_start">Дата початку</label>
                    <input type="date" id="date_start" name="date_start" value="<?= $car_edit['date_start'] ?>">
                </div>
                <div class="input-field">
                    <label for="date_end">Дата закінчення</label>
                    <input type="date" id="date_end" name="date_end" value="<?= $car_edit['date_end'] ?>">
                </div>
                <div class="input-field">
                    <label for="submit_date">Дата виконання</label>
                    <input type="date" id="submit_date" name="submit_date" value="<?= $car_edit['submit_date'] ?>">
                </div>
                <button type="submit">Зберегти</button>
        </form>
    </div>
</body>

</html>