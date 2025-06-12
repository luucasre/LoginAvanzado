<?php
     require_once 'vendor/autoload.php'; 

    $clientID = "855280263416-xxxxxxxxxxxxxxx.apps.googleusercontent.com";
    $clientSecret = "xxxxxxxxxxxx";
    $redirectUri = "https://localhost/profe/login.php"; // Asegúrate que coincide con lo configurado en Google Console

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile"); // Este es el scope correcto para obtener info del usuario
