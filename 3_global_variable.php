<?php
//khai bao bien toan cuc
$y = 1;

//khai bao ham 
function myGlobal()
{
    global $y; // khai báo lại để dùng biến $y toàn cục bên trong hàm //Nếu không có dòng global $y; thì $y bên trong hàm khác với $y bên ngoài.
    $y++; //y tăng lên 2
    echo "bien y la $y";
}
//goi ham
myGlobal();

//ngoai ham 
//Vì đã thay đổi $y trong hàm (và là biến toàn cục), nên giá trị cũng được cập nhật bên ngoài.
echo "<br> bien y ngoai ham la $y";
?>