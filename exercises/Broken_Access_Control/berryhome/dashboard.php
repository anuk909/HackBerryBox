<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit;
}

$username = $_SESSION['user'];
$role = $_SESSION['role'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BerryHome Dashboard</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; }
        h1 { color: #333; }
        .controls { margin-top: 20px; }
        .control-item { margin-bottom: 10px; }
    </style>
</head>
<body>
    <h1>Welcome to Your BerryHome Dashboard, <?php echo htmlspecialchars($username); ?>!</h1>

    <div class="controls">
        <h2>Smart Home Controls</h2>
        <div class="control-item"><a href="#">Lighting Control</a></div>
        <div class="control-item"><a href="#">Temperature Control</a></div>
        <div class="control-item"><a href="#">Security System</a></div>
        <?php if ($role === 'admin'): ?>
            <div class="control-item"><a href="admin.php">Admin Panel</a></div>
        <?php endif; ?>
    </div>

    <a href="logout.php">Logout</a>
</body>
</html>
