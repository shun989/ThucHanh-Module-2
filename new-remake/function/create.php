<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once "../scr/DBConect.php";
    include_once "../scr/BaseController.php";
    $dbConnect = new DBConect();
    $conn = $dbConnect->connect();

    $productName = $_POST["productName"];
    $productLine = $_POST["productLine"];
    $price = $_POST["price"];
    $amount = $_POST["amount"];
    $status = $_POST["status"];

    $sql = "INSERT INTO products (productName,productLine,price,amount,status) VALUES (
            '$productName', '$productLine', '$price', '$amount', '$status')";
    $conn->query($sql);

    echo "them thanh cong";
    header('refresh:1,url= ../index.php');
}
$conn = null;


