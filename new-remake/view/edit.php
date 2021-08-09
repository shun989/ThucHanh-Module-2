<?php

include_once "../scr/DBConect.php";

$database = new DBConect();
$conn = $database->connect();
$id = $_GET['id'];
// b1: viet lenh sql
$sql = "SELECT productName,productLine,price,amount,status FROM products WHERE id= $id";


$stmt = $conn->query($sql);
$product = $stmt->fetchAll();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<style>
    .back-home{
        display: flex;
    }
    .back-home-btn{
        margin-left: 10px;
        background-color: #07bf07;
        color: white;
        border-radius: 5px;
        padding: 0 15px;
        border: 0 solid;

    }
    a{
        text-decoration: none;
        color: white;
    }
</style>
<body>
<div class="container" style="margin: 0 auto;padding: 1%;border: 1px darkgray solid;border-radius: 12px">
    <form action="../function/edit.php?id=<?php echo $id ?>" method="post">
        <fieldset>
            <legend>Thêm mặt hàng</legend>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Tên hàng:</label>
                <input type="text" id="disabledTextInput" class="form-control" name="productName" value="<?php echo $product[0]['productName']; ?>">
            </div>
            <div class="mb-3">
                <label for="disabledSelect" class="form-label">Loại hàng:</label>
                <select id="disabledSelect" class="form-select" name="productLine" value="<?php echo $product[0]['productLine']; ?>">
                    <option>Điện thoại</option>
                    <option>Điều hòa</option>
                    <option>Tủ Lạnh</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Giá:</label>
                <input type="text" id="disabledTextInput" class="form-control" name="price" value="<?php echo $product[0]['price']; ?>">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Số lượng:</label>
                <input type="text" id="disabledTextInput" class="form-control" name="amount" value="<?php echo $product[0]['amount']; ?>">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Mô tả:</label>
                <input type="text" id="disabledTextInput" class="form-control" name="status" value="<?php echo $product[0]['status']; ?>">
            </div>
            <div class="back-home">
                <button type="submit" class="btn btn-primary">Edit</button>
                <button  class="back-home-btn"><a href="../index.php">Thoát</a></button>
            </div>
        </fieldset>
    </form>
</div>

</body>
</html>