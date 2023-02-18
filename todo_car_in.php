<?php
require_once "./todo_config.php";
$todo_car = mysqli_query($connect, "SELECT * FROM `todo_car`");
$todo_car = mysqli_fetch_all($todo_car);
//var_dump($todo_car);
//echo($todo_car)


//connection

//Post

/*  $city = $_POST['city'];
    $who = $_POST['who'];
    $task = $_POST['task'];
    $date_start = $_POST['date_start'];
    $date_end = $_POST['date_end'];
    mysqli_query($connect, "INSERT INTO to_do_car (`id`, `city`,`who`,`task`,`date_start`,`date_end`,`submit`) VALUES (NULL,'$city','$who','$task','$date_start','$date_end',NULL)");
 */
//submitted date checkbox
/* $city = $_POST['city'];
$who = $_POST['who'];
$task = $_POST['task'];
$date_start = $_POST['date_start'];
$date_end = $_POST['date_end'];
$id=$_POST['id'];
mysqli_query($connect, "UPDATE `to_do_car` SET `who` = '$who', `task` = '$task', `date_start` = '$date_start', `date_end` = '$date_end', `submit`='$sub_but' WHERE `to_do_car`.`id` =$id ");
 */

$sub_but = date("Y-m-d");
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
                    <td><a href="todo_car_sabmit.php?id=<?=$item[0]?>">&#9745;</a></td>
                </tr>
            <?php
            }
            ?>
        </table>

    </div>
    <h2>Дотати завдання</h2>
    <form action="todo_car_db.php" method="post">
    <input type="hidden" name="id_task" value="<?= $item[0] ?>">
        <p>Місто</p>
        <input type="text" name="city">
        <p>Компанія</p>
        <input type="text" name="company">
        <p>Адреса</p>
        <input type="text" name="adress">
        <p>Хто призначив </p>
        <input type="text" name="who">
        <p>Опис завдання</p>
        <textarea type="text" name="task"></textarea>
        <p>Розмір об'єкту</p>
        <input type="text" name="priority">
        <p>Пріоритет</p>
        <input type="text" name="object_size">
        <p>Що зробити</p>
        <input type="text" name="take_or_away">
        <p>Дата початку</p>
        <input type="date" name="date_start">
        <p>Дата закінчення</p>
        <input type="date" name="date_end">
        <button type="submit">Додати завдання</button>

    </form>
</body>


</html>