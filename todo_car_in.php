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
    <link rel="stylesheet" href="todo_car.css">
    <link rel="js" type="/todo_car.js">
    <!--  <link rel="style_tab"href="/bootstrap-5.2.2/scss/_tables.scss"> -->
    <title>To_do_car</title>
</head>

<body>

    <form action="select.php" method="POST">
        <label for="fromDate">Дата від:</label>
        <input type="date" id="fromDate" name="fromDate">
        <label for="toDate">Дата до:</label>
        <input type="date" id="toDate" name="toDate">
        <button type="submit">Пошук</button>
    </form>


    <div class="scroll-table">
        <table>
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
            <?php
            foreach ($todo_car as $item) {
            ?>
                <tr>
                    <td><?= $item[0] ?></td> <!--id -->
                    <td><?= $item[1] ?></td> <!--Місто -->
                    <td><?= $item[2] ?></td> <!--Компанія-->
                    <td><?= $item[3] ?></td> <!--Адреса-->
                    <td><?= $item[4] ?></td> <!--Хто призначив-->
                    <td><?= $item[5] ?></td> <!--Опис завдання -->
                    <td><?= $item[6] ?></td>
                    <td><?= $item[7] ?></td>
                    <td><?= $item[8] ?></td>
                    <td><?= $item[9] ?></td>
                    <td><?= $item[10] ?></td>
                    <td><?= $item[11] ?></td>
                    <td><a href="todo_car_sabmit.php?id=<?= $item[0] ?>">&#9745;</a></td>
                    <td><a href="todo_car_delete.php?id=<?= $item[0] ?>">&#9746;</a></td>
                    <td><a href="todo_car_moificate.php?id=<?= $item[0] ?>"></a><button id="btn_edit">&#9998;</button></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div><button></button>
    <h2>Дотати завдання</h2>
    <form action="todo_car_db.php" method="post">
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
</body>


</html>