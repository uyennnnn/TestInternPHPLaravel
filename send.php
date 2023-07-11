<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Biến trạng thái gửi email và thông báo
$isSent = false;
$errorMsg = '';

if(isset($_POST["send"])){
    try {
        $mail = new PHPMailer(true);

        // Cấu hình SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'buiuyen1207@gmail.com';
        $mail->Password = 'rpaqukydavcmdtcl';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        // Thiết lập thông tin người gửi
        $mail->setFrom('buiuyen1207@gmail.com', 'Yopaz');

        // Thêm địa chỉ email người nhận
        $mail->addAddress($_POST["email"]);

        // Thiết lập email dạng HTML
        $mail->isHTML(true);

        // Thiết lập tiêu đề và nội dung email
        $mail->Subject = 'Thank you for contacting us';
        $mail->Body = 'Dear ' . $_POST["name"] . ',<br><br>Thank you for your interest in our company. After reviewing your feedback, we will get back to you soon.<br><br>Best regards, <br>The Yopaz Team';

        // Gửi email
        $mail->send();

        // Cập nhật trạng thái gửi thành công
        $isSent = true;
    } catch (Exception $e) {
        // Ghi nhận lỗi nếu có
        $errorMsg = 'An error occurred while sending the email: ' . $mail->ErrorInfo;
    }
}

// Chuyển hướng về trang chủ sau khi gửi email thành công
if ($isSent) {
    header("Location: index.php?sent=true");
    exit();
}
?>
