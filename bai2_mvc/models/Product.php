<?php
require_once "models/db.php";
// xây dựng hàm truy vấn để lấy danh sách sản phẩm
function getProduct() {
    $sql = "SELECT * FROM product";
    return getData($sql);
}
function addProduct($id,$tensp,$gia) {
    $sql = "INSERT INTO $id";//
    return getData($sql,false);
}