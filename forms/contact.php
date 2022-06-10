<?php
$_name=$_POST['name'];
$_email=$_POST['email'];
$_subject=$_POST['subject'];
$_message=$_POST['message'];
$myEmail="bernardgwatura19@gmail.com";


 if (!mail($myEmail, $_subject, $_message)) {

                                                    echo "Email sending failed...";
                                                }
                                                else echo "Email successfully sent";






?>