<?php
//kiểm tra xử lý chuỗi bằng biểu thức chính quy 
$name = "FPT Aptech";
//POSIX
//(Hàm mb_ereg, mb_eregi, mb_ereg_replace, mb_split)
$result = mb_ereg("^F\w+\s\w+$", $name); //Match chính xác chuỗi bắt đầu bằng F, theo sau là chữ, khoảng trắng, rồi chữ tiếp.
echo "<br> result is $result";

$result2 = mb_eregi("^f\w+\s\w+$", $name);
echo "<br> result2 is $result2";

$email = "fptaptech1999@gmail.com";
$result3 = mb_ereg_replace("\d+","2025",$email); //Thay mọi dãy số (\d+) trong $email bằng "2025"
echo "<br> result3 is $result3";

//split: cat chuoi thanh mang
$newArr = mb_split("\s", $name); //Chia chuỗi name thành mảng tại mỗi khoảng trắng (\s).
echo "<br> newArr is: "; //in lời giới thiệu cho mảng
print_r($newArr); // print_r() để in nội dung của mảng.
//echo chỉ dùng cho chuỗi (string). Không in được mảng hoặc đối tượng.Muốn in mảng → phải dùng print_r()

//PERL 
$result = preg_match("/^F\w+\s\w+$/", $name); 
echo "<br> result is $result";

$result2 = preg_match("/^f\w+\s\w+$/i", $name); //Thêm i → không phân biệt hoa thường.
echo "<br> result2 is $result2";

$result3 = preg_replace("/\d+/","2025",$email); 
echo "<br> result3 is $result3";

//split: cat chuoi thanh mang
$newArr = preg_split("/\s/", $name);
echo "<br> newArr is: ";
print_r($newArr);

?>