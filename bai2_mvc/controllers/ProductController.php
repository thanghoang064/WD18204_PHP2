<?php
require_once "models/Product.php";
function listProduct() {
    //tạo ra 1 biến để hứng dữ liệu ở bên model
    $products = getProduct();
    include "views/product/list.php";
//    echo "Đây là trang danh sách product";
}

function addProduct() {
    echo "Đây là trang thêm product";
}

function editProduct() {
    echo "Đây là trang sửa product";
}
//  tạo ra 1 bảng customer gồm các trường dữ liệu
// id,ten_kh,tuoi
// xây dựng  các chức năng thêm,sửa,xóa,hiển thị khách hàng
//yêu cầu sử dụng đúng mô hình thầy cung cấp
// lấy luôn 4 đầu điểm lab 1 + 2 + 3 + 4