<?php
function sendMail($emailRecipient, $nameRecipient,$subject,$content){
    require_once 'src/PHPMailer.php';

    $mail = new PHPMailer(true);    
    try {
        //Server settings
        $mail->CharSet = "UTF-8";
        $mail->SMTPDebug = 0;      
        $mail->isSMTP();   
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;     
        $mail->Username = 'huonghuong08.php@gmail.com'; 
        $mail->Password = 'qwertyuiop123@';    
        $mail->SMTPSecure = 'tls';      
        $mail->Port = 587;   //ssl: 465

        //Recipients
        $mail->setFrom('huonghuong08.php@gmail.com', 'Huong');

        $mail->addAddress($emailRecipient, $nameRecipient);    
        $mail->addReplyTo('huonghuong08.php@gmail.com', $subject);

        //Content
        $mail->isHTML(true); 
        $mail->Subject = $subject;
        $mail->Body    = $content;
        //$mail->AltBody = 'Chào bạn......';

        $mail->send();
        return true;

    } catch (Exception $e) {
        return false;
    }
}