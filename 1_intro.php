<?php

//khai bao bien
$name = "FPT Aptech";
$age = 26;

//in gia tri cac bien ra man hinh
//Cách 1 Dùng nối chuỗi
//Dùng dấu . để nối chuỗi với biến.
//Dùng ' ' thì biến không được nội suy.

echo "Ten toi la: " . $name;
print '<br> Tuoi cua toi la: ' . $age;

//Cách 2: " → nội suy biến tự động (tiện hơn).
//Dùng dấu " thì biến sẽ tự động chèn giá trị vào chuỗi.
//Dùng ' ' thì sẽ in nguyên tên biến, không lấy giá trị.
echo "<br> Ten toi la $name";
echo '<br> Tuoi toi la $age'; //Dùng ' ' thì biến không được nội suy.

//khai bao hang so
define("MY_NAME", "FPT");
//const $myname = "FPT";

echo "<br> Ten ban la: " . MY_NAME;

//hang so dac biet
echo "<br> Ban dang o line so " . __LINE__;
echo "<br> Ban dang o file so " . __FILE__;
?>
