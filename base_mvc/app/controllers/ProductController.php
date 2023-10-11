<?php
// tên file như thế nào thì tên class đặt như thế
namespace App\Controllers;
use App\Models\Product;
class ProductController extends BaseController {
    public $product;
    public function __construct() {
//        echo "Đây là product controller";
       $this->product = new Product();
    }
    public function index() {
        $products = $this->product->getProduct();
        //product.index là đường dẫn trỏ đển blade
        $title = "ABc";
        $header = "Đây là trang blade 324324";
        return $this->render('product.index',compact('title','header','products'));
//        var_dump($products);
//        die;
//        echo "Đây là trang danh sách sản phẩm ";
    }
    public function add() {
        $product = new Product();
        echo "Đây là trang thêm sản phẩm";
    }
}