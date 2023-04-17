<?php
    ob_start();

    if (isset($_GET["act"])) {
        $act = $_GET["act"];
    } else {
        $act = '';
    }

    $thongbao = '';
    $error = '';

    switch ($act) {
        default:
            require_once ('view/public/layout/header.php');

            if (isset($_POST['complete'])) {
                $passnew = $_POST['passnew'];
                $re_passnew = $_POST['re_passnew'];
                $email = $_COOKIE["email"];
                $sqlSelectId = "SELECT * FROM user WHERE email = '$email'";

                if ($passnew == $re_passnew && strlen($passnew) > 6 && strlen($passnew) > 6) {
                    $sql = "UPDATE user SET password='$passnew' WHERE email = '$email'";
                    if (execute($sql)) {
                        $success = "<h6 style='color: green;font-size:17px'>Cập nhập mật khẩu mới thành công</h6>";
                        setcookie("email", "", time()-3600);
                        unset($_COOKIE["email"]);
                    }
                } elseif (strlen($passnew) <= 6 || strlen($passnew) <= 6) {
                    $fail = "<h6 style='color: red;font-size:17px'>Mật khẩu phải có độ dài trên 6 ký tự!</h6>";
                } elseif ($passnew != $re_passnew || strlen($passnew) > 6 || strlen($passnew) > 6) {
                    $fail = "<h6 style='color: red;font-size:17px'>Mật khẩu phải trùng nhau!</h6>";
                }
            }
            require_once ('view/public/layout/resetpass.php');
            require_once ('view/public/layout/footer.php');
            break;
    }
?>