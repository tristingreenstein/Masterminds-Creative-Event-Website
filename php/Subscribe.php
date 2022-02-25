<?php
header('Location: index.html');
#Receive user input
$email_address = $_POST['email_address'];


#Send email
$headers = "From: "+$email_address;
$message = $email_address;
$sent = mail('', 'Subscribe Form Submission', $email_address);

#Thank user or notify them of a problem
if ($sent) {
echo '<script>alert("Thanks for subscribing")</script>';
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
echo '<script>alert("Thanks for subscribing")</script>';
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