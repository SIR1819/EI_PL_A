<?php


$APIKEY = "814e5b27d87937feb926c8b0178f77c3";
//Outeiro
$latitude = "41.751862";
$longitude = "-8.786070";
$BASEURL = "https://api.darksky.net/forecast/";


$url = $BASEURL . $APIKEY . "/" . $latitude . "," . $longitude;

$currentweatherJSON = file_get_contents($url);


$currentweather = json_decode($currentweatherJSON);


echo $currentweather->currently->temperature;

?>