<?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $emailFrom = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $mailTo = "leojay.llur@gmail.com";
        $headers = "From: ".$mailFrom;
        $txt = "You have received an email from ".$name.".\n\n".$message;

        mail($mail, $subject, $txt, $headers);

        header("Location: contact-form.php?mailSent");
    }
?>

