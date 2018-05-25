<?php
	$name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $password = $_POST['password'];
    $subject = 'Muzi FirstView Task';
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= "From:noreply@yourdomain.com"."\r\n";
	$headers .= "Reply-To:".$email;	
    $body ="<p style='font-family:Arial, Helvetica, sans-serif; font-size:12px;'>Name: ".$name."<br/>Email:  ".$email."<br/>Date: ".$date."<br/>Password: ".$password."</p>
			<p style='font-family:Arial, Helvetica, sans-serif; font-size:12px;'>---<br/>Kind Regards <br/><strong>FirstView Task</strong></p>";
if(mail ($email, $subject, $body, $headers))
{
  ?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<script>alert("Your message has been sent successfully. We will contact you shortly.");</script>
	<meta HTTP-EQUIV="REFRESH" content="0; url=../index.html"> 

	</head>
	</html>
	<?php
	exit;
	}
	else
	{
		?>
			<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<script>alert("Oops! An error occurred. Try sending your message again.");</script>
	<meta HTTP-EQUIV="REFRESH" content="0; url=../index.html"> 

	</head>
	</html>
		<?php
	exit;
	}
	?>