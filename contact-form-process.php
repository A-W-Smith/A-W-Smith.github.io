<?php
if (isset($_POST['Email'])) {

    $email_to = "aws2411@gmail.com";
    $email_subject = "New RSVP submission";

    $name = $_POST['name']; // required

    $email = "francescag9@outlook.com"
    $email_message = "Form details below.\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Name: " . clean_string($name) . "\n";

    // create email headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
?>

    Thank you for RSVPing!

<?php
}
?>