<?php
// includes/user.php

// Function to check if the user exists and verify password
function verify_user($username, $password) {
    global $conn;
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = pg_query($conn, $sql); // Use pg_query for PostgreSQL

    // If using MySQL, use: $result = $conn->query($sql);

    if ($result) {
        $user = pg_fetch_assoc($result); // For MySQL: $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            return $user;
        }
    }
    return false;
}
?>
