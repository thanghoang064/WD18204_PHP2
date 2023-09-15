<?php
$a = 5 ;// đây là số nguyên
$b = 5.5 ; // đây là số thực
$c = "Fpoly"; //đây là kiểu dữ liệu string (chuỗi )
$d = false; // đây là kiểu dữ liệu boolean
//echo $a." ".$c; // nối chuỗi trong PHP sử dụng dấu chấm

// mảng
//cách 1
//$mang = array(5,6,7,8); //
// cách 2
$mang = [5,6,7,8]; // dùng cho những phiên bản PHP >7.0
//for($i = 0 ; $i < count($mang) ; $i ++) {
//    echo $mang[$i];
//}
//foreach ($mang as $key=>$value) {
//    echo "vị trí ".$key."Giá trị ".$value."<br>";
//}
$manglh = ["A"=>5,"B"=>6,"C"=>7,"D"=>8];
$mangColor = ["red"=>"Màu đỏ","blue"=>"Màu xanh","green"=>"Xanh dương"];
//echo $manglh["B"];
//foreach ($manglh as $key=>$value) {
//    echo $key;
//}

//duyệt mảng là lấy tất cả các phần tử trong mảng ra
?>
<table border="1">
    <tr>
        <td>Vị trí</td>
        <td>Giá trị</td>
    </tr>
    <?php foreach ($mangColor as $key => $value) { ?>
    <tr bgcolor="<?php echo $key; ?>">
        <td><?php echo $key; ?></td>
        <td><?php echo $value; ?></td>
    </tr>
    <?php }?>
</table>
