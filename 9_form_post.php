<?php
if (isset($_POST['btnSubmit'])) {
    // isset($_POST['btnSubmit']): Kiểm tra xem người dùng đã nhấn nút gửi (btnSubmit) trong biểu mẫu chưa. Khi nhấn nút "Submit", form sẽ gửi dữ liệu qua phương thức POST đến tệp PHP.
    $uname = $_POST['name'];
    //Lấy giá trị trường nhập liệu name từ form gửi đi và gán vào biến $uname. (sau khi form được gửi)

    $pass = $_POST['password'];

    echo "Name: $uname Pass: $pass";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="9_form_post.php" method="post">
        <!-- Đây là biểu mẫu HTML gửi dữ liệu tới tệp 9_form_post.php bằng phương thức POST. -->
        Name: <input type="text" name="name"> <br>
        <!-- Trường nhập liệu kiểu text cho người dùng nhập tên. -->
        Password: <input type="password" name="password"> <br>
        <input type="submit" value="Submit" name="btnSubmit">
    </form>

</html>

<!-- Người dùng điền thông tin vào biểu mẫu (ví dụ: tên là "John" và mật khẩu là "12345"). -->
<!-- Khi người dùng nhấn nút "Submit", dữ liệu sẽ được gửi tới tệp 9_form_post.php thông qua phương thức POST. -->
<!-- Tệp 9_form_post.php sẽ nhận dữ liệu từ form thông qua $_POST. -->