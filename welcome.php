<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>

<h2>Welcome, <?php echo htmlspecialchars($_SESSION['email']); ?>!</h2>

<p>
    <?php
    if (isset($_COOKIE['user_email'])) {
        echo "Cookie says: " . htmlspecialchars($_COOKIE['user_email']);
    } else {
        echo "No cookie set for email.";
    }
    ?>
</p>

</body>
</html>
