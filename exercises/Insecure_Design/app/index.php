<?php
// Simulate insecure design vulnerability

function isAuthenticated() {
    // Insecure design: authentication is based on a simple query parameter
    return isset($_GET['auth']) && $_GET['auth'] === 'secret';
}

if (isAuthenticated()) {
    echo "Welcome, authenticated user!";
} else {
    echo "Access denied. You are not authenticated.";
}
?>

<h1>Insecure Design Exercise</h1>
<p>Try to access the authenticated area.</p>

<form method="get">
    <input type="text" name="auth" placeholder="Enter authentication key">
    <input type="submit" value="Authenticate">
</form>
