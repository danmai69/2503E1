<?php
session_start();

// kiểm tra xem session có tồn tại chưa

if (isset($_SESSION['username'])) {
    // lấy giá trị từ session
    $username = $_SESSION['username'];
    $pass = $_SESSION['password'];
    echo "<br>UserName is $username";
    echo "<br>Password is $pass";

    // clear session
    session_unset();
    

    // lấy lại sau khi thay đổi
    $username = $_SESSION['username'];
    $pass = $_SESSION['password'];
    echo "<br>UserName is $username";
    echo "<br>Password is $pass";
} else {
    echo "Session is not set yet";
}
