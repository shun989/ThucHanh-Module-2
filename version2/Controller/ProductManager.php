<?php


class ProductManager
{
    protected $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function loadDataFile()
    {
        $dataFile = file_get_contents($this->filePath);
        return json_decode($dataFile);
    }

    public function getAllProduct(): array
    {
        $data = $this->loadDataFile();
        $products = [];
        foreach ($data as $item) {
            $product = new Product(
                $item->name,
                $item->productLine,
                $item->price,
                $item->amount,
                $item->date,
                $item->status
            );
            $product->setId($item->id);
            array_push($products, $product);
        }

        return $products;
    }

    public function addProduct($data)
    {
        $dataFile = $this->loadDataFile();
        $lastProduct = $dataFile[count($dataFile) - 1];
        $data["id"] = $lastProduct->id + 1;
        array_push($dataFile, $data);
        $this->saveDataToFile($dataFile);
    }

    public function saveDataToFile($data)
    {
        $dataJson = json_encode($data);
        file_put_contents($this->filePath, $dataJson);
    }

    public function remove($index)
    {
        $dataFile = $this->loadDataFile();
        array_splice($dataFile, $index, 1);
        $this->saveDataToFile($dataFile);
    }

    public function getProductById($id)
    {
        $data = $this->loadDataFile();
        foreach ($data as $item) {
            if ($id == $_GET["id"]) {
                $product = new Product(
                    $item->name,
                    $item->productLine,
                    $item->price,
                    $item->amount,
                    $item->date,
                    $item->status,
                    $item->id);
                $product->setId($item->id);
                return $product;
            }
        }
    }
}