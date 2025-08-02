<?php
//GET là một phương thức gửi dữ liệu từ biểu mẫu HTML lên URL khi người dùng nhấn nút Submit.
if (isset($_GET['btnSubmit'])) 
    // isset($_GET['btnSubmit']): Kiểm tra xem tham số btnSubmit có tồn tại trong URL không. Tham số này là tên của nút "Submit" trong biểu mẫu HTML.
{
    $uname = $_GET['name'];
    $pass = $_GET['password'];

    echo "Name: $uname Pass: $pass";
}
