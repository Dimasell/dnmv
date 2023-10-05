<?php
$name = $_POST['email']:
// $email = $_POST['name']:
// $subject = $_POST['name']:
// $message = $_POST['name']:

$mailheader ="From:" .$name/"<".$email.">\r\n";

$recipient = "Dimasset9809@gmail.com";

mail($recipient. $mailheader) or die("Eror!")

echo"

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" content="IE-edge">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title>Register</title>
        <link ref="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">

            <div class="title-wrapper">
              <h2 class="cta-title">Thanks For Submiting</h2>
              <p class="cta-text">Go to back <a href="index.html">homepage</a>.</p>
            </div>
  
          </div>
    </body>
</html>


";|

?>
