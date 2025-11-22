<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buổi 1 php</title>
</head>
<body>
    <?php 
        //1. In ra màn hình
        echo "Hello wrold! <br>";

        echo "Hi <br>";

        //2. Biến 
        // cú pháp $ + tên biến = giá trị của biến
        $ten = "Trần Văn Thành";
        $tuoi = 21;

        echo $ten . " " . $tuoi . " tuổi" . "<br>";

        //3. Hằng 
        define("soPi", "3.14");
        echo soPi . "<br>"; 
        
        //4. phân biệt '' và "";
        echo '$ten' . "<br>"; // in ra $ten
        echo "$ten" . "<br>"; // in ra giá trị của biến $ten

        //5. chuỗi
        #5.1 kiểm tra độ dài của chuỗi
        echo strlen($ten) . "<br>";
        #5.2 đếm số từ
        echo str_word_count($ten) . "<br>";
        #5.3 tìm kiếm ký tự trong chuỗi bắt đầu từ 0
        echo strpos($ten, "T") . "<br>";
        #5.4 thay thế ký tự trong chuỗi
        echo str_replace("Văn", "Thiên", $ten) . "<br>";

        //6. toán tử
        $soThuNhat = 10;
        $soThuHai = 5;
        #phép cộng +
        echo $soThuNhat + $soThuHai . "<br>";
        #phép trừ -
        echo $soThuNhat - $soThuHai . "<br>";
        #phép nhân *
        echo $soThuNhat * $soThuHai . "<br>";
        #phép chia /
        echo $soThuNhat / $soThuHai . "<br>";
        # += -= *= /= %=
        //echo $soThuNhat %= $soThuHai . "<br>";
        # so sánh: > < >= <= == !=


        // 7. Câu điều kiện
        //if("Điều kiện"){
            // logic
        // }
        // elseif("Điều kiện 2"){
            // logic
        // }
        // else{
            // logic
        // }

        //kiểm tra tổng của số thứ nhất và số thứ 2
        // (nếu < 15 thì in ra nhỏ hơn 15)
        // (nếu = 15 thì in ra bằng 15)
        // còn lại in ra lớn hơn 15

        $tong = $soThuNhat + $soThuHai;
        echo $tong . "<br>";
        if($tong < 15){
            echo "Nhỏ hơn 15" . "<br>";
        }
        elseif($tong == 15){
            echo "Bằng 15" . "<br>";
        }
        else{
            echo "Lớn hơn 15" . "<br>";
        }

        # 8.switch case
        $color = "red";
        switch ($color){
            case "red":
                echo "is red";
                break;
            case "blue":
                echo "is blue";
                break;
            default:
                echo "no color";
                break;

        }

        // 9. for
        for ($i=0; $i < 100; $i++) { 
            echo $i . "<br>";
        }


        // 10. mảng
        $mang = ["Anh", "Nhat Anh", "Vu Anh"];

        // Đếm phần tử
        echo count($mang) . "<br>";
        echo $mang[1] . "<br>";
        print_r($mang);
        $mang[0] = "Hai Anh";
        print_r($mang);
        $mang[] = "Tam"; //thêm phần tử vào mảng
        print_r($mang);
        #xóa
        unset($mang[3]);
        print_r($mang);

    ?>
</body>
</html>
