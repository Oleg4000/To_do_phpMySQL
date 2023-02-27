<?php
require_once './todo_config.php';
$id_task = $_GET['id'];
$id_task = $_POST['id_task'];
$city = $_POST['city'];
$company = $_POST['company'];
$adress = $_POST['adress'];
$task = $_POST['task'];
$priority = $_POST['priority'];
$object_size = $_POST['object_size'];
$object_weight = $_POST['object_weight'];
$take_or_away = $_POST['take_or_away'];
$date_start = $_POST['date_start'];
$date_end = $_POST['date_end'];
$submit_date=$_POST['submit_date'];

$car_edit = mysqli_query($connect,"UPDATE `to_do_car` SET `city` = '$city', `company` = '$company', `adress` = '$adress', `task` = '$task ', `obeject_size` = '$obeject_size', `priority` = '$priority', `take_or_away` = '$take_or_away', `date_start` = '$date_start', `date_end` = '$date_end', `submit_date` = '$submit_date' WHERE `todo_car`.`id` ='$id_task'");

//header('location: todo_car_in.php');
?>