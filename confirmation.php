<?php
require 'creds.php';
require_once 'vendor/autoload.php';

if(isset($_POST["name"], $_POST["email"], $_POST["message"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $headers = "Sporočilo od ".$name." (".$email.")";
    $msg = "Sporočilo:\n$message";
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $alert = "Neveljaven email naslov! Prosim poskusite znova.";
    } else { 
        $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
          ->setUsername($username)
          ->setPassword($password);

        $mailer = \Swift_Mailer::newInstance($transport);

        $message = \Swift_Message::newInstance($headers)
          ->setFrom($email)
          ->setTo($finalDestination)
          ->setBody($msg);
        $result = $mailer->send($message);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Merriweather" />
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet"> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Potrditev</title>
        
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/assets/css/style.css">
    
</head>
<body>
    <div class="container-fluid">

        <div class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2" id="panel">
                                
                <div class="col-xs-12" id="top">
                    <div class="col-xs-11" id="title">
                        <p class="title-1">Predlagajte temo ali postavite vprašanje.</p>
                    </div>
                    
                    <div class="col-xs-1" id="exit">
                        <button class="close">
                            <div id="exitl">
                                <div id="exitr">
                                </div>
                            </div>
                        </button>
                    </div>

                </div>
                
                <div class="col-xs-6" id="left">
                    <p class="text">
                        <span class="title-2">Lorem Ipsum is simply dummy text.</span>
                        <br><br>
                        Lorizzle ipsum pimpin’ sheezy amizzle, brizzle adipiscing yo. Nullizzle pot velizzle, shizzle my nizzle crocodizzle break it down, suscipit bling bling, sure vizzle, arcu.
                        <br><br>
                        Sed erizzle. Pimpin’ izzle shizzlin dizzle dapibus turpis tempizzle bling bling. 
                        <br><br>
                        That’s the shizzle suscipizzle. Integizzle semper velizzle sizzle ghetto.
                        <br><br>
                        Hvala za razumevanje,
                        <br>
                        tehnična ekipa Janeza Novaka    
                    </p>
                </div>
                
                <div class="col-xs-6" id="right">
                    <div class="alert">
                        <?php if($alert) { echo $alert; } ?> <!-- alert, če neveljaven email -->
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>
</body>
</html>