<?php
if (isset($_POST['btnLogin'])) {
    // getgia tri cua cac field tu form dua len
    $uname = $_POST['username'];
    $pass = $_POST['password'];
//ktra xem co remember hay khong
    if (isset($_POST['remember'])) {
        // neu co remember thi ta luu thong tin vao cookie
        setcookie('userName', $uname, time() + 120); // lưu trong 120s
    }

    if ($uname == 'admin' && $pass == "123") {
        echo "Welcome Admin";
    } else {
        echo "Welcome User";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form action="13_cookie.php" method="post">
        <div>
            Name: <input type="text" name="username"
                         value="<?php if(isset($_COOKIE['userName'])) echo $_COOKIE['username']; ?>"> <br>
        </div>
        <div>
            Password: <input type="password" name="password"> <br>
        </div>
        <div>
            Remember: <input type="checkbox" name="remember">
        </div>
        <div>
            <input type="submit" value="Login" name="btnLogin">
        </div>
    </form>
</body>
</html>
