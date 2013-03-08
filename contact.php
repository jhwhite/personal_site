<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$name = trim($_POST["name"]);
	$email = trim($_POST["email"]);
	$message = trim($_POST["message"]);
	
	if($name == "" OR $email == "" OR $message == "")
	{
		echo "You must specify a value for name, email address, and message.";
		exit;
	}

	foreach( $_POST as $value ){
  		if( stripos($value,'Content-Type:') !== FALSE ){
   		echo "There was a problem with the information you entered";
    	exit;
  		}
	}

	if ($_POST["address"] != "")
	{
		echo "Your form submission has an error.";
		exit;
	}

	require_once("includes/phpmailer/class.phpmailer.php");
	$mail = new PHPMailer();

	if(!$mail->ValidateAddress($email))
	{
		echo "You must specify a valid email address";
		exit;
	}

	$email_body = "";
	$email_body = $email_body . "Name: " . $name . "<br>";
	$email_body = $email_body . "Email: " . $email . "<br>";
	$email_body = $email_body . "Message: " . $message . "<br>";

	$mail->SetFrom($email, $name);
	$address = "jody@jody-white.com";
	$mail->AddAddress($address, "Jody White");
	$mail->Subject    = "Email from jody-white contact form";
	$mail->MsgHTML($email_body);

	if(!$mail->Send()) {
	  echo "There was a problem sending the email: " . $mail->ErrorInfo;
	  exit;
	}

	header("Location: contact.php?status=thanks");
	exit;
}
?>
<?php
$pageTitle = "Contact Jody";
$section = "contact";
$description = "Contact me form for Jody White";
include('includes/header.php');
?>
    <div class="container">
<div class="row">
	<div class="span4">
	</div>

	<div class="span4">
		<legend>Email Me:</legend>

			<?php
			if(isset($_GET["status"]) AND $_GET["status"]=="thanks") 
			{ ?>
				<div>
					<p>Thanks for the email!</p>
				</div>
			<?php } 
			else { ?>
				<form method="post" action="contact.php">
					<fieldset>
						<label for="name">Name:</label>
						<input name="name" type="text" placeholder="Name" id="name">

						<label for="email">Email:</label>
						<input name="email" type="email" placeholder="email" id="email"></br>
						<!--
						<label for="subject">Subject:</label>
						<input name="subject" type="text" placeholder="Subject" id="subject"></br>
						-->
						<label for="message">Message:</label>
						<textarea name="message" rows="10" id="message"></textarea></br>

						<label style="display: none;" for="address">Address</label>
						<input style="display: none;" type="text" name="address" id="address">

						<button type="submit" class="btn btn-success">Submit</button>
					</fieldset>
				</form>
			<?php } ?>
	</div>
</div>

<?php include('includes/footer.php'); ?>