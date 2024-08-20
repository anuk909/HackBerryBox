<?php
// Simulate the use of a component with a known vulnerability

// Include an outdated library with known vulnerabilities
require_once 'vulnerable_library.php';

// Database connection
$db = new mysqli($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], $_ENV['DB_NAME']);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Use the vulnerable function from the library
$result = vulnerable_function($_GET['input']);

// Display the result
echo "<h1>Using Components with Known Vulnerabilities</h1>";
echo "<p>Result from vulnerable function: " . htmlspecialchars($result) . "</p>";

// Form to test the vulnerability
echo "<form method='get'>";
echo "<input type='text' name='input' placeholder='Enter some text'>";
echo "<input type='submit' value='Submit'>";
echo "</form>";

// Close the database connection
$db->close();
?>
