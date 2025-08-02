<?php
function connect() {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "2503E1";

    // Kết nối database
    $con = mysqli_connect($host, $user, $pass, $database);

    // Kiểm tra kết nối
    if (!$con) {
        die("Connect error: " . mysqli_connect_error());
    }

    return $con;
}

// Hàm ngắt kết nối
function disconnect($cn) {
    mysqli_close($cn);
}
?>
