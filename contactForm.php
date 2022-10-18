<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    
    if(isset($_POST['submit'])){
        if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $firstname =$_POST['firstname'];
            $surname =$_POST['surname'];
            $email =$_POST['email'];
            $tel =$_POST['tel'];
            $service =$_POST['service'];
            $message =$_POST['message'];
        
            $mailTo = "dkettle01@outlook.com";
    
            $headers = "From: danny.kettle@dkwebservices.co.uk";
            $txt = "You have received an e-mail from ". $firstname . " " . $surname . ".\r\n" .$message . ".\r\n Contact Number:" . $tel . ".\r\n Email: " . $email;
        
            $secretKey = "6Le0FE8eAAAAAGnBrUBAWBq1MA6-x5Y9pAMhHtRj";
            $responseKey = $_POST['g-recaptcha-response'];
            $userIP = $_SERVER['REMOTE_ADDR'];
            $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
        
            $response = file_get_contents($url);
            $response = json_decode($response);
            
            if($response->success){
                mail($mailTo, $service, $txt, $headers);
                header("Location: contact/?message_sent", 202);
            }
            else{
                //Failed
                header("Location:contact/?catchpha", 401);
            };
        }
        else{
            header("Location:contact/?message_failed", 401);
        };
    }
    else{
         header("Location:contact/?form_failed", 401);
         die(); // Stops crawlers   
    };
?>  