<?php

header("Content-type:application/json; charset:utf-8");


$error = false;

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];
//$form = $name.$email.$comment;
$form  = "Nimi: " . $name . "\nEmail: " . $email . " \nKommentaar: " . $comment;

//echo($_POST["comment"]);

if(empty($name) || empty($email) || empty($comment))
    $error = true;

if($error==false) {
    $data['response'] = "success";
    $data['content'] = "Thank you! your message has been sent successfully.";
    mail('matilda.software@gmail.com', 'STARTERPACK', $form);
}
else {
    $data['response'] = "error";
    $data['content'] = "Your message has not been sent. Please complete all required fields.";
}

echo json_encode($data);