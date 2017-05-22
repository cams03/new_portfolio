<?php
$destinataire = "camille.c.francia@gmail.com";
// Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
$expediteur = $_POST['mail'];
$objet = $_POST['subject'];
$headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
$headers .= 'Content-type: text/html; charset= UTF-8'."\n"; // l'en-tete Content-type pour le format HTML
$headers .= 'From: <'.$expediteur.'>'."\n"; // Expediteur
$headers .= 'Delivered-to: '.$destinataire."\n"; // Destinataire
$message = '<div style="width: 100%;">'.$_POST['message'].'</div>';
$retour = '<br><a href="http://camillefrancia.com/index-en.html" style="text-decoration:none;"><button style="padding:5px; font-family:sans-serif; font-size:15px; margin-top:10px; cursor:pointer;">Back</button></a>';
if (mail($destinataire, $objet, $message, $headers)) // Envoi du message
{
    header('Location: index-en.html#contact');
}
else // Non envoyé
{
    echo "Your message has not been sent";
    echo $retour;
}
?>
