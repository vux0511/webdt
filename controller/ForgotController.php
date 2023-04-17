<?php
    ob_start();
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    if (isset($_GET["act"])) {
        $act = $_GET["act"];
    } else {
        $act = '';
    }

    $ma_pass = "";
    $code = $_POST['code'];
    $thongbao = '';
    $error = '';

    switch ($act) {
        default:
            require_once ('view/public/layout/header.php');

            if (isset($_POST['sendCode'])) {
                $email_forgot = $_POST['email_forgot'];
                $sql = "SELECT * FROM user WHERE email = '$email_forgot'";
                echo $sql;
                echo "----------------------------------------------------------------";
                $check = selectOne($sql);
                if ($check) {
                    $mail = new PHPMailer(true);
                    try {
                        $mail->SMTPDebug = SMTP::DEBUG_SERVER;// Enable verbose debug output
                        $mail->isSMTP();// gửi mail SMTP
                        $mail->Host = 'smtp.gmail.com';// Set the SMTP server to send through
                        $mail->SMTPAuth = true;// Enable SMTP authentication
                        $mail->Username = 'hvvu.20it11@vku.udn.vn';// SMTP username
                        $mail->Password = 'Hoangvanvu1512'; // SMTP password
                        $mail->SMTPSecure = 'tls';
                        $mail->Port = 587; // TCP port to connect to
                        $mail->setFrom('hvvu.20it11@vku.udn.vn', 'Cua Hang Dien Thoai');
                        $mail->addAddress('vux.0511@gmail.com', ''); // Add a recipient
                        $mail->isHTML(true);   // Set email format to HTML
                        $mail->Subject = 'Dat lai mat khau!';
                        $ma_pass = rand(100000, 999999);
                        setcookie("ma_pass", md5($ma_pass), time() + 180,'/');
                        setcookie("email", $email_forgot, time() + (86400 * 30), "/");
                        echo $backup;
                        $mail->Body = "<p>Bạn đang truy cập web ẩm thực </p><p>Mã : <b>$ma_pass</b></p>";
                        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                        $mail->send();
                        echo 'Message has been sent';
                        } catch (Exception $e) {
                            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }
                } else {
                    $error = "<h5 style='color: red; font-size='16px'>Lỗi : Sai tài khoản hoặc mật khẩu ! Vui lòng nhập lại</h5>";
                }
                
            }

            if (isset($_POST['verifyCode'])) {
                $email_forgot = $_POST['email_forgot'];
                if ($code == "") {
                    $error = "Không được để trống!";
                } elseif (md5($code) == $_COOKIE['ma_pass']) {
                    echo "Trùng";
                    header("http://localhost/vuxphone/index.php?controller=resetpass");
                } elseif (md5($code) != $_COOKIE['ma_pass']) {
                    $error = "Nhập sai mã xác minh! Vui lòng nhập lại!";
                }
            }

            require_once ('view/public/layout/forgotpass.php');
            require_once ('view/public/layout/footer.php');
            break;
    }
?>