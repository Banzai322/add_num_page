<?php
// Determine if HTTPS is used
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
// Get the URI (the path after the domain name, including parameters)
$uri = $_SERVER['REQUEST_URI'];

// Parse the URL to get parameters
$url_components = parse_url($uri);
parse_str($url_components['query'] ?? '', $query_params);

// Get the value of the 'tovars_page' parameter
$page = isset($query_params['tovars_page']) ? (int)$query_params['tovars_page'] : 1;

// Output the page number
if ($page >= 2) {
    echo " — page " . $page;
} else {
    echo "";
}
?>
