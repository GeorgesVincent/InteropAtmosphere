<?php
require_once 'Curl.php';

// Fonction pour récupérer l'adresse de l'IUT
function getIpClient() {
    // récupération de l'adresse IP
    $ip = $_SERVER['REMOTE_ADDR'] === '::1' ? null : $_SERVER['REMOTE_ADDR'];
    if ($ip === null) {
        $url = "https://ipapi.co/xml/";
    }else {
        $url = "https://ipapi.co/{$ip}/xml/";
    }
    // récupération des données de l'API
    $curl = getCurl($url);
    // Décodage du XML
    $xml = simplexml_load_string($curl);
    return $xml;
}

