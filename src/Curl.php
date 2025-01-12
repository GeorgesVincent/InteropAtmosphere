<?php

// Fonction pour récupérer la qualité de l'air
function getCurl($url){
    // Initialisation de cURL
    $curl = curl_init();
    // Configuration de cURL
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_PROXYTYPE, CURLPROXY_HTTP);
    curl_setopt($curl, CURLOPT_PROXY, 'www-cache:3128');
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    // Exécution de cURL
    $response = curl_exec($curl);
    // Fermeture de cURL
    curl_close($curl);
    return $response;
}