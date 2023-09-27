<?php
//tạo 1 class ConNguoi gồm các thuộc tính :hoten,diachi,namsinh,email,sdt
// tạo phương thức set cho các thuộc tính trên
// tạo phương thức tinhtuoi = năm hiện tại - năm sinh (có trả về)
// tạo phương thức hiển thị thông tin :hoten,diachi,tuoi,email,sdt
//tạo 1 class HocSinh từ class ConNguoi gồm các thuộc tính :diemToan,diemLy,diemHoa
// tạo phương thức set cho các thuộc tính trên
//tạo phương thức tính điểm tb = (Toán + lý+ hóa)/3
//tạo phương thức hiển thị thông tin sinh viên hiển thị ra các thông tin
// hoten,diachi,tuoi,email,sdt,điểm TB
//tạo 1 class GiangVien kế thừa từ class ConNguoi gồm các thuộc tính:luongCB,soGioDay
//// tạo phương thức set cho các thuộc tính trên
/// tạo phương thức tính tổng lương = luongCB *soGioDay
/// //tạo phương thức hiển thị thông tin giảng viên hiển thị ra các thông tin
//// hoten,diachi,tuoi,email,sdt,tổng lương
class ConNguoi {
    public $hoTen;
    public $diaChi;
    public $namSinh;
    public $email;
    public $sdt;
    public function __construct($hoTen,$namSinh,$sdt) {
        $this->hoTen = $hoTen;
        $this->namSinh = $namSinh;
        $this->sdt = $sdt;
    }
    public function setHoTen($hoTen) {
        $this->hoTen = $hoTen;
    }
    public function setNamSinh($namSinh) {
        $this->namSinh = $namSinh;
    }
    public function setSDT($sdt) {
        $this->sdt = $sdt;
    }
    public function tinhTuoi() {
        return date('Y') - $this->namSinh;
    }
    public function hienThiThongTin() {
        echo $this->hoTen."-".$this->namSinh."-".$this->tinhTuoi();
    }

}
class HocSinh extends  ConNguoi {
    public $diemToan;
    public $diemLy;
    public $diemHoa;
    public function __construct($hoTen, $namSinh, $sdt,$diemToan,$diemLy,$diemHoa)
    {
        // gọi lên luôn hàm contruct của tk cha để set giá trị cho
        // những thuộc tính ở class cha
        parent::__construct($hoTen, $namSinh, $sdt);
        $this->diemToan = $diemToan;
        $this->diemLy = $diemLy;
        $this->diemHoa  = $diemHoa;
    }

    public function setDiemToan($diemToan) {
        $this->diemToan = $diemToan;
    }
    public function setDiemLy($diemLy) {
        $this->diemLy = $diemLy;
    }
    public function setDiemHoa($diemHoa) {
        $this->diemHoa = $diemHoa;
    }
    public function tinhDiemTB () {
        return ($this->diemToan + $this->diemLy + $this->diemHoa)/3;
    }
    public function hienThiThongTinSV() {
        $this->hienThiThongTin(); // gọi hàm hiển thị thông tin của thằng cha
        echo $this->tinhDiemTB();
    }
}
$hs = new HocSinh("Nguyễn Văn A",2003,"09222222",7,9,10);
//$hs->setHoTen("Quang");
//$hs->setNamSinh(2003);
//$hs->setDiemToan(10);
//$hs->setDiemLy(5);
//$hs->setDiemHoa(7);
$hs->hienThiThongTinSV();
//làm tương tự với giảng viên