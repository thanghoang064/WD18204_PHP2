<?php
require_once "models/Product.php";
class ProductController
{
    public function listProduct()
    {
        //tạo ra 1 biến để hứng dữ liệu ở bên model
        $product = new Product();
        $products = $product->getProduct();
        include "views/product/list.php";
//    echo "Đây là trang danh sách product";
    }

    public function addProduct()
    {
        echo "Đây là trang thêm product";
    }

    public function editProduct()
    {
        echo "Đây là trang sửa product";
    }
}
//  tạo ra 1 bảng customer gồm các trường dữ liệu
// id,ten_kh,tuoi
// xây dựng  các chức năng thêm,sửa,xóa,hiển thị khách hàng
//yêu cầu sử dụng đúng mô hình thầy cung cấp
// lấy luôn 4 đầu điểm lab 1 + 2 + 3 + 4