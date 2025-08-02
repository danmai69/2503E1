<?php

// khai bao 1 array 1 chieu (numeric array/ index array)
$numbers = array(10, 11, 12, 13, 14);
$numbers2 = [10, 11, 12, 13, 14];


echo "<br> In theo print_r: ";
print_r($numbers); //Array ( [0] => 10 [1] => 11 [2] => 12 [3] => 13 [4] => 14 )


// for thuong
echo "<br> For thuong:";
for($i = 0; $i < count($numbers); $i++) { // 👉 Với mảng [10, 11, 12, 13, 14] → count($numbers) = 5.
    //$i < count($numbers) → lặp từ chỉ số 0 đến 4 (vì mảng đánh index từ 0).
    echo "<br> $numbers[$i]"; //number thứ tự 0 là 10, 1 là 11,...
}

//for each 
//foreach duyệt từng phần tử trong mảng $numbers.
//Mỗi lần lặp, biến $num sẽ nhận giá trị hiện tại của phần tử. -- Biến $num tự động chứa giá trị tại mỗi bước.
//Nếu cần lấy cả chỉ số → dùng thêm foreach($numbers as $index => $num).
echo "<br> Foreach:";
foreach($numbers as $num)
{
    echo "<br> $num";
}

/////////////////
//khai bao 1 associative array (key => value)
$student = ["name" => "Khoa", "age" => 29];
echo "<br> In theo print_r: ";
print_r($student);

//for each 1
//không lấy key - in lần lượt "Khoa" và "29".
echo "<br> Foreach:";
foreach($student as $s)
{
    echo "<br> $s";
}
//✔️ Truy xuất theo key.
echo "<br> Name: " . $student['name'];
echo "<br> Tuoi: " . $student['age'];

//for each 2 --  có key và value:
echo "<br> Foreach 2:";
foreach($student as $k => $s) //$k là key (chỉ số nếu là mảng thường, tên nếu là mảng kết hợp)
{
    echo "<br> $k la $s";
}

//for each 3 -- $ke là index (0,1,2...), $num là giá trị (10,11,...)
echo "<br> Foreach 3:";
foreach($numbers as $ke=>$num)
{
    echo "<br> $ke la $num";
}



//khai bao 1 array nhieu chieu
$studentList = [
    ["name" => "Khoa", "age" => 29],
    ["name" => "Nghia", "age" => 25],
    ["name" => "Hop", "age" => 19]
];

echo "<br> In theo print_r:";
print_r($studentList);

/*1. Khoa: 29
2. Nghia: 25
3. Hop: 19 */

foreach($studentList as $k => $stu) 
{
    echo "<br>" . ($k + 1) . ". " . $stu['name'] . ": " . $stu['age']; // $stu['name'] là truy cập vào giá trị của khóa "name" trong mảng $stu.
}

//sort
sort($student);
echo "<br> After sort: ";
print_r($student);
?>
