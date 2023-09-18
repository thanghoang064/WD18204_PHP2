<?php
require_once "controllers/ProductController.php";
$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) {
    case '/':
        listProduct();
    break;
    // nếu như case = add-product trỏ vào hàm addProduct
    // nếu như case = edit-product trỏ vào hàm editProduct
}
