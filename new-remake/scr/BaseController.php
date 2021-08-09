<?php

include_once "DBConect.php";

class BaseController
{
    protected $connect;

    public function __construct()
    {
        $dbConnect = new DBConect();
        $this->connect = $dbConnect->connect();
    }

    public function getAllProduct()
    {
        $sql = "SELECT * FROM products";
        $query = $this->connect->query($sql);

        return $query->fetchAll();
    }
}

//    public function addProduct($product)
//    {
//        $sql = "INSERT INTO products(null, productName,productLine,price,amount,date,status) VALUE (?,?,?,?,now(),?)";
//        $stmt = $this->connect->prepare($sql);
//        $stmt->bindParam(1, $product->productName);
//        $stmt->bindParam(2, $product->productLine);
//        $stmt->bindParam(3, $product->price);
//        $stmt->bindParam(4, $product->amount);
//        $stmt->bindParam(5, $product->status);
//        return $stmt->execute();
//    }
//}
