<?php
require_once './todo_config.php';
print_r($_POST);

$city = $_POST['city'];
$company = $_POST['company'];
$adress = $_POST['adress'];
$who = $_POST['who'];
$task = $_POST['task'];
$priority = $_POST['priority'];
$object_size = $_POST['object_size'];
$take_or_away = $_POST['take_or_away'];
$date_start = $_POST['date_start'];
$date_end = $_POST['date_end'];

mysqli_query($connect, "INSERT INTO todo_car (`id_task`, `city`, `company`, `adress`, `who`, `task`, `priority`, `object_size`,`take_or_away`, `date_start`, `date_end`, `submit_date`) VALUES (NULL,'$city','$company','$adress','$who','$task','$priority','$object_size','$take_or_away','$date_start','$date_end',NULL)");
header('location: todo_car_in.php');



//INSERT INTO `todo_car` (`id_task`, `city`, `company`, `adress`, `who`, `task`, `object_size`, `priority`, `take_or_away`, `date_start`, `date_end`, `submit_date`)
// $q="INSERT INTO to_do_car (`id`, `city`,`who`,`task`,`date_start`,`date_end`,`submit`) VALUES (NULL,'$city','$who','$task','$date_start','$date_end',NULL)";
// $result = $connect->query($q);
// $strInitiatorList = '';
// if ($result) {
//     $result->free();
//     $jsonResult['EmailReciepients'] = array('result' => 'location:todo_car_in.php');
//     header('location:todo_car_in.php');
// } else {
//     $jsonResult['EmailReciepients'] = array('error' => "MySQL error: $query<br>" . $db->error);
// }
// echo json_encode($jsonResult);
// die();

//submitted date checkbox
