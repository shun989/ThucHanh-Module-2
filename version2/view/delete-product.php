<?php
include_once "../Controller/Product.php";
include_once "../Controller/ProductManager.php";

$index = $_REQUEST['id'];
$productManager = new ProductManager('../data.json');
$productManager->remove($index);
echo "Đã xóa thành công.";
header('refresh:1,url=../index.php');