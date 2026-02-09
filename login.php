
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$dbUsername = "chelli";
$dbPassword = "123456";
if (isset($_POST['login'])) {
    $inputUser = trim($_POST['username']);
    $inputPass = trim($_POST['password']);

    $inputUser = htmlspecialchars($inputUser);
    $inputPass = addslashes($inputPass);
    if (strcasecmp($dbUsername, $inputUser) == 0) {

        // Password: case sensitive
        if (strcmp($dbPassword, $inputPass) == 0) {

            echo "<h3>Login Successful</h3>";

        } else {
            print "Invalid Password";
        }

    } else {
        die("Invalid Username");
    }

} else {
    die("Invalid Request");
}
?>