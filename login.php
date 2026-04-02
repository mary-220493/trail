<?php
// Simple Login Script
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['pwd'];

    // Check if user exists with current credentials
    $sql = "SELECT id, name FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo "<h3>Login successful! Welcome " . $row['name'] . ".</h3>";
        echo "<p><a href='index.html'>Go to Homepage</a></p>";
    } else {
        echo "<h3>Invalid credentials.</h3>";
        echo "<p>Please <a href='login.html'>Try again here</a>.</p>";
    }
}

// Close connection
mysqli_close($conn);
?>