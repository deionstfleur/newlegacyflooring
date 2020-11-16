<?php
$result="";

if(isset($_POST['submit'])){
    require '/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $mail->Host='saintfamilyvisuals@gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='deionstfleur13@gmail.com';
    $mail->Password="Blessed$2020";


    $mail->setFrom($_Post['email'],$_POST['name']);
    $mail->addAddress('saintfamilyvisuals@gmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['name']);

    $mail->isHTML(true);
    $mail->Subject='Form Submission: '.$_POST['subject'];
    $mail->Body='<h1 align=center>Name: '.$_POST['name'].'<br>Email: '.$_POST['email'].'<br>Message: '.$_POST['msg'].'<h1>';

    if(!$mail->send()){
        $result="Something went wrong. Please try again.";

    }
    else{
        $result="Thanks".$_POST['name']."for contacting us";
    }
}

?>

