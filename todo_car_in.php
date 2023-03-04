<?php
include_once "../findId.php";
include_once "../userhost.php";
require_once "./todo_config.php";
$todo_car = mysqli_query($connect, "SELECT `id`, `city`, `company`, `adress`, `who`, `task`, `object_size`, `object_weight`, `priority`, `take_or_away`, `date_start`, `date_end`, `submit_date` FROM `to_do_car` WHERE submit_date IS NULL");
$todo_car = mysqli_fetch_all($todo_car);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="todo_car.css">
    <script src="./todo_modal_modificate.js"></script>
    <title>To_do_car</title>
</head>

<body>

    <form action="select.php" method="POST">
        <div class="search_container">
            <div class="input-container">
                <div class="input-field">
                    <label for="fromDate">Дата початку</label>
                    <input type="date" id="fromDate" name="fromDate" />
                </div>
                <div class="input-field">
                    <label for="toDate">Дата закінчення</label>
                    <input type="date" id="toDate" name="toDate" />
                </div>
                <button type="submit" id="btn_find">Пошук</button>
            </div>
        </div>
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
                <th>Вага об'єкта</th>
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
                    <td><?= $item[5] ?></td> <!--Опис завдання-->
                    <td><?= $item[6] ?></td> <!--Розмір обєкта-->
                    <td><?= $item[7] ?></td> <!--Вага об'єкта-->
                    <td><?= $item[8] ?></td> <!--Пріоритет-->
                    <td><?= $item[9] ?></td> <!--Що зробити?-->
                    <td><?= $item[10] ?></td> <!--Дата початку-->
                    <td><?= $item[11] ?></td> <!--Дата закінчення-->
                    <td><?= $item[12] ?></td> <!--Виконано submit-->
                    <td><a href="todo_car_sabmit.php?id=<?= $item[0] ?>"><button id="sabmit">&#9745;</button></a></td>
                    <td><a href="todo_car_delete.php?id=<?= $item[0] ?>"><button id="delete">&#9746;</button></a></td>
                    <td><a href="todo_car_edit.php?id=<?= $item[0] ?>"><button id="openEditFormBtn">&#9998;</button></a></td>
                    
                </tr>
            <?php
            }
            ?>
        </table>
    </div>

    <h2>Дотати завдання</h2>
    <form action="todo_car_db.php" method="POST">
        <input type="hidden" name="id" value="<?= $item[0] ?>">
        <div class="input-container">
            <div class="input-field">
                <label for="city">Місто:</label>
                <input type="text" id="city" name="city" required/>
            </div>
            <div class="input-field">
                <label for="company">Компанія</label>
                <input type="text" id="company" name="company" required/>
            </div>
            <div class="input-field">
                <label for="adress">Адреса</label>
                <input type="text" id="adress" name="adress" required/>
            </div>
            <div class="input-field">
                <label for="who">Хто призначив</label>
                <input type="text" id="who" name="who" value="<? echo $username //userhost.php ?>" required/>
            </div>
            <div class="input-field">
                <label for="task">Опис завдання</label>
                <input type="text" id="task" name="task" required />
            </div>
            <div class="input-field">
                <label for="object_size">Розмір об'єкта (ширина-висота)</label>
                <input type="text" id="object_size" name="object_size" required/>
            </div>
            <div class="input-field">
                <label for="object_weight">Вага об'єкту в кг</label>
                <input type="text" id="object_weight" name="object_weight" required/>
            </div>
            <div class="input-field">
                <label for="priority">Пріоритет</label>
                <input type="text" id="priority" name="priority" required/>
            </div>
            <div class="input-field">
                <label for="take_or_away">Що зробити</label>
                <input type="text" id="take_or_away" name="take_or_away" required/>
            </div>
            <div class="input-field">
                <label for="date_start">Дата початку</label>
                <input type="date" id="date_start" name="date_start" required/>
            </div>
            <div class="input-field">
                <label for="date_end">Дата закінчення</label>
                <input type="date" id="date_end" name="date_end" required/>
            </div>
            <button type="submit" id="btn2">Додати завдання</button>
    </form>
    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20744.090613643544!2d24.1336363!3d49.46540065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473a8a194b572bd9%3A0xf9968e25ca493ed9!2sPodorozhnyk!5e0!3m2!1sen!2sua!4v1677499933574!5m2!1sen!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
    
    </body>


</html>