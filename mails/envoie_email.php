<?php

function envoie_de_Mail($destinataire,$obj,$contenu_en_html) {

    $destinataire = $destinataire;
    
    $expediteur = 'manage@ahitche.shop';
    $copie = 'fglindayi@gmail.com';
    $copie_cachee = 'f_glindayi@hetic.eu';
    $objet = $obj; 
    $headers  = 'MIME-Version: 1.0' . "\n"; 
    $headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n";
    $headers .= 'Reply-To: '.$expediteur."\n"; 
    $headers .= 'From: "Maison PRESTIGE Paris"<'.$expediteur.'>'."\n"; 
    $headers .= "Disposition-Notification-To:fglindayi@gmail.com";
    $headers .= 'Delivered-to: '.$destinataire."\n"; 
    $headers .= 'Cc: '.$copie."\n"; 
    $headers .= 'Bcc: '.$copie_cachee."\n\n"; 
    $message = $contenu_en_html;
    if (mail($destinataire, $objet, $message, $headers)) {
        return true;
    } else {
        return false;
    }

}

?>