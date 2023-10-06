<?php
//include_once "app/models/Product.php";
//include_once "app/models/Customer.php";
//include_once "app/controllers/ProductController.php";
//include_once "app/controllers/CustomerController.php";
require_once "vendor/autoload.php";
use App\Controllers\CustomerController;
use App\Controllers\ProductController;
use App\Models\Customer;
use App\Models\Product;
$product = new Product();
$customer = new Customer();
$productController = new ProductController();
$customerController = new CustomerController();
