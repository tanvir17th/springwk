<?php
include("../data/db.php");

$email = trim($_POST['email'] ?? '');
$password = trim($_POST['password'] ?? '');

$emailError = "";
$passwordError = "";
$loginError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($email)) {
        $emailError = "Email is required";
    }

    if (empty($password)) {
        $passwordError = "Password is required";
    }

    if (!$emailError && !$passwordError) {
        $sql = "SELECT * FROM event WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            if (trim($row['password']) === $password) {
                session_start();
                $_SESSION['email'] = $email;
                header("Location: welcome.php");
                exit();
            } else {
                $emailError = "Invalid email or password"; 
            }
        } else {
            $emailError = "Invalid email or password"; 
        }
    }
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>

<h2>Login Form</h2>

<form method="post" action="">
    <table>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>"></td>
            <td><span class="error"><?php echo $emailError; ?></span></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password"></td>
            <td><span class="error"><?php echo $passwordError; ?></span></td>
        </tr>
        <tr>
            <td colspan="3" style="text-align:center;">
                <input type="submit" value="Login" style="width:150px;">
            </td>
        </tr>
    </table>
</form>

</body>
</html>
