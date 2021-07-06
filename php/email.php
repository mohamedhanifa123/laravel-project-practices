<!DOCTYPE html>
<html>
<head>
<title>Simple Feedback Form</title>
<style>label{display:block;}</style>
</head>
<body>

<form action="/feedback_form.php" method="post">

<label>Email Address</label>
<input type="text" name="email_address" size="40">

<label>Your Feedback</label>
<textarea name="feedback" cols="50" rows="10"></textarea>

<input type="submit" name="send" value="Submit">

</form>
</html>
<?php

//Receive user input
$email_address = $_POST['email_address'];
$feedback = $_POST['feedback'];

//Filter user input
function filter_email_header($form_field) {  
return preg_replace('/[nr|!/<>^$%*&]+/','',$form_field);
}

$email_address  = filter_email_header($email_address);

//Send email
$headers = "From: $email_addressn";
$sent = mail('you@domain.com', 'Feedback Form Submission', $feedback, $headers);

//Thank user or notify them of a problem
if ($sent) {

?><html>
<head>
<title>Thank You</title>
</head>
<body>
<h1>Thank You</h1>
<p>Thank you for your feedback.</p>
</body>
</html>
<?php

} else {

?><html>
<head>
<title>Something went wrong</title>
</head>
<body>
<h1>Something went wrong</h1>
<p>We could not send your feedback. Please try again.</p>
</body>
</html>
<?php
}
?>