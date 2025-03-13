<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title> 
</head>
<body>
    <form action="index.php" method="post">
    <h1>Contact Us</h1>
    Email:<br><label for=""><input type="email" name="email" id=""><br><br>
    Subject:<br><label for=""><input type="text" name="subject" id=""><br><br>
    Message:<br><label for=""><textarea name="message" id="" cols="30" rows="10"></textarea><br><br>
    <button type="submit" name="send">Send</button>
    </form>
    <?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    if(isset($_POST['send'])){
        $mail = new PHPMailer(true);                             
        $mail->isSMTP();                
        $mail->Host       = "smtp.gmail.com";     
        $mail->SMTPAuth   = true;                  
        $mail->Username   = "gyasuddinansari7854@gmail.com";                
        $mail->Password   = "vgba mlht ulim sbob"; 
        $mail->SMTPSecure ="ssl";
        $mail->Port       = 25;  
        $mail->setFrom($_POST['email']);
        $mail->addAddress("gyasuddinansari7854@gmail.com");   
        $mail->isHTML(true);                           
        $mail->Subject = $_POST["subject"];
        $mail->Body = $_POST["message"];    
        $mail->send();
            echo "<script>alert('Message sent successfully!')</script>";
        }
        else{
            echo "error";
        }
?>
</body>
</html>

