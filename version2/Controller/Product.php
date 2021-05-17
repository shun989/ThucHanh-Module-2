<?php


class Product
{
    protected $id;
    protected $name;
    protected $productLine;
    protected $price;
    protected $amount;
    protected $date;
    protected $status;

    public function __construct($name, $productLine, $price, $amount, $date, $status)
    {

        $this->name = $name;
        $this->productLine = $productLine;
        $this->price = $price;
        $this->amount = $amount;
        $this->date = $date;
        $this->status = $status;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setProductLine($productLine): void
    {
        $this->productLine = $productLine;
    }

    public function getProductLine()
    {
        return $this->productLine;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price): void
    {
        $this->price = $price;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount): void
    {
        $this->amount = $amount;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date): void
    {
        $this->date = $date;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status): void
    {
        $this->status = $status;
    }

}