<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "mika@amlstudio.se";
    $headers = "From: ". $mailFrom;
    $txt = "You have recieved an e-mail from ".$name.".\n\n".$message;


    mail($mailTo, $txt, $headers);

    header("Location: front-page-contact.php?mailsend");
}
