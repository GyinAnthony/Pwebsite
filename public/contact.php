<?php

$name =$_REQUEST['name'];
$email =$_REQUEST['email'];
$msg =$_REQUEST['Message'];

$to = 'gaoyinanthony@gmail.com';
$subject = 'Form Submission';
$message = "Name: " .$name. "\n". "email: " .$email. "\n". "Message: " .$msg;
$headers= "From: " .$email;

if (empty($name) || empty($email) || empty($msg))
{
    echo "Please fill all the fields";
}
else
{
    if(mail($to,$subject,$message,$headers))
    {
        echo "<h1> Sent Sucessfully! Thank you"." ".$name.", I will contact you shortly";
    }



    /*mail("gaoyinanthony@gmail.com", "Personal Website Submission",$message, "From: $name <$email>");
    echo "<script type = 'text/javascript'>alert('your message sent sucessfully'); 
    window.history.log(-1);
    </script>";
    */
}


?> 