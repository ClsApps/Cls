<?php
	//alert("We are in Mail now");
	//echo "We are in Mail now";

	 
	$name = $_POST['name'];
	$email= $_POST['email'];
	$phone= $_POST['phone'];
	$message= $_POST['message'];

	$to = "cls.apps.mail@gmail.com";
	$subject = "Mail From Your website";
	$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Phone =" . $phone . "\r\n Message =" . $message;
	$headers = "From: cls.x.me@gmail.com" . "\r\n" . "CC: cls.apps.me@gmail.com";
mail($to,$subject,$txt,$headers);

	//if(mail($to,$subject,$txt,$headers)) echo "Mail was successfully sent" . "\r\n";
	//else echo "Mail Failled to send your Message" . "\r\n";
	
	//echo "Mail PHP End Just a Test"  . "\r\n";
	//alert("Mail PHP End Just a Test");
	//header("Location:success.html");
?>
