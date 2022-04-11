<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];

$mail = new PHPMailer(true);

try {
  //Gmail 認証情報
  $host = 'smtp.gmail.com';
  $username = 'yoshioka.engineer@gmail.com'; // example@gmail.com
  $password = 'nutdjtplmtvmveiv';

  //件名・本文
  $subject = $name . ' 様からのお問い合わせ';
  $body = <<<EOT
  お名前：{$name} 様
  メールアドレス：{$email}

  本文：
  $text
  EOT;

  //メール設定
  $mail->SMTPDebug = 2; //デバッグ用
  $mail->isSMTP();
  $mail->SMTPAuth = true;
  $mail->Host = $host;
  $mail->Username = $username;
  $mail->Password = $password;
  $mail->SMTPSecure = 'tls';
  $mail->Port = 587;
  $mail->CharSet = "utf-8";
  $mail->Encoding = "base64";
  $mail->setFrom("yoshioka.engineer@gmail.com",$name."様");
  $mail->addAddress("yoshioka.engineer@gmail.com", "");
  $mail->Subject = $subject;
  $mail->Body    = $body;

  //メール送信
  $mail->send();
} catch (Exception $e) {

}
?>
<script>
  location.href='https://yoshioka-engr.com';
</script>
