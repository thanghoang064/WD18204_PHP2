<?php
interface DiChuyen {
    //interface nó không phải là class
    // cho nên nó sẽ không có thuộc tính và phương thức như class bình thường khác
    // Nhưng nó sẽ có phương thức trìu tượng như abtract class
    function di();// định nghĩa phương thức như
    // thế này là nó tự hiểu là phương thức trìu tượng
}
class ConCho implements DiChuyen {
    public function di()
    {
        echo "con chó đi bằng 4 chân";
    }
}
class ConNguoi implements DiChuyen {
    public function di()
    {
       echo "Con người đi bằng 2 chân";
    }
}
class Oto implements DiChuyen {
    public function di()
    {
        echo "Ô tô đi bằng 4 bánh";
    }
}
// xây dựng 1 class ConChim và 1 class MayBay
// xác định phương thức trìu tường
// và inteface phù hợp cho 2 class trên