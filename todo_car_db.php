<?php
require_once './todo_config.php';
include_once "../findId.php";
include_once "../userhost.php";
print_r($_POST);

$city = $_POST['city'];
$company = $_POST['company'];
$adress = $_POST['adress'];
$who = $_POST['who'];
$task = $_POST['task'];
$priority = $_POST['priority'];
$object_size = $_POST['object_size'];
$object_weight = $_POST['object_weight'];
$take_or_away = $_POST['take_or_away'];
$date_start = $_POST['date_start'];
$date_end = $_POST['date_end'];

mysqli_query($connect, "INSERT INTO to_do_car 
(`id`, `city`, `company`, `adress`, `who`, `task`, `priority`, `object_size`,`object_weight`,`take_or_away`, `date_start`, `date_end`, `submit_date`)
VALUES (NULL,'$city','$company','$adress','$who','$task','$priority','$object_size','$object_weight','$take_or_away','$date_start','$date_end',NULL)");


//mail_create_send
$get_email = mysqli_query($connect, "SELECT `name`,`email`  FROM `user` WHERE `id` = '$iduser'");
print_r($get_email);
header('location: todo_car_in.php');
//SELECT `name`,`email`  FROM `user` WHERE `id` = 250;
?>