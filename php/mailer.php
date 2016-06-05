<?php
  $username = 'username';
  $password = 'password';
  $admin = 'username@gmail.com';

  if(!isset($_POST)) {
    exit();
  };

  require_once './mail/PHPMailerAutoload.php';
  require_once 'language.php';

  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $mail = new PHPMailer;

  $mail->setLanguage($current_language, './mail/language/');

  // $mail->SMTPDebug = 3;                                 // Enable verbose debug output

  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = $username;                          // SMTP username
  $mail->Password = $password;                          // SMTP password
  $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 587;                                    // TCP port to connect to

  $mail->setFrom($admin, 'HBMA');
  $mail->addAddress($admin);     // Add a recipient
  $mail->addReplyTo($admin, 'HBMA');

  $mail->isHTML(true);                                  // Set email format to HTML

  $mail->Subject = $subject;
  $mail->Body    = $message;
  $mail->AltBody = $message;

  if(!$mail->send()) {
    echo $language['common']['mailer']['error'].$mail->ErrorInfo;
  }
  else {
    echo $language['common']['mailer']['sent'];
  }
?>