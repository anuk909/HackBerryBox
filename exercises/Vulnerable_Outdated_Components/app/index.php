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
echo "<h1>Vulnerable and Outdated Components</h1>";
echo "<p>Result from vulnerable function: " . htmlspecialchars($result) . "</p>";

// Form to test the vulnerability
echo "<form method='get'>";
echo "<input type='text' name='input' placeholder='Enter some text'>";
echo "<input type='submit' value='Submit'>";
echo "</form>";

// Display water treatment control parameters (simulated)
echo "<h2>Water Treatment Control Parameters</h2>";
echo "<ul>";
echo "<li>pH Level: 7.2</li>";
echo "<li>Chlorine: 1.5 mg/L</li>";
echo "<li>Turbidity: 0.3 NTU</li>";
echo "</ul>";

// Close the database connection
$db->close();
?>
