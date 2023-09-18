<?php
//Hàm
//hàm dùng để đóng gói các chức năng trong chương trình
// giúp làm gọn code và tái sử dụng được code
$a = 5;
$n = 10;
function ktSoChan($n) {  // những gì trong khe ngoặc được gọi là tham số
    // chúng ta có thể khai báo nhiều tham số phân cách bằng dấu phẩy trong ngoặc
    if ($n % 2 == 0) {
        echo "Đây là số chẵn";
    } else {
        echo "Đây là số lẻ";
    }
}
$b = 6;
ktSoChan($a);
ktSoChan($b);
// hàm không trả về là hàm không chữ return đối với hàm không trả về
// thì đầu ra sẽ tự xử lý
// xây dựng 1 hàm không trả về tính diện tích hình chữ nhật với
// hai tham số truyền vào là chiều dài và chiều rộng
// loại không trả về  (Không thấy có chữ return ở trong hàm
function dienTichHCN($chieuDai,$chieuRong) {
    echo "Diện tích là" .$chieuDai * $chieuRong;
}
// loại có trả về (Loại có return )
function dienTichHCNCoTraVe($chieuDai,$chieuRong) {
    return $chieuDai * $chieuRong;
}
//cách gọi hàm không trả về thì chỉ cần gọi tên hàm và truyền giá trị
// tương ứng với tham số
dienTichHCN(4,5);
//cách gọi hàm có trả về
echo dienTichHCNCoTraVe(4,5) + 10;

//false;
// xây dựng 1 hàm không trả về truyền vào những tham số sau
//tên,năm sinh,địa chỉ,email
// hàm này sẽ xử lý hiển thị ra thông tin tên + tuổi + địa chỉ + Email
// Nguyễn văn a, 2003,9 TVB, nguyenvana@gmail.com
// tuổi = năm hiện tại - năm sinh (năm hiện tại date('Y')
// hiển thị ra Nguyễn văn a - 20 - 9 TVB - nguyenvana@gmail.com;
function hienThiThongTin($ten,$namSinh,$diaChi,$email) {
    $tuoi = date('Y') - $namSinh;
    echo $ten."-".$tuoi."-".$diaChi."-".$email;
}
hienThiThongTin("Nguyễn Văn A",2004,"9TVB","abc@gmail.com");










