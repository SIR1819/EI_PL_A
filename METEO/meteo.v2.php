<?php

if (isset($_GET['location'])) {
    $locationDefined = true;
} else {
    $locationDefined = false;
}

if ($locationDefined) {
$location = $_GET["location"];

// echo $location;
// utilizar $location com a Mapquest API
$location = urlencode($location);

//var_dump($location);

$mapquestURL = "http://www.mapquestapi.com/geocoding/v1/address?key=XFNxQ82etHEFDAjhOSzhE4hozjwbRq45&location=$location";

$mapgeocode = file_get_contents($mapquestURL);

$mapgeocodePHP = json_decode($mapgeocode);

$lat = $mapgeocodePHP->results[0]->locations[0]->latLng->lat;
$lng = $mapgeocodePHP->results[0]->locations[0]->latLng->lng;

//var_dump($lat);
//echo("<hr>");
//var_dump($lng);

$APIKEY = "814e5b27d87937feb926c8b0178f77c3";

$darkURL =  "https://api.darksky.net/forecast/"
            .$APIKEY."/"
            .$lat.",".$lng
            ."?"
            ."units=si";

//var_dump($darkURL);

$darkWeather = file_get_contents($darkURL);

$darkWeatherPHP = json_decode($darkWeather);

$currentTemp = $darkWeatherPHP->currently->temperature;
$currentIcon = $darkWeatherPHP->currently->icon;

$iconURL = "https://darksky.net/images/weather-icons/".$currentIcon.".png";

//echo ($currentTemp);
//echo("<hr>");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="meteo.v2.php" method="get">
        <input type="text" name="location" id="ilocation" placeholder="Insira o local">
        <input type="submit" value="Obter"/>
    </form>
    <?php
    if($locationDefined) {
        include("weather.inc");
    }
    ?>
    
</body>
</html>

