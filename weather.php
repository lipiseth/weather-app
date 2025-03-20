<?php
if (isset($_GET['city'])) {
    $city = urlencode($_GET['city']);
    $apiKey = 'YOUR_OPENWEATHERMAP_API_KEY';

    if (isset($_GET['forecast'])) {
        $apiUrl = "https://api.openweathermap.org/data/2.5/forecast?q=$city&appid=$apiKey&units=metric";
    } else {
        $apiUrl = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey&units=metric";
    }

    $response = file_get_contents($apiUrl);
    header('Content-Type: application/json');
    echo $response;
    exit;
}
?>
