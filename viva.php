<?php
session_start();


if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('Location: viva.php');
    exit;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // authenticati
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $dbUsername = 'your_username';
    $dbPassword = 'your_password';

    //if user and passerd match record
    if ($username === $dbUsername && $password === $dbPassword) {
        // Authentication pass
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        // Redirect to the home page
        header('Location: home.php');
        exit;
    } else {
        // Authentication failed, show error message
        $errorMessage = 'Invalid username or password.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

   

    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>

        <br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>

        <br>

        <input type="submit" value="Log In">
    </form>
</body>
</html>
