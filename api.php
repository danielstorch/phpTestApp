<?php
// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Parse the POST data
    $requestData = $_POST;
    // Check if required POST field "frame" exists
    if (isset($requestData['test'])) {
        // Process the POST and query data (you can add your logic here)
        // For example, let's just return the received data
        $response = [
            'status' => 'success',
            'message' => 'Data received successfully.',
            'post_data' => $requestData
            ];
    } else {
        $response = [
            'status' => 'error',
            'message' => 'Missing required field: test'
        ];
    }
} else {
    $response = [
        'status' => 'error',
        'message' => 'Invalid request method. Only POST requests are allowed.'
    ];
}

// Set response headers to indicate JSON content
header('Content-Type: application/json');

// Encode the response data as JSON and output it
echo json_encode($response);
?>
