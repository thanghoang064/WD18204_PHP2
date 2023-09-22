<?php
//khai báo class
class SinhVien {
    // khai báo thuộc tính tức là khai báo biến trong class
   public $tenSV  ;
   public $maSV;
   public $namSinh;

   // phương thức set giá trị cho tên
   public function setTen($ten) {
       $this->tenSV = $ten;
   }
   // khai báo phương thức tức là khai báo hàm trong class
    public function tinhTuoi() {
       return date('Y') - $this->namSinh;  // muốn sử dụng thuộc tính đã được khai bảo phải sử dụng $this->tenthuoctinh
    }
    public function hienThiThongTinSV() {
        echo $this->maSV."-".$this->tenSV."-".$this->tinhTuoi();
    }
}

$sv1 = new SinhVien(); // khởi tạo đối tượng sinh viên có nghĩa là
// tạo ra 1 ông sinh viên mới
$sv1->setTen("Quang");
$sv1->hienThiThongTinSV();
echo "<br>";
$sv2 = new SinhVien(); // tạo ra 1 ôn g sinh viên 2
$sv2->setTen("Hiếu");
$sv2->hienThiThongTinSV();

//tạo 1 class GiangVien gồm các thuộc tính :
// maGV,tenGV,namBatDau,luongCB,soGioDay
//tạo phương thức set cho các thuộc tính ở trên
// tạo phương thức hienThiThongTinGV gồm đầy đủ thông tin
// khởi tạo 1 đối  tượng gv và thực hiện gọi hàm set và
//hàm hiển thị thông tin GV ra
