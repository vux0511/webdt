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

            if (isset($_POST['login'])) {
                $user = $_POST['user'];
                $password = $_POST['password'];


                if ($user != '' && $password != '') {
                    $sqlCheckUser = "SELECT * FROM user WHERE user = '$user'";
                    $checkUser = selectOne($sqlCheckUser);

                    if ($checkUser) {
                        $sqlCheck = "SELECT * FROM user WHERE user = '$user' AND password = '$password'";
                        $check = selectOne($sqlCheck);
                        if ($check) {
                            setcookie("login", $user, time()+36000, '/');
                            header('location:index.php?controller=home');
                            ob_end_flush();
                        } else {
                            $error = "<h5 style='color: red; font-size='16px'>Lỗi : Không đúng mật khẩu! Vui lòng thử lại</h5>";
                        }
                    } else {
                        $error = "<h5 style='color: red; font-size='16px'>Lỗi : Không có tài khoản trong hệ thống!</h5>";
                    }
                } elseif ($user == '' || $password == '') {
                    $error = "<h5 style='color: red; font-size='16px'>Không được để trống tài khoản hoặc mật khẩu</h5>";
                }

                
            }
            require_once ('view/public/layout/login.php');
            require_once ('view/public/layout/footer.php');
            break;
    }
?>