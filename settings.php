<?php
require 'vendor/autoload.php';
$api_host='https://api.jikan.moe/v3/';
function getSslPage($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_REFERER, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

function getJson($url){
    $client = new GuzzleHttp\Client();
    $res = $client->request('GET',$url);
    return $res->getBody();
}

function animeSearch($title){
    global $api_host;
    $linktest = $api_host.'search/anime?q='.$title;
    $file = getSslPage($linktest);
    $json = json_decode($file);
    return $json;
}

function testAnimeSearch($title){
    global $api_host;
    $title = rawurlencode($title);
    $linktest = $api_host.'search/anime?q='.$title;
    $res = getJson($linktest);
    $json = json_decode($res);
    return $json;


}
