<?php
// Connect to the database
$servername = getenv('DB_HOST');
$username = getenv('DB_USER');
$password = getenv('DB_PASSWORD');
$dbname = getenv('DB_NAME');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $new_hash = $_POST['new_hash'];
    $stmt = $conn->prepare("UPDATE packages SET integrity_hash=? WHERE id=?");
    $stmt->bind_param("si", $new_hash, $id);
    if ($stmt->execute() === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $stmt->error;
    }
    $stmt->close();
}

$sql = "SELECT id, name, version, integrity_hash FROM packages";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Package Integrity Check</h1>";
    echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Version</th><th>Integrity Hash</th><th>Action</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["version"]."</td><td>".$row["integrity_hash"]."</td>";
        echo "<td><form method='post'><input type='hidden' name='id' value='".$row["id"]."'><input type='text' name='new_hash'><input type='submit' value='Update Hash'></form></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
