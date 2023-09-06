<?php

// Parse the URL to get the requested path
$requestUri = $_SERVER['REQUEST_URI'];
$parts = parse_url($requestUri);
$path = isset($parts['path']) ? $parts['path'] : '/';

// Define a list of routes and their corresponding PHP files
$routes = [
    '/api' => 'api.php',
    '/curl' => 'curl.php',
    '/info' => 'phpinfo.php'
    // Add more routes as needed
];

// Check if the requested path matches a defined route
if ($_SERVER['REQUEST_URI'] === '/') {
    echo <<<HTML
<!DOCTYPE html>
<html>
<head>
    <title>Welcome to My PHP Server</title>
</head>
<body>
    <h1>Hello, World!</h1>
    <p>This is the default index page for your PHP server.</p>
</body>
</html>
HTML;
} elseif (isset($routes[$path])) {
    // If a route is found, include the corresponding PHP file
    include $routes[$path];
} else {
    // If no matching route is found, return a 404 response
    http_response_code(404);
    echo '404 Not Found';
}