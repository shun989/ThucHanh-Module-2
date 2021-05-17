<?php

include_once "../scr/DBConect.php";

$database = new DBConect();
$conn = $database->connect();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["productName"];
    $type = $_POST["productLine"];
    $price = $_POST["price"];
    $amount = $_POST["amount"];
    $status = $_POST["status"];
    $database = new DBConect();
    $conn = $database->connect();
    $id = $_REQUEST['id'];
    $sql = "UPDATE products SET productName = '$name', productLine = '$type', price = '$price',amount = '$amount',status = $status WHERE id= $id";
    $conn->query($sql);

    echo "thay doi thanh cong";
    header('refresh:1,url= ../index.php');
}