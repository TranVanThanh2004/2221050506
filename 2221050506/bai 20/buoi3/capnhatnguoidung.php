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

    // KIỂM TRA ID TRUYỀN VÀO
    if (!isset($_GET["id"]) || empty($_GET["id"])) {
        die("Lỗi: Thiếu ID người dùng.");
    }

    $id = intval($_GET["id"]);

    // LẤY THÔNG TIN USER
    $sql = "SELECT * FROM nguoi_dung WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if (!$result || mysqli_num_rows($result) == 0) {
        die("Không tìm thấy người dùng với ID = $id");
    }

    $nguoidung = mysqli_fetch_assoc($result);
    ?>

    <div class="container">
    <form action="" method="POST">

        <label>Họ tên</label>
        <input type="text" name="hoTen" value="<?php echo $nguoidung['ho_ten']; ?>">

        <label>Tên đăng nhập</label>
        <input type="text" name="tenDn" value="<?php echo $nguoidung['ten_dang_nhap']; ?>">

        <label>Mật khẩu</label>
        <input type="text" name="pwd" value="<?php echo $nguoidung['mat_khau']; ?>">

        <label>Email</label>
        <input type="text" name="email" value="<?php echo $nguoidung['email']; ?>">

        <label>Ngày sinh</label>
        <input type="date" name="ngaySinh" value="<?php echo $nguoidung['ngay_sinh']; ?>">

        <label>Số điện thoại</label>
        <input type="number" name="sdt" value="<?php echo $nguoidung['sdt']; ?>">

        <label>Quyền</label>
        <select name="vai_tro_id">
            <option value="1" <?php if($nguoidung['vai_tro_id']==1) echo "selected"; ?>>Admin</option>
            <option value="2" <?php if($nguoidung['vai_tro_id']==2) echo "selected"; ?>>Đạo diễn</option>
            <option value="3" <?php if($nguoidung['vai_tro_id']==3) echo "selected"; ?>>User</option>
        </select>

        <button type="submit">Cập nhật</button>

    </form>

    <?php
    // NẾU NGƯỜI DÙNG BẤM SUBMIT
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (
            !empty($_POST["hoTen"]) &&
            !empty($_POST["tenDn"]) &&
            !empty($_POST["pwd"]) &&
            !empty($_POST["email"]) &&
            !empty($_POST["ngaySinh"]) &&
            !empty($_POST["sdt"]) &&
            !empty($_POST["vai_tro_id"])
        ) {
            $hoTen = $_POST["hoTen"];
            $tenDn = $_POST["tenDn"];
            $pwd = $_POST["pwd"];
            $email = $_POST["email"];
            $ngaysinh = $_POST["ngaySinh"];
            $sdt = $_POST["sdt"];
            $vai_tro_id = $_POST["vai_tro_id"];

            $sql = "UPDATE nguoi_dung SET 
                    ten_dang_nhap='$tenDn',
                    ho_ten='$hoTen',
                    email='$email',
                    ngay_sinh='$ngaysinh',
                    sdt='$sdt',
                    vai_tro_id='$vai_tro_id',
                    mat_khau='$pwd'
                    WHERE id = $id";

            if(mysqli_query($conn,$sql)){
                header("Location: admin.php?page_layout=nguoidung");
                exit();
            } else {
                echo "Lỗi: ". mysqli_error($conn);
            }

        } else {
            echo "Vui lòng nhập đủ thông tin!";
        }
    }
    ?>
</div>


</body>
</html>