<?php

 function smtpmailer($para, $de, $de_nome, $assunto,$body) {

        include("PHPMailer/PHPMailerAutoload.php");

        $email = new PHPMailer();
        $email->CharSet = "utf-8";
        $email->isSMTP();
        $email->SMTPDebug = 2;
        //Ask for HTML-friendly debug output
        $email->Debugoutput = 'html';

        $email->SMTPAuth= true;
        $email->Username = "azure_a7d6b1a8e7b3dd854d2fca2c194a9270@azure.com";
        $email->Password = "Ecomulheres2";
        $email->SMTPSecure = "ssl";
        $email->Host = "smtp.sendgrid.net";
        $email->Port = "465";

        $email->setFrom($de,$de_nome);
        $email->AddAddress($para);

        $email->Subject  =  $assunto; //"PHPMailer Mailing API Test";
        $email->IsHTML(true);
        $email->Body    = $body;
        if($email->Send())
        {
        //echo "Email Successfully sent";
            return true;
        }
        else
        {
        //echo "Error in Sending Mail".$email->ErrorInfo;
            return false;
        }

    }
?>