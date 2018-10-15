<?php
$location = $_GET["location"];

var_dump($location);
echo $location;
$location = urlencode($location);
var_dump($location);

// utilizar $location com a Mapquest API

// obtidos os valores de lat e long, usar DarkSky

$resposta = '{"info":{"statuscode":0,"copyright":{"text":"\u00A9 2018 MapQuest, Inc.","imageUrl":"http://api.mqcdn.com/res/mqlogo.gif","imageAltText":"\u00A9 2018 MapQuest, Inc."},"messages":[]},"options":{"maxResults":-1,"thumbMaps":false,"ignoreLatLngInput":false},"results":[{"providedLocation":{"location":"Viana do Castelo"},"locations":[{"street":"","adminArea6":"","adminArea6Type":"Neighborhood","adminArea5":"Viana do Castelo","adminArea5Type":"City","adminArea4":"","adminArea4Type":"County","adminArea3":"","adminArea3Type":"State","adminArea1":"PT","adminArea1Type":"Country","postalCode":"","geocodeQualityCode":"A5XAX","geocodeQuality":"CITY","dragPoint":false,"sideOfStreet":"N","linkId":"282644705","unknownInput":"","type":"s","latLng":{"lat":41.694908,"lng":-8.830461},"displayLatLng":{"lat":41.694908,"lng":-8.830461}}]}]}';

$respostaPHP = json_decode($resposta);

//var_dump($respostaPHP);

$lat = $respostaPHP->results[0]->locations[0]->latLng->lat;
echo($lat);

/*


$APIKEY = "814e5b27d87937feb926c8b0178f77c3";
//Outeiro
$latitude = "41.751862";
$longitude = "-8.786070";
$BASEURL = "https://api.darksky.net/forecast/";


$url = $BASEURL . $APIKEY . "/" . $latitude . "," . $longitude;

$currentweatherJSON = file_get_contents($url);


$currentweather = json_decode($currentweatherJSON);


echo $currentweather->currently->temperature;
*/

?>