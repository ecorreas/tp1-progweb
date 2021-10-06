<?php
function sendEmail($fullname,$email){
    $host= "us-cdbr-east-04.cleardb.com";
    $username = "b426bb20ab8a68";
    $password = "9c8ab2fd";
    $database = "heroku_dbaba206ac6b0df";
    $con = new mysqli($host,$username,$password,$database);
    
    $link="<a href='https://bolicho-alegrete.herokuapp.com/updatePassword.php?key=".$email."'>Clique aqui para redefinir sua senha</a>";
    require_once('phpmail/PHPMailerAutoload.php');
    $mail = new PHPMailer();
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    // enable SMTP authentication
    $mail->SMTPAuth = true;                  
    // GMAIL username
    $mail->Username = "mail@bolicho-alegrete.heroku.com";
    // GMAIL password
    $mail->Password = "12345678";
    $mail->SMTPSecure = "ssl";  
    // sets GMAIL as the SMTP server
    $mail->Host = "smtp.gmail.com";
    // set the SMTP port for the GMAIL server
    $mail->Port = "465";
    $mail->From='mail@bolicho-alegrete.heroku.com';
    $mail->FromName='Bolicho Alegrete';
    $mail->AddAddress($email, $fullname);
    $mail->Subject  =  'Redefinição de senha';
    $mail->IsHTML(true);
    $mail->Body    = 'Clique no link para redefinir sua senha '.$email.'';
    if($mail->Send())
    {
        header('Location: https://bolicho-alegrete.herokuapp.com/emailEnviado.html');
        die();
    }
    else
    {
        echo ("Mail Error - >".$mail->ErrorInfo);
    }
}

function recoverPassword($email,$pass){
    $host= "us-cdbr-east-04.cleardb.com";
    $username = "b426bb20ab8a68";
    $password = "9c8ab2fd";
    $database = "heroku_dbaba206ac6b0df";
    $con = new mysqli($host,$username,$password,$database);
    $sql = "UPDATE user set password='$pass' where email='$email'";
    if($con->query($sql) == TRUE){
        return true;
    }else{
        return false;
    }
}