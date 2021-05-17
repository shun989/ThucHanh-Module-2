<?php
include_once "model/DBProduct.php";

$database = new DBProduct();
$conn = $database->connect();

$sql = "SELECT * FROM products";
$stmt = $conn->query($sql);
$categories = $stmt->fetchAll();
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
    table {
        width: 800px;
    }

    .head {
        background-color: green;
        color: white;
        font-size: 20px;
    }

    th {
        height: 30px;
    }
</style>
<body>
    <table border="">
        <tr class="head">
            <th>#</th>
            <th>Tên hàng</th>
            <th>Loại hàng</th>
            <th colspan="2"></th>
        </tr>
        <?php foreach ($products as $key => $product): ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $product['productName'] ?></td>
                <td><?php echo $product['productLine'] ?></td>
                <td><a href="controller/editProduct.php?id=<?php echo $product['id'] ?>"
                       onclick="return confirm('Bạn muốn thay đổi thông tin?')">
                        <button style="background-color: yellow">Update</button>
                    </a></td>
                <td><a href="controller/delete.php?id=<?php echo $product['id'] ?>"
                       onclick=" return confirm('Bạn muốn xóa?')">
                        <button style="background-color: red">Delete</button>
                    </a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>