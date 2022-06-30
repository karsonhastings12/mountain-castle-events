<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'mountaincastleevents@gmail.com';

    $email_subject = "New Booking Requested";

    $email_body =   "Visitor Name: $name.\n";
                    "Visitor Phone: $phone.\n";
                    "Visitor email: $visitor_email.\n";
                    "Visitor Message: $message.\n";


    $to = "mountaincastleevents@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers = "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
?>

