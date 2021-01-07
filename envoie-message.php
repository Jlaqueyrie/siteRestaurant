<?php 
    
    //message general
    $email_msg_ok = "Demande d'information transmise";
    $email_msg_nok = "Erreur serveur, demande d'information non transmise";
    //enlever les caractères illégaux de l'adresse
    $email_client= filter_var($_POST['in_emailClient'], FILTER_SANITIZE_EMAIL);
    //test si l'adresse est valide sinon message d'erreur
    if(!filter_var($_POST['in_emailClient'], FILTER_VALIDATE_EMAIL))
    {
        printf('vôtre adresse email : $s n\'est pas au format RFC 822',$_POST['in_emailClient']);
    }
    //préparation du message
    //header
    $email_entreprise = "jerome.laqueyrie@hotmail.com";

    $email_header_MIME = "MIME-Version : 1.0";
    $email_header_origin = "From: {$_POST['in_nomClient']}"."<{$email_client}>";
    $email_header_repondre = 'Reply-To:'.$email_client;
    $email_header_type = 'Content-Type : text/plain; charset="UTF-8"';
    $email_header_encoding = 'Content-Transfer-Encoding:8bit';
    $email_header_Mailer = 'X-Mailer:PHP/'.phpversion()."\r\n";

    $email_header = sprintf("%s\r\n%s\r\n%s\r\n%s\r\n%s\r\n",$email_header_MIME,$email_header_origin,$email_header_repondre,$email_header_type,$email_header_encoding,$email_header_Mailer);
    //sujet
    $email_sujet = printf("Demande information - %s",$_POST['opt_sujetMessage']);
    //message 
    $email_corp =wordwrap($_POST['txt_messageClient'],70,"\r\n");


    //envoi mail
    $envoie_ok  = mail($email_entreprise, $email_sujet,$email_corp,$email_header);
    if(!$envoie_ok)
    {
        echo $email_msg_nok;
    }
    else
    {
        echo $email_msg_ok;
    }
?>