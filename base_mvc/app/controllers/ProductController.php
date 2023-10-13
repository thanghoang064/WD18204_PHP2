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
        return $this->render('product.add');
    }
    public function postProduct() {
        // khi submit o mh addproduct se ban ve day
            if (isset($_POST['add'])) {
                // validate
                // tao ra mang loi = rong
                $errors = [];
                // teen sp bo trong
                if (empty($_POST['ten_sp'])) {
                    $errors[] = "Ten san pham khong duoc de trong";
                }
                // gia sp bo trong
                if (empty($_POST['gia'])) {
                    $errors[] = "Gia san pham khong duoc de trong";
                }
                if(count($errors) > 0) {
                    //co loi
                    flash('errors',$errors,'add-product');
                } else {
                    $result = $this->product->addProduct(NULL,$_POST['ten_sp'],$_POST['gia']);
                    if ($result) {
                        flash('success','Them moi thanh cong','add-product');
                    }

                }

            }
    }

}