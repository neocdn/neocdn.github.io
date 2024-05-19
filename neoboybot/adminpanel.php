<?php
// Start the session (you may not need this depending on your application)
session_start();

// Dummy credentials (replace this with your actual authentication logic)
$valid_username = "neo";
$valid_password = "0fb8s819a0k20z84";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if username and password are set and not empty
    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        // Retrieve username and password from the form
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Validate username and password
        if ($username === $valid_username && $password === $valid_password) {
            // Set session variables to mark the user as logged in (you can store more information in the session if needed)
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;

            // Redirect to a logged-in page
            header("admin.html");
            exit;
        } else {
            // If username or password is incorrect, display an error message
            $error_message = "Invalid username or password.";
        }
    } else {
        // If username or password is empty, display an error message
        $error_message = "Please enter both username and password.";
    }
}
?>
