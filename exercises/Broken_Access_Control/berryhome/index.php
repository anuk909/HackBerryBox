<?php
session_start();

// Simulated user database
$users = [
    'homeowner' => ['password' => 'smartliving', 'role' => 'user'],
    'admin' => ['password' => 'supersecret', 'role' => 'admin']
];

// Login functionality
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (isset($users[$username]) && $users[$username]['password'] === $password) {
        $_SESSION['user'] = $username;
        $_SESSION['role'] = $users[$username]['role'];
        header('Location: dashboard.php');
        exit;
    } else {
        $error = "Invalid username or password";
    }
}

// Check if user is logged in
$loggedIn = isset($_SESSION['user']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BerryHome Smart Living</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; }
        h1 { color: #333; }
        form { margin-top: 20px; }
        input { margin: 10px 0; padding: 5px; }
        .error { color: red; }
    </style>
</head>
<body>
    <h1>Welcome to BerryHome</h1>

    <?php if ($loggedIn): ?>
        <p>You are logged in as <?php echo htmlspecialchars($_SESSION['user']); ?>.</p>
        <a href="dashboard.php">Go to Dashboard</a>
        <br>
        <a href="logout.php">Logout</a>
    <?php else: ?>
        <p>Please log in to access your smart home controls.</p>
        <?php if (isset($error)): ?>
            <p class="error"><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>
        <form method="post" action="">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" value="Login">
        </form>
    <?php endif; ?>
</body>
</html>
