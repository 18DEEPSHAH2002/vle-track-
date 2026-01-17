<?php
header("Content-Type: application/json");

// NIC Forms API (API KEY STORED HERE)
$url = "https://nicforms.nic.in/nicforms_designer/api/api.php?"
     . "form_id=enRhYmxlNjk2YmM0NjUzOTIwZDIwMjYwMTE3MTE="
     . "&serviceCode=d6fc2b65bcbcae2a8a8c29aa5b9587e0427b34899d0efbd66f236cbe8a2301d7"
     . "&recordNo=0";

// Fetch data
$response = file_get_contents($url);

// Output to frontend
echo $response;
