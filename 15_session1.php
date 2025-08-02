<?php
session_start();

// kiểm tra xem session có tồn tại chưa
if (isset($_SESSION['username'])) {
    // lấy giá trị từ session
    $username = $_SESSION['username'];
    $pass = $_SESSION['password'];
    echo "<br>UserName is $username";
    echo "<br>Password is $pass";

    // thay đổi session
    $_SESSION['username'] = "user";
    $_SESSION['password'] = 456;

    echo "<br>Session is changed";

    // lấy lại sau khi thay đổi
    $username = $_SESSION['username'];
    $pass = $_SESSION['password'];
    echo "<br>UserName is $username";
    echo "<br>Password is $pass";
} else {
    echo "Session is not set yet";
}
