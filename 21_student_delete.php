<?php
include_once('17_connectDB.php');
//lay gia tri cu cua student
if (isset($_GET['id'])) {
    $id = $_GET['id'];



    //mo ket noi
    $cn = connect();


    //viet cau lenh truy van
    $query = "DELETE FROM tbStudent WHERE stuID = $id";

    //thuc thi truy van
    mysqli_query($cn, $query);

    // đóng kết nối
    disconnect($cn);

    //chuyen ve trang index
    header("location: 18_student_index.php");
}
