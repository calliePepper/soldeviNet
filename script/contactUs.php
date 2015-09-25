<?php
    include "phpmailer/class.phpmailer.php";
    if (isset($_POST['name'])) {$name = $_POST['name'];$email = $_POST['email'];$message = $_POST['message'];} else {$name = $_GET['name'];$email = $_GET['email'];$message = $_GET['message'];}
    $body='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
    <html xmlns="http://www.w3.org/1999/xhtml"> 
        <head> 
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <meta name="viewport" content="width=1024" />       
            <title>Coffee email</title>
            <style>
                p {
                    margin-bottom:18px;
                }
            </style>
        </head>
        </body>
            <h1>An Email!</h1>
            <p>'.$name.' sent us an email from '.$email.'</p>
            <p>'.$message.'</p>
        </body>
    </html>';
    if (mailTime('faedaunt@gmail.com', 'faedaunt+autoMailer@gmail.com', 'New-Growth', 'Contacted from website!', $body)) {
        $status = 'Success';
        $message = 'Email sent';
    } else {
        if (mail('faedaunt@gmail.com', 'Contacted from website!', $body, "MIME-Version: 1.0\r\nContent-type:text/html;charset=UTF-8\r\nFrom: faedaunt+autoMailer@gmail.com\r\n")) {
            $message = "Main email failed, backup worked";
            $status = "Email sent";
        } else {
            $message = 'Emailing failed';
            $status = 'Failed';
        }
    }            
    $data = array(  
        'status' => $status,  
        'message' => $message,
        'email' => $email
    );  

    echo json_encode($data);  
  
    exit;  

 ?>