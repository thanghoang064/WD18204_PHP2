<?php
// tên file như thế nào thì tên class đặt như thế
namespace App\Controllers;
class ProductController {
    public function __construct() {
//        echo "Đây là product controller";
    }
    public function index() {
        echo "Đây là trang danh sách sản phẩm ";
    }
    public function add() {
        echo "Đây là trang thêm sản phẩm";
    }
}