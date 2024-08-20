<?php
// Simulate security logging and monitoring failure vulnerability

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simulate authentication process
    if ($username === 'admin' && $password === 'password') {
        echo "Welcome, admin!";
    } else {
        echo "Invalid credentials.";
    }
} else {
    echo "Please log in.";
}
?>

<h1>Security Logging and Monitoring Failures Exercise</h1>
<p>Try to log in as the admin user.</p>

<form method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="Log In">
</form>
