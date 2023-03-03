<?php
require_once "./todo_config.php";
$todo_car = mysqli_query($connect, "SELECT * FROM `todo_car`");
$todo_car = mysqli_fetch_all($todo_car);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="todo_car_copy.css">
    <script src="./todo_modal_modificate.js"></script>
    <title>To_do_car</title>
</head>

<body>

    <form action="select.php" method="POST">
        <div class="input-field">
            <label for="fromDate">Дата початку</label>
            <input type="date" id="fromDate" name="fromDate" />
        </div>
        <div class="input-field">
            <label for="toDate">Дата закінчення</label>
            <input type="date" id="toDate" name="toDate" />
        </div>
        <button type="submit" id="btn_find">Пошук</button>
    </form>


    <div class="table-container">
        <div class="scroll-table">
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Місто</th>
                        <th>Компанія</th>
                        <th>Адреса</th>
                        <th>Хто призначив</th>
                        <th>Опис завдання</th>
                        <th>Розмір обєкта</th>
                        <th>Пріоритет</th>
                        <th>&hArr;</th>
                        <th>Дата початку</th>
                        <th>Дата закінчення</th>
                        <th>Виконано</th>
                        <th>&#10004;</th>
                        <th>&#9746;</th>
                        <th>&#9998;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($todo_car as $item) : ?>
                        <tr>
                            <td><?= $item[0] ?></td>
                            <td><?= $item[1] ?></td>
                            <td><?= $item[2] ?></td>
                            <td><?= $item[3] ?></td>
                            <td><?= $item[4] ?></td>
                            <td><?= $item[5] ?></td>
                            <td><?= $item[6] ?></td>
                            <td><?= $item[7] ?></td>
                            <td><?= $item[8] ?></td>
                            <td><?= $item[9] ?></td>
                            <td><?= $item[10] ?></td>
                            <td><?= $item[11] ?></td>
                            <td><a href="todo_car_sabmit.php?id=<?= $item[0] ?>"><button id="btn_edit">&#9745;</button></a></td>
                            <td><a href="todo_car_delete.php?id=<?= $item[0] ?>"><button id="btn_edit">&#9746;</button></a></td>
                            <td><a href="todo_car_moificate.php?id=<?= $item[0] ?>"><button id="btn_edit">&#9998;</button></a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="container_task">
        <h2>Дотати завдання</h2>
        <form action="todo_car_db.php" method="POST">
            <input type="hidden" name="id_task" value="<?= $item[0] ?>">
            <div class="input-container">
                <div class="input-field">
                    <label for="city">Місто:</label>
                    <input type="text" id="city" name="city" />
                </div>
                <div class="input-field">
                    <label for="company">Компанія</label>
                    <input type="text" id="company" name="company" />
                </div>
                <div class="input-field">
                    <label for="adress">Адреса</label>
                    <input type="text" id="adress" name="adress" />
                </div>
                <div class="input-field">
                    <label for="who">Хто призначив</label>
                    <input type="text" id="who" name="who" />
                </div>
                <div class="input-field">
                    <label for="task">Опис завдання</label>
                    <input type="text" id="task" name="task" />
                </div>
                <div class="input-field">
                    <label for="object_size">Розмір об'єкту</label>
                    <input type="text" id="object_size" name="object_size" />
                </div>
                <div class="input-field">
                    <label for="priority">Пріоритет</label>
                    <input type="text" id="priority" name="priority" />
                </div>
                <div class="input-field">
                    <label for="take_or_away">Що зробити</label>
                    <input type="text" id="take_or_away" name="take_or_away" />
                </div>
                <div class="input-field">
                    <label for="date_start">Дата початку</label>
                    <input type="date" id="date_start" name="date_start" />
                </div>
                <div class="input-field">
                    <label for="date_end">Дата закінчення</label>
                    <input type="date" id="date_end" name="date_end" />
                </div>
                <button type="submit" id="btn2">Додати завдання</button>
        </form>
    </div>


    <div id="myModal" class="modal">
        <div class="modal-content">
            <h2>Редагувати завдання</h2>
            <form id="editTaskForm" action="edit.php" method="POST">
                <input type="hidden" name="id_task" value="<?= $item[0] ?>">
                <p><span>Місто</span></p>
                <input type="text" name="city">
                <p><span>Компанія</span></p>
                <input type="text" name="company">
                <p><span>Адреса</span></p>
                <input type="text" name="adress">
                <p><span>Хто призначив </span></p>
                <input type="text" name="who">
                <p><span>Опис завдання</span></p>
                <textarea type="text" name="task"></textarea>
                <p><span>Розмір об'єкту</span></p>
                <input type="text" name="object_size">
                <p><span>Пріоритет</span></p>
                <input type="text" name="priority">
                <p><span>Що зробити</span></p>
                <input type="text" name="take_or_away">
                <p><span>Дата початку</span></p>
                <input type="date" name="date_start">
                <p><span>Дата закінчення</span></p>
                <input type="date" name="date_end">
                <button type="submit">Додати завдання</button>
            </form>
        </div>
    </div>



</body>


</html>