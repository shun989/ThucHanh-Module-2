<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    include_once "../Controller/Product.php";
    include_once "../Controller/ProductManager.php";
    $productManager = new ProductManager('../data.json');
    $product = $productManager->getProductById($_GET['id']);

    $name = $_REQUEST['name'];
    $productLine = $_REQUEST['productLine'];
    $price = $_REQUEST['price'];
    $amount = $_REQUEST['amount'];
    $date = $_REQUEST['date'];
    $status = $_REQUEST['status'];

    $data = $productManager->loadDataFile();

        foreach ($data as $item) {
            if ($item->id == $_GET['id']) {
                $item->name = $name;
                $item->productLine = $productLine;
                $item->price = $price;
                $item->amount = $amount;
                $item->date = $date;
                $item->status = $status;
            }
        }
    $productManager->saveDataToFile($data);
    echo "Thay đổi thông tin thành công.";
    header('refresh:2,url=../index.php');

}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>

    form{
        display: block;
        width: 600px;
        margin: 10px 0;
        border: 1px solid;
        padding: 15px;
    }
    input {
        width: 450px;
        height: 25px;
    }
    a{
        text-decoration: none;
    }


</style>
<body>
<h1 style="color: blue">Chỉnh sửa mặt hàng</h1>
<a href="../index.php"><button style="width: 100px;margin-bottom: 20px">Hủy</button></a><br/>
<form action="" method="post">
    <table>
        <tr>
            <td>Tên hàng</td>
            <td>
                <input type="text" name="name">
            </td>
        </tr>
        <tr>
            <td>Loại hàng</td>
            <td>
                <input type="text" name="productLine">
            </td>
        </tr>
        <tr>
            <td>Giá</td>
            <td>
                <input type="text" name="price">
            </td>
        </tr>
        <tr>
            <td>Số lượng</td>
            <td>
                <input type="text" name="amount">
            </td>
        </tr>
        <tr>
            <td>Ngày nhập</td>
            <td>
                <input type="date" name="date">
            </td>
        </tr>
        <tr>
            <td>Mô tả</td>
            <td>
                <input type="text" name="status">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit">Thay đổi</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>