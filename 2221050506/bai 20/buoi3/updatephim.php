<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
           form {
            display: flex;
            flex-direction: column;
            border: 1px solid black;
            padding: 20px;
            border-radius: 10px;
            width: 350px;
        }
        .container {
            display: flex;
            justify-content: center;
            padding: 20px;
        }
        input, select {
            margin-bottom: 10px;
            padding: 8px;
        }
        button {
            padding: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php
        include("connect.php");
        $id = $_GET["id"];
        echo $_GET["id"];
        $sql = "SELECT * FROM `list_film` WHERE id_phim = $id";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
    ?>
    <div class="contaier">
         <form action="" method="POST">
        <input type="hidden" name="id_cu" value="<?php echo $row['id_phim'] ?>">

        <label for="">id phim</label>
        <input type="text" placeholder="id phim" name="idPhim" value="<?php echo $row["id_phim"] ?>">

        <label for="">tên phim</label>
        <input type="text" placeholder="tên phim" name="tenPhim"  value="<?php echo $row["ten_phim"] ?>">

        <label for="">thời lượng</label>
        <input type="text" placeholder="thời lượng" name="thoiLuong"  value="<?php echo $row["thoi_luong"] ?>">

        <label for="">năm phát hành</label>
        <input type="text" placeholder="năm phát hành" name="namPhatHanh"  value="<?php echo $row["nam_phat_hanh"] ?>">

        <label for="">trailer</label>
        <input type="text" placeholder="trailer" name="trailer"  value="<?php echo $row["trailer"] ?>">

        <label for="">mô tả</label>
        <input type="text" placeholder="mô tả" name="moTa" value="<?php echo $row["mo_ta"] ?>">
        <button type="submit">cập nhật phim</button>
    </form>

    <?php
         if (!empty($_POST["idPhim"]) &&
        !empty($_POST["tenPhim"]) &&
        !empty($_POST["thoiLuong"]) &&
        !empty($_POST["namPhatHanh"]) &&
        !empty($_POST["trailer"]) &&
        !empty($_POST["moTa"])

    ) {
        $idPhim = $_POST["idPhim"];
        $tenPhim = $_POST["tenPhim"];
        $thoiLuong = $_POST["thoiLuong"];
        $namPhatHanh = $_POST["namPhatHanh"];
        $trailer = $_POST["trailer"];
        $mota = $_POST["moTa"];

        // ket noi dtb
        include("connect.php");
        $sql = "UPDATE `list_film` SET `id_phim`='$idPhim',`ten_phim`='$tenPhim',
        `thoi_luong`='$thoiLuong',`nam_phat_hanh`='$namPhatHanh',
        `trailer`='$trailer',`mo_ta`='$mota' WHERE id_phim = $id";


        if(mysqli_query($conn, $sql)){
            header("Location: admin.php?page_layout=phim");
        }else{
            echo "lỗi". mysqli_error($conn);
        }
    } else {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            echo "vui lòng nhập đủ thông tin";
        }
    }
    ?>
   </div>

</body>
</html>