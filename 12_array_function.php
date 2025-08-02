<?php
// Khai báo 1 array đúng cú pháp
$studentList = ["Minh Tai", "Dang Khoa", "Manh Hung"];

// array_push(): thêm 1 phần tử vào cuối mảng
array_push($studentList, "Gia Bao");

// In kết quả để kiểm tra
print_r($studentList);

// array_unshift(): thêm phần tử vào đầu mảng
array_unshift($studentList, "Lam Phong");
echo '<br>After array_unshift($studentList, "Lam Phong"):<br>';
print_r($studentList);

// array_pop(): xoá phần tử cuối mảng
array_pop($studentList);
echo '<br>After array_pop($studentList):<br>';
print_r($studentList);

// array_shift(): xoá phần tử đầu mảng
array_shift($studentList);
echo '<br>After array_shift($studentList):<br>';
print_r($studentList);

// array_splice(): xoá phần tử ở vị trí bất kỳ (xoá 1 phần tử ở vị trí index = 1)
array_splice($studentList, 1, 1);
echo '<br>array_splice($studentList, 1, 1):<br>';
print_r($studentList);

// Gán lại mảng để thử array_slice()
$studentList = ["Minh Tai", "Dang Khoa", "Manh Hung", "Lam Phong"];

// array_slice(): cắt mảng từ vị trí 1, lấy 2 phần tử
$newArray = array_slice($studentList, 1, 2);
echo '<br>studentList:<br>';
print_r($studentList);
echo '<br>newArray:<br>';
print_r($newArray);

// Thêm 1 phần tử vào cuối mảng bằng cú pháp []
$studentList[] = "Minh Hieu";
echo '<br>$studentList[] = "Minh Hieu":<br>';
print_r($studentList);

// Thêm Phúc vào sau Khoa: thêm 1 phần tử vào vị trí bất kỳ
array_splice($studentList, 2, 0, "Hoang Phuc");
echo '<br> array_splice($studentList, 2, 0,"Hoang Phuc") <br>';
print_r($studentList);

//chuoi dinh dang file: abc.jpg, abc.jpeg, abc.png, abc.gif
$image = "abc._3ab_3.jpg"; 
//cat chuoi thanh mang
$newImage = explode(".",$image);
//get phan tu cuoi cung 
$ext = end($newImage);
//khai bao 1 mang chua cac extension hợp lệ
$accept_ext = ['jpg', 'jpeg', 'png', 'gif'];
//kiem tra xem extension cua file co hop le khong
$result = in_array($ext, $accept_ext);
if($result)
{
    echo "Hinh anh hop le";
}
else
{
    echo "Hinh anh khong hop le";
}

?>
