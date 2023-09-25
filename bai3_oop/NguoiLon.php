<?php
class ConNguoi {
    public $chan;
    public $tay;
    public $mat;
    public $mui;
    public function an() {
        echo "ăn bằng mồm";
    }
    public function setTay($tay) {
        $this->tay = $tay;
    }
    public function setChan($chan) {
        $this->chan = $chan;
    }

}
class NguoiLon extends ConNguoi {
    public $longNach;

    public function di() {
        echo "Người lớn Đi bằng".$this->chan;
    }

    public function noi() {

    }
}
class TreCon extends ConNguoi {

    public function bo() {
        echo "Trẻ con bò bằng".$this->tay."Tay".$this->chan."Chân";
    }

}
// tạo ra 1 đối tượng trẻ con
$tc = new TreCon();
$tc->setTay(2);
// tại hàm setChan
$tc->an();
$tc->bo();
$nl = new NguoiLon();
$nl->setChan(2);
$nl->di();
// khởi tạo đối tượng người lớn xử lý phương thức đi
//hiển thị ra người lớn đi bằng 2 chân