<?php

$name =$_REQUEST['name'];
$email =$_REQUEST['email'];
$msg =$_REQUEST['Message'];

$to = 'gaoyinanthony@gmail.com';
$subject = 'Form Submission';
$message = "Name: " .$name. "\n". "email: " .$email. "\n". "Message: " .$msg;
$headers= "From: " .$email;

if(mail($to,$subject,$message,$headers))
{
        echo "<h1> Sent Sucessfully! Thank you"." ".$name.", I will contact you shortly";
}
else
{
    echo "<script type = 'text/javascript'>
    alert('There is an issue please try again later')
    </script>";



    /*mail("gaoyinanthony@gmail.com", "Personal Website Submission",$message, "From: $name <$email>");
    echo "<script type = 'text/javascript'>alert('your message sent sucessfully'); 
    window.history.log(-1);
    </script>";
    */
}


?> 