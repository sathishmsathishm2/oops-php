<?php
require_once('class/Database.php');

$db = new Database();

$res = $db->Query("select * from users");

while($rows = mysqli_fetch_object($res)){
echo $rows->name."</br>";
}

