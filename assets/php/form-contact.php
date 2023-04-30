<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $message = $_REQUEST['message'];

    // Set your email address where you want to receive emails. 
    $to = '';
    $subject = 'Contact Request From Website';
    $headers = "From: " . $name . " <" . $email . "> \r\n";
    $send_email = mail($to, $subject, $message, $headers);
    // set up smtp

    echo ($send_email) ? 'success' : 'error';

} else {
    echo 'error';
}
?>