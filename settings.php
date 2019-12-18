<?php
require 'vendor/autoload.php';
$api_host='https://api.jikan.moe/v3/';

function getJson($url){
    $client = new GuzzleHttp\Client();
    $res = $client->request('GET',$url);
    return $res->getBody();
}

function animeSearch($title){
    global $api_host;
    $title = rawurlencode($title);
    $linktest = $api_host.'search/anime?q='.$title;
    $res = getJson($linktest);
    $json = json_decode($res);
    return $json;
}

function detailAnime($id){
    global $api_host;
    $link = $api_host.'anime/'.$id;
    $res = getJson($link);
    $json = json_decode($res);
    return $json;
}