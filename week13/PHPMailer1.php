<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// 設置郵件發送函數
function sendEmail($to, $subject, $content) {
    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = false;                     // 啟用或禁用調試模式
        $mail->isSMTP();                              // 使用 SMTP
        $mail->Host       = 'smtp.gmail.com';         // SMTP 伺服器地址
        $mail->SMTPAuth   = true;                     // 啟用 SMTP 認證
        $mail->Username   = 'astersun0109@gmail.com'; // SMTP 用戶名
        $mail->Password   = 'cgli cwpt agsw xkuw';    // SMTP 密碼
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // 启用加密，需要设置为PHPMailer::ENCRYPTION_SMTPS
        $mail->Port       = 465;                      // SMTP 端口
        $mail->CharSet    = 'utf-8';                  // 設置郵件編碼為 UTF-8

        // 設置郵件內容
        $mail->setFrom('astersun0109@example.com', 'Mailer');
        $mail->addAddress($to);                      // 添加收件人
        $mail->addReplyTo('astersun0109@gmail.com', 'Information');

        // 設置郵件內容和主題
        $mail->isHTML(true);                         // 設置郵件格式為 HTML
        $mail->Subject = $subject;                   // 設置郵件主題
        $mail->Body    = $content;                   // 設置郵件內容
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();                              // 發送郵件
        echo 'Message has been sent';                // 顯示成功消息
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; // 顯示錯誤消息
    }
}

// 讀取資料庫中的郵件地址並發送郵件
$link = mysqli_connect('localhost', 'root', '', 'email');
if (!$link) {
    die("資料庫連接失敗: " . mysqli_connect_error());
}

$SQL = "SELECT email FROM mailing_list"; // 假設您的郵件地址在 mailing_list 表中
$result = mysqli_query($link, $SQL);

while ($row = mysqli_fetch_assoc($result)) {
    $to = $row['email'];
    $subject = $_POST['subject'];   // 從表單獲取主題
    $content = $_POST['content'];   // 從表單獲取內容
    sendEmail($to, $subject, $content); // 調用發送郵件函數
}

mysqli_close($link); // 關閉資料庫連接
?>
