<html>
<head>

<?php include "php/header.php"?>

<?php include "php/navbar.php"?>

<link href="CSS/contact.css" rel="stylesheet">
		<link type="CSS/contact.css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:500" />
<link rel="stylesheet" href="CSS/contact.css">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<title>Formulaire de contact</title>
</head>
<body>


<div class="contact-form">
<h2>Contactez moi</h2>
<form method="post" action="mail.php">
    <input type="text" name="nom" placeholder="Votre nom" required>
    <input type="text" name="phone" placeholder="Numéro de téléphone" required>
    <input type="email" name="email" placeholder="Votre Email" required>
    <textarea name="message" placeholder="Votre message" required></textarea>

    <form action="?" method="POST">
      <div class="g-recaptcha" data-sitekey="6Lf5l6cjAAAAAJM6QRXKMEyTlQSzXKgy4EuwS1hP"></div>
    </form>

    <input type="submit" name="submit" value="Envoyer le message" class="submit-btn"> 
    *
    Ce site est protégé par reCAPTCHA. La 
    <a href="https://policies.google.com/privacy">politique de confidentialité</a> ainsi que les
    <a href="https://policies.google.com/terms">conditions d'utilisation</a> de Google s'appliquent.
</form>
</div>


<?php

if (isset($_POST["message"])) {

$retour = mail("valentin.pouchin@sts-sio-caen.info", "Sujet", $_POST["message"], "From:contact@sio.local" . "\r\n" . "Reply-to:" . $_POST["email"]);
  if ($retour) {
    echo "<p>L'email a été envoyé avec succès</p>";
  }
 
}
?>



</body>

<?php include "php/footer.php"?>

</html>