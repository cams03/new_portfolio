<?php
$destinataire = "camille.c.francia@gmail.com";
// Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
$expediteur = $_POST['email'];
$objet = $_POST['subject'];
$headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
$headers .= 'Content-type: text/html; charset= UTF-8'."\n"; // l'en-tete Content-type pour le format HTML
$headers .= 'From: <'.$expediteur.'>'."\n"; // Expediteur
$headers .= 'Delivered-to: '.$destinataire."\n"; // Destinataire
$message = '<div style="width: 100%;"> De: '.$expediteur."\n".$_POST['message'].'</div>';
if (mail($destinataire, $objet, $message, $headers)) // Envoi du message
{
    echo 'Votre message a bien été envoyé ';
}
else // Non envoyé
{
    echo "Votre message n'a pas pu être envoyé";
}
?>
