<?php
require_once "models/db.php";
// xây dựng hàm truy vấn để lấy danh sách sản phẩm
class Product extends db
{
    public function getProduct()
    {
        $sql = "SELECT * FROM product";
        return $this->getData($sql);
    }

    public function addProduct($id, $tensp, $gia)
    {
        $sql = "INSERT INTO $id";//
        return $this->getData($sql, false);
    }
}