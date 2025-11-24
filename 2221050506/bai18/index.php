<?php
    //cookie
    #lưu ở phía người dùng
    #dùng cho những thông tin ít quan trọng
    $cookieName = "user";
    $cookieValue = "Ngoc Anh";
    // 86400 = 30 ngày
    // set cookie($cookieName, $cookieValue, time()+(86400), "/");

    if(isset($_COOKIE[$cookieName]) ){
        echo "cookie đã tồn tại";
    }
    else{
        echo "cookie chuea tồn tại";
    }

    //session
    # Thông tin đăng nhập, giỏ hàng,...
    session_start();
    $_SESSION["name"] = "NGOC ANH 123";

    echo $_SESSION["name"];
?>