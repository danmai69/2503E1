<?php
include_once('17_connectDB.php');

// mở kết nối
$cn = connect();

// viết câu lệnh truy vấn
$query = "SELECT * FROM tbStudent";

// thực thi truy vấn
$result = mysqli_query($cn, $query);
if ($result == false) {
    die("Not found");
}

// khai báo mảng rỗng để chứa dữ liệu 
$data = [];

// đọc từng dòng từ kết quả
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// đóng kết nối
disconnect($cn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>

<body>
    <h1> <a href="19_student_create.php">Add new student </a> </h1>
    <h1>Student List</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Student Gender</th>
                <th>Student DOB</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $row) { ?>
                <tr>
                    <td><?php echo $row['stuID']; ?></td>
                    <td><?php echo $row['stuName']; ?></td>
                    <td><?php echo $row['stuGender']; ?></td>
                    <td><?php echo $row['stuDOB']; ?></td>
                    <td>
                        <a href="20_student_edit.php?id=<?php echo $row['stuID'] ?>">Edit</a>
                        <a href="21_student_delete.php?id=<?php echo $row['stuID'] ?>" onclick="return confirm('Are u sure to delete?')">Delete</a>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</body>

</html>