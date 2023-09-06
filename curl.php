<?php
// API Endpoint URL
$apiUrl = 'http://127.0.0.1:9000/api';

// POST Data
$postData = [
    'test' => 'test'
];

// Create a cURL handle
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));

// Execute the cURL request
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'cURL Error: ' . curl_error($ch) . PHP_EOL;
} else {
    // Output the API response
    echo 'API Response:' . PHP_EOL;
    echo $response;
}

// Close the cURL handle
curl_close($ch);
?>