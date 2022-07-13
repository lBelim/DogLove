<?php

if (isset($_POST['e-mail']) && !empty($_POST['e-mail'])) {

	$email = addslashes($_POST['e-mail'])


	$to = "rodrigo-ssbm@hotmail.com"
	$subjet = "Formulario DogLove"
	$body = "e-mail" .$email;

	$header = "From: lberlim4@gmail.com"."\r\n". "Reply-To:" .$email "\r\n".
	"X=Mailer:PHP/".phpversion();


	if (mail($to, $subject, $body, $header)){
		echo("E-mail enviado com sucesso!");
	}

	else{
	echo ("O E-mail não pode ser enviado!");
	}

}

?>