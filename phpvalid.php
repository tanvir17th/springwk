<?php
// Helper function to sanitize input
function sanitize($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Initialize variables and error array
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = sanitize($_POST["name"] ?? '');
    $username = sanitize($_POST["username"] ?? '');
    $password = $_POST["password"] ?? '';
    $confirmpassword = $_POST["confirmpassword"] ?? '';
    $email = sanitize($_POST["email"] ?? '');
    $confirmemail = sanitize($_POST["confirmemail"] ?? '');
    $gender = $_POST["gender"] ?? '';
    $terms = isset($_POST["terms"]);
    $age = isset($_POST["age"]);

    // Validation
    if (empty($name)) {
        $errors[] = "Name is required.";
    }

    if (empty($username)) {
        $errors[] = "Username is required.";
    }

    if (empty($password)) {
        $errors[] = "Password is required.";
    }

    if ($password !== $confirmpassword) {
        $errors[] = "Passwords do not match.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if ($email !== $confirmemail) {
        $errors[] = "Emails do not match.";
    }

    if (empty($gender)) {
        $errors[] = "Gender selection is required.";
    }

    if (!$terms) {
        $errors[] = "You must agree to the terms and conditions.";
    }

    if (!$age) {
        $errors[] = "You must be at least 18 years old.";
    }

    // Output results
    if (count($errors) > 0) {
        echo "<h2>Registration Failed:</h2><ul>";
        foreach ($errors as $error) {
            echo "<li>" . $error . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<h2>Registration Successful!</h2>";
        echo "<p>Name: $name</p>";
        echo "<p>Username: $username</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Gender: $gender</p>";
        // Password should be hashed and stored securely in a database (not shown here)
    }
} else {
    echo "<p>Invalid request method.</p>";
}
?>
