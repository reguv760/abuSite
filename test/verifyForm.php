<?
	function is_valid_email($email) 
	{ 
		  $result = TRUE;
		  if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email)) 
		  {
			$result = FALSE;
		  }
		  return $result;
	}

	$formIsValid = true;
	
	if(isset($_POST['name']))
	{
		foreach($_POST as $key => $value)
		{
			if($key=="email")
			{
				if(!is_valid_email($value))
				{
					$_SESSION['message'] .= "<div id='errorMessage'>{$key} is invalid<br></div>";
					
					$formIsValid = false;
				}
			}
		}
		
		if($formIsValid)
		{
			$myName = $_POST['name'];
			$myPhone = $_POST['phone'];
			$myMessage = $_POST['message'];
			
			$cleanName = stripslashes($myName);
			$cleanMessage = stripslashes($myMessage);
			
			//$myRecipient="alim@abrahamlimlaw.com";
			$myRecipient="reguv760@gmail.com";
			$email_subject = 'Someone has sent an Inquiry for Abraham L. Lim';

			$headers  = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type: text/html; charset=utf-8" . "\r\n";
			$headers .= "From: form@abrahamlimlaw.com" . "\r\n";
			$headers .= "Bcc: admin@tessellationdesign.com" . "\r\n";
			
			$message_contents .= "<b>Name:</b> {$cleanName}<br>";
			$message_contents .= "<b>Phone:</b> {$_POST['phone']}<br>";
			$message_contents .= "<b>E-mail:</b> {$_POST['email']}<br>";
			$message_contents .= "<b>Message:</b> {$cleanMessage}<br><br>";

			$message_contents .= "<h5>Sent from <a href='http://www.abrahamlimlaw.com'>www.abrahamlimlaw.com</a></h5> ";

			$ok = mail($myRecipient, $email_subject, $message_contents, $headers); //send mail
			
			if($ok)
			{
				$_SESSION['message'] = "<div id='successMessage'>Your message was sent</div>";
			}
			else
			{
				$_SESSION['message'] = "<div id='errorMessage'>An error occurred. Please try again.</div>";
			}
		}
	}
	if(isset($_SESSION['message']))
	{	
		echo $_SESSION['message'];
		unset($_SESSION['message']);
	}
?>