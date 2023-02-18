<?php
//$connect = mysqli_connect('srvservice32','ODW_UA_EDV','ODW_UA_EDV','ODW_TEST');  //for odw db
$connect =mysqli_connect('localhost', 'user','','to_do_car');
if(!$connect)
{
    die("Not connect");
}
?>