<?php

class ProductModel extends Connection
{
    protected $name;
    protected $price;
    protected $stock;

    protected function findAll()
    {
        $sql = "SELECT * FROM stastay";
        $result = $this->connect()->query($sql);
        $stastay = [];
        if ($result->num_rows > 0) {
            while ($data = mysqli_fetch_assoc($result)) {
                $stastay[] = $data;
            }
        }
        return $stastay;
    }

    protected function findOne($id)
    {
        $sql = "SELECT * FROM stastay WHERE id = " . $id;
        $result = $this->connect()->query($sql);
        $product = [];
        if ($result->num_rows > 0) {
            while ($data = mysqli_fetch_assoc($result)) {
                $product[] = $data;
            }
        }
        return $product;
    }
}
