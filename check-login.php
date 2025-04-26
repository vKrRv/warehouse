<?php
session_start();

// DB connection 
$host = "localhost";
$username = "root";
$password = "";
$database = "Supplies_db";

// Start connection
$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Form submission check
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from form
    $user = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);

    // Query to check if there's a match
    $query = "SELECT Name FROM User WHERE Username = '$user' AND Password = '$pass'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['Name'];
        header('Location: show-stock.php'); // Successful login
        exit();
    } else { 
        header('Location: index.php?problem=ErrorLogin'); // Invalid login
        exit();
    }
}
mysqli_close($conn);
?>
