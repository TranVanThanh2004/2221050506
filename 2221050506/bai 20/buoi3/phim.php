<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phim</title>
</head>
<body>
    <h1>quản lý phim</h1>

    <table border="1">
        <tr>
            <td>ID Phim</td>
            <td>Tên Phim</td>
            <td>Năm Phát Hành</td>
            <td>Quốc Gia</td>
            <td>Trailer</td>
            <td>Mô Tả</td>
            <td>Hành động</td>
        </tr>

        <?php
        include("connect.php");

        // JOIN phim với quốc gia
        $sql = "
            SELECT p.*, qg.ten_quoc_gia
            FROM phim p
            JOIN quoc_gia qg ON p.quoc_gia_id = qg.id
        ";
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["ten_phim"]; ?></td>
            <td><?php echo $row["nam_phat_hanh"]; ?></td>
            <td><?php echo $row["ten_quoc_gia"]; ?></td>
            <td><?php echo $row["trailer"]; ?></td>
            <td><?php echo $row["mo_ta"]; ?></td>

            <td>
                <a href="updatephim.php?id=<?php echo $row['id']; ?>">Cập nhật</a> |
                <a href="themphim.php">Thêm</a> |
                <a href="xoaphim.php?id=<?php echo $row['id']; ?>"
                onclick="return confirm('Bạn có chắc muốn xóa?');">
                    Xóa
                </a>
            </td>
        </tr>
        <?php } ?>

        
        
        <tr>
            
    </table>
</body>
</html>