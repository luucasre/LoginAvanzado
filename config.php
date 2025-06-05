<?php
     require_once 'vendor/autoload.php'; 

    $clientID = "855280263416-3usr07qtd857o6mg7lgg2005n8lngih4.apps.googleusercontent.com";
    $clientSecret = "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";
    $redirectUri = "https://localhost/profe/login.php"; // Asegúrate que coincide con lo configurado en Google Console

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile"); // Este es el scope correcto para obtener info del usuario