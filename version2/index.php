<?php
include_once "Controller/Product.php";
include_once "Controller/ProductManager.php";

$productManager = new ProductManager('data.json');
$products = $productManager->getAllProduct();
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
        border: 1px #bdb6b6 solid;
        border-collapse: collapse;
        width: 60%;
        height: 30px;
        text-align: center;
    }
    button{
        cursor: pointer;
    }

    .head {
        height: 50px;
        background-color: green;
        color: white;
        font-size: 20px;
    }

    td {
        height: 25px;
    }

    .view:hover {
        background-color: #eeebe7;
    }

    a {
        text-decoration: none;
    }
    div{
        display: flex;
        justify-content: space-between;
    }
    form {
        margin-right: 45%;
    }

    .add {
        margin-bottom: 15px;
        right: 0;
    }
</style>
<body>
<h1>Danh sách mặt hàng</h1>
<div>
    <a href="view/add-product.php">
        <button class="add">Thêm mặt hàng</button>
    </a>
    <form method="get">
        <input type="text" name="search">
        <button type="submit">search</button>
    </form>
</div>
<table border="">
    <tr class="head">
        <th>#</th>
        <th>Tên hàng</th>
        <th>Loại hàng</th>
        <th>Giá</th>
        <th colspan="2">Option</th>
    </tr>
    <?php foreach ($products as $key => $product): ?>
        <tr class="view">
            <td><?php echo $key + 1 ?></td>
            <td><?php echo $product->getName() ?></td>
            <td><?php echo $product->getProductLine() ?></td>
            <td><?php echo $product->getPrice() ?></td>
            <td><a onclick="return confirm('Are you want delete?')"
                   href="view/delete-product.php?id=<?php echo $key ?>">
                    <button>Delete</button>
                </a></td>
            <td><a onclick="return confirm('Are you want edit?')"
                   href="view/edit-product.php?id=<?php echo $product->getId() ?>">
                    <button>Edit</button>
                </a></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>