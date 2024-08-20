<?php
// Simulate a Server-Side Request Forgery (SSRF) vulnerability

// Allow URL parameter to specify the target URL for the request
if (isset($_GET['url'])) {
    $url = $_GET['url'];

    // Perform a server-side request to the specified URL
    $response = file_get_contents($url);

    // Display the response
    echo "<h1>Response from $url</h1>";
    echo "<pre>$response</pre>";
} else {
    echo "<h1>SSRF Exercise</h1>";
    echo "<p>Enter a URL to fetch:</p>";
    echo '<form method="get">';
    echo '<input type="text" name="url" placeholder="http://example.com" required>';
    echo '<input type="submit" value="Fetch">';
    echo '</form>';
}
?>
