<?php 


//if logged in redirect to members page
if( $user->is_logged_in() ){ header('Location: index.php'); }

//if form has been submitted process it
if(isset($_POST['submit'])){

	//email validation
	if(!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
	    $error[] = 'Please enter a valid email address';
	} else {
		$a=$_POST['mail'];
		$stmt = $db->prepare("SELECT mail FROM user_data WHERE mail = '".$a."'");
		$stmt->execute(array(':mail' => $_POST['mail']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(empty($row['mail'])){
			$error[] = 'Email provided is not on recognised.';
		}

	}

	//if no errors have been created carry on
	if(!isset($error)){

		//create the activasion code
		$token = md5(uniqid(rand(),true));

		try {

			$stmt = $db->prepare("UPDATE user_data SET resetToken = :token, resetComplete='No' WHERE mail = :mail");
			$stmt->execute(array(
				':mail' => $row['mail'],
				':token' => $token
			));

			//send email
			$to = $row['mail'];
			$subject = "Password Reset";
			$body = "<p>Someone requested that the password be reset.</p>
			<p>If this was a mistake, just ignore this email and nothing will happen.</p>
			<p>To reset your password, visit the following address: <a href='".DIR."passwordreset.php?key=$token'>".DIR."passwordreset.php?key=$token</a></p>";

			$mail = new Mail();
			$mail->setFrom(SITEEMAIL);
			$mail->addAddress($to);
			$mail->subject($subject);
			$mail->body($body);
			$mail->send();

			//redirect to index page
			header('Location: index.php');
			exit;

		//else catch the exception and show the error.
		} catch(PDOException $e) {
		    $error[] = $e->getMessage();
		}

	}

}

//define page title
$title = 'Reset Account';

?>