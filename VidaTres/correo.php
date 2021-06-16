<?php

    if (isset($_POST['enviar'])){
        if(!empty($_POST['name']) && !empty($_POST['nameSec']) && !empty($_POST['email']) && !empty($_POST['message'])){
            $name = $_POST['name'];
            $nameSec = $_POST['nameSec'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $header = "From: roodrigoquinteros@gmail.com" . "\r\n";
            $header.= "Reply-to: roodrigoquinteros@gmail.com" . "\r\n";
            $header.= "X-Mailer: PHP/". phpversion();
            $mail = @mail($email,$name,$message, $header);
            if($mail){
                echo "<h2>¡Enviado Correctamente!</h2>";
            }
        }
    }
