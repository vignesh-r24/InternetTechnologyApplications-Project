<!doctype html>
<html>
 <head>
  <title>Process and store</title>
 </head>
<body>
<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];


$link = mysqli_connect("localhost", "root", "MySqlVignesh", "ITA_Project");
// Check connection

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

// Attempt insert query execution

$sql = "INSERT INTO messages (Name, Email, Message) VALUES ('$field_name', '$field_email', '$field_message')";

if(mysqli_query($link, $sql)){

    echo "Records inserted successfully.";

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

 

Close connection

//mysqli_close($link);

$mail_to = 'vigneshrv24@gmail.com';
$subject = 'Message from a site visitor '.$field_name;

$username="root";

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";


/*
$mail_status = mail('$mail_to', '$subject', '$body_message', '$headers');
echo $mail_status ;
if($mail_status)
{
	echo "Mail has been sent!";
}

else
{
	echo "Mail NOT sent!";
}

mysqli_close($link);
*/
/*
if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly.');
		window.location = 'index.html';
	</script>
	<?php

}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to vigneshrv24@live.com');
		window.location = 'index.html';
	</script>
	<?php
}
*/
?>
