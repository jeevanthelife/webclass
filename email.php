<?php
if(isset($_POST['submit']))
	{

		$to=$_POST['to'];
		$subject=$_POST['subject'];
		$message=$_POST['message'];
			if(mail($to, $subject, $message))
				{
				echo "Mail Sent to $to successfully";
			}
			else
			{
				echo "Opps! Something Wrong! Pls Try Again";
			}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Email</title>
</head>
<body>
	<form method="POST" name="Email" action="" enctype="multipart/form-data">
		<input type="email" name="to" placeholder="me@mymail.com"><br/>

			<input type="text" name="subject" placeholder="Type Subject"><br/>

			<textarea name="message" rows=5 cols=40>
			</textarea>
			<br/>
			<input type="submit" name="submit" value="Send">
	</form>
</body>
</html>