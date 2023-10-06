<?php
namespace NSP111111111111111111111;
class SinhVien {
    public $ten;
    public $namSinh;
    public function __construct($ten,$namSinh) {
        $this->ten = $ten;
        $this->namSinh = $namSinh;
    }
    public function hienThiThongTin() {
        echo "Tên".$this->ten."<br>";
        echo "Năm sinh".$this->namSinh;
    }
}
class Abc {

}