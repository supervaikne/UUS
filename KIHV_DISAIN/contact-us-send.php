<?php
if (isset($_POST['submit'])) {
    $msg = 'Name: ' .$_POST['name'] ."\n"
        .'Email: ' .$_POST['email'] ."\n"
        .'Comment: ' .$_POST['comment'];
    mail('matilda.software@gmail.com', 'KATSE', $msg);
    header('location: contact-us-thank-you.php');
} else {
    header('location: contact-us.php');
    exit(0);
}
?>


<h1>Thank You!</h1>
<p>Your message has been sent.</p>
<h1>Oops!</h1>
<p>Sorry, there was a problem sending your message.</p>