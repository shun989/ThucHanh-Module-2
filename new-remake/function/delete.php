<?php

include_once "../scr/DBConect.php";

$database = new DBConect();
$conn = $database->connect();

$id = $_REQUEST['id'];
$sql = "DELETE FROM products WHERE id = '$id'";
$conn->query($sql);

echo "xoa thanh cong";
header('refresh:1,url= ../index.php');