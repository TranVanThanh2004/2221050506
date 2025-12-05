<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>theloai</title>
</head>
<body>
    <h1>Thể loại</h1>
    <table border = "1">
        <tr>
            <th>ID</th>
            <th>Tên Thể Loại</th>
            <th>Hành động</th>
        </tr>

        <?php
        include("connect.php");

        $sql = "SELECT * FROM the_loai";
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["ten_the_loai"]; ?></td>

            <td>
                <a href="capnhattheloai.php?id=<?php echo $row['id']; ?>">Cập nhật</a> |
                <a href="themtheloai.php">Thêm</a> |
                <a href="xoatheloai.php?id=<?php echo $row['id']; ?>"
                onclick="return confirm('Bạn có chắc muốn xóa?');">
                Xóa
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>