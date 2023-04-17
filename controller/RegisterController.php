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

            if (isset($_POST['register'])) {
                $user = $_POST['user'];
                $password = $_POST['password'];
                $re_password = $_POST['re_password'];

                // if ($user == '' || $password == '' || $re_password == ) {
                //     $error = "<h4 style='color: red; font-size='16px'>Lỗi : Không được để trống !</h4>";
                //     echo $user;
                // }

                if ($user != '' && $password != '' && $re_password) {
                    $sqlCheckUser = "SELECT * FROM user WHERE user = '$user'";
                    $checkUser = selectOne($sqlCheckUser);
                    if ($checkUser) {
                        //Nếu tồn tại trong hệ thống
                        echo "2";

                        $error = "<h4 style='color: red; font-size='16px'>Lỗi : Tài khoản này đã tồn lại trong hệ thống. Vui lòng thử tài khoản khác </h4>";
                    } else {
                        // echo "11111//";
                        // echo $password;
                        // echo $re_password;
                        // echo $password == $re_password;
                        // echo strlen($password) > 6;

                        if ($password == $re_password && strlen($password) > 6 && strlen($re_password) > 6) {
                           // $insertUser = insertUser($user, $password);
                            $sqlInsert = "INSERT INTO user (user, password, lever) VALUES ('$user', '$password', '0')";
                            echo $sql;
                            if (execute($sqlInsert)) {
                                $thongbao = "<h4 style='color: green; font-size='16px'>Đăng kí thành công. Vui lòng đăng nhập lại ! </h4>";
                            } else {
                                $thongbao = "<h4 style='color: green; font-size='16px'>Đăng kí thất bại</h4>";

                            }
                        } elseif (strlen($password) <= 6 || strlen($re_password) <= 6) {
                            echo "3";

                            $error = "<h4 style='color: red; font-size='16px'>Lỗi : Mật khẩu phải có độ dài trên 6 ký tự!</h5>";
                        } elseif ($password != $re_password || strlen($password) > 6) {
                            $error = "<h4 style='color: red; font-size='16px'>Lỗi : Mật khẩu phải trùng nhau!</h5>";
                            echo "4";
                        }
                    }
                }else {
                    $error = "<h4 style='color: red; font-size='16px'>Lỗi : Không được để trống !</h4>";

                }
                
            }
            require_once ('view/public/layout/register.php');
            require_once ('view/public/layout/footer.php');
            break;
    }
?>