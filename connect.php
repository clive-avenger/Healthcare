<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"{
 //Get the form data
 $name=$_POST["name"]
 $email$_POST["email"]
 $date$_POST["date"]
 $time$_POST["time"]

//Send the confirmation email
$to=$email;
$subject="Appointment Confirmation";
$message ="Hi $name,\n\nYour appointment has been confirmed for $date at $time.We look forward to seeing you!\n\nThankyou,\nThe Online Healthcare Portal Team";
$headers = "From:kavenger666@gmail.com"."\r\n".
                                       

                                         "Reply-To:kavenger666@gmail.com"."\r\n".

                                          "X-Mailer:PHP/".phpversion();
mail($to,$subject,$message,$headers);


//Display the confirmation message
 
echo "Thank you for booking an appointment,$name!We have sent a confirmation email to $email.";
}
?>