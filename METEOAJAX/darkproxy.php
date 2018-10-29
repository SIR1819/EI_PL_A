<?php
if (isset($_GET['lat']) && isset($_GET['lng'])) {

    $lat = $_GET['lat'];
    $lng = $_GET['lng'];


    $APIKEY = "814e5b27d87937feb926c8b0178f77c3";

    $darkURL =  "https://api.darksky.net/forecast/"
            .$APIKEY."/"
            .$lat.",".$lng
            ."?"
            ."units=si";

    echo file_get_contents($darkURL);

}
?>
