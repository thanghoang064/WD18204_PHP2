<?php
include_once "nsp1.php";
include_once "nsp2.php";
$sv = new NSP1\SinhVien("huy",1996);
$sv->hienThiThongTin();

// namespace luôn luôn được đặt ở đầu file PHP
//   namespacr đóng vai trò là không gian tên đại diện cho
// class/function /biến ở file đó và giải quyết
//các trường hợp các file khác nhau nhưng có class/funcion/biến giống nhau