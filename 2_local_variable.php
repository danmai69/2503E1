<?php
//khai bao ham
function myLocal()
{
    //khai bao bien cuc bo (local variabel)
    $x = 5;
    echo "bien x co gia tri la $x";
}

//goi ham
myLocal();

//in bien x o ngoai ham -> error
echo "bien x o ngoai ham la $x";

//Biến cục bộ (local) chỉ sống trong hàm.
//Muốn dùng biến bên ngoài, phải khai báo global hoặc return ra.
?>
