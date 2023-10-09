<?php
namespace App\Models;
class Product extends BaseModel {
    protected $table = "product";
    //tạo ra thuộc tính table gán tên bảng trên CSDL vào
    public function __construct() {

    }
    // xây dựng hàm lấy danh sách sản phẩm
    public function getProduct() {
        $sql = "select * from $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();// lấy ra danh sách
    }
    //hàm truyền vào id để lấy ra chi tiết sản phamra,
    public function getDetailProduct($id) {
        $sql = "select * from $this->table where id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }
    //xây dựng thêm sản phẩm
    public function addProduct($id,$tenSP,$gia) {
        $sql = "insert into $this->table values (?,?,?)";
        $this->setQuery($sql);
        return $this->execute([$id,$tenSP,$gia]);
    }
    //xây dựng hàm cập nhập sản phẩm
    public function updateProduct($id,$tenSp,$gia) {
        $sql = "update $this->table set ten_sp = ?,gia = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute([$tenSp,$gia,$id]);
    }
    //xây dựng hàm delete
}