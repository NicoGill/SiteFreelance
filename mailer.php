<?php
/* Set e-mail recipient */
$myemail = "nicogdevweb@gmail.com";

/* Check all form inputs using check_input function */
$name = check_input($_POST['ngNom'], "Votre nom");
$email = check_input($_POST['ngMail'], "Votre adresse mail");
$subject = check_input($_POST['ngSujet'], "Sujet du message");
$message = check_input($_POST['ngMessage'], "Votre message");

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("Adresse mail invalide");
}
/* Let's prepare the message for the e-mail */

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

$message_final = "

<p>Une personne vous à envoyé un message depuis le formulaire de contact</p>

<p><b>Nom</b>: $name </p>
<p><b>Mail</b>: $email </p>
<p><b>Sujet</b>: $subject </p>

<p><b>Message</b>: </p>" . $message;


/* Send the message using mail() function */
mail($myemail, $subject, $message_final, $headers);

/* Redirect visitor to the thank you page */
echo "Merci de m'avoir contacté, je vous répondrai dès que possible !";
exit();

/* Functions we used */
function check_input($data, $problem='')
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);

	if ($problem && strlen($data) == 0)	{
		echo($problem);
	}

	return $data;
}

?>