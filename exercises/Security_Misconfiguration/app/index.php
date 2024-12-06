<?php
// Simulate a security misconfiguration vulnerability

// Insecure configuration: Display all errors (including sensitive information)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Insecure configuration: Allow remote file inclusion
if (isset($_GET['page'])) {
    include($_GET['page']);
}

// Insecure configuration: Hardcoded database credentials
$db_host = 'db';
$db_user = 'root';
$db_pass = 'root';
$db_name = 'misconfigdb';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Insecure configuration: SQL injection vulnerability
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Welcome, " . $username . "!";
    } else {
        echo "Invalid credentials.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Security Misconfiguration Exercise</title>
</head>
<body>
    <h1>Security Misconfiguration Exercise</h1>
    <p>Try to exploit the security misconfigurations in this application.</p>

    <h2>Login</h2>
    <form method="post">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" value="Log In">
    </form>

    <h2>File Inclusion</h2>
    <p>Try to include a remote file:</p>
    <form method="get">
        <input type="text" name="page" placeholder="File to include"><br>
        <input type="submit" value="Include File">
    </form>

    <h2>PHP Info</h2>
    <p>The PHP info page is publicly accessible:</p>
    <a href="phpinfo.php">View PHP Info</a>
</body>
</html>
