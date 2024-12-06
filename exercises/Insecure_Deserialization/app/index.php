<?php
// Simulate insecure deserialization vulnerability

class User {
    public $name;
    public $isAdmin = false;
}

if (isset($_POST['data'])) {
    $data = $_POST['data'];
    $user = unserialize($data);

    if ($user instanceof User) {
        echo "Hello, " . htmlspecialchars($user->name) . "<br>";
        if ($user->isAdmin) {
            echo "Welcome, admin!";
        } else {
            echo "You are not an admin.";
        }
    } else {
        echo "Invalid data.";
    }
} else {
    echo "No data provided.";
}
?>

<form method="post">
    <textarea name="data" rows="10" cols="30"></textarea><br>
    <input type="submit" value="Submit">
</form>
