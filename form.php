
<?php include "control/validate.php"; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Event Planning Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h2>Event Planning Form</h2>

<form method="post" action="" enctype="multipart/form-data">

<table>
    <tr>
        <td>First Name:</td>
        <td><input type="text" name="firstname" id="firstname" value="<?php echo $firstname; ?>"></td>
        <td><span class="error"><?php echo $firstnameError; ?></span></td>
    </tr>

    <tr>
        <td>Last Name:</td>
        <td><input type="text" name="lastname" id="lastname" value="<?php echo $lastname; ?>"></td>
        <td><span class="error"><?php echo $lastnameError; ?></span></td>
    </tr>

    <tr>
        <td>Email:</td>
        <td><input type="text" name="email" id="email" value="<?php echo $email; ?>"></td>
        <td><span class="error"><?php echo $emailError; ?></span></td>
    </tr>

    <tr>
        <td>Password:</td>
        <td><input type="password" name="password" id="password" value="<?php echo $password; ?>"></td>
        <td><span class="error"><?php echo $passwordError; ?></span></td>
    </tr>

    <tr>
        <td>Gender:</td>
        <td>
            <input type="radio" name="gender" value="Male" <?php if($gender=="male") echo "checked";?>> Male
            <input type="radio" name="gender" value="Female" <?php if($gender=="female") echo "checked";?>> Female
        </td>
        <td><span class="error"><?php echo $genderError; ?></span></td>
    </tr>

     <tr>
        <td>Upload Picture:</td>
        <td><input type="file" name="myfile" id="myfile"></td>
        <td><span class="error"><?php echo $fileError; ?></span></td>
    </tr>
    
</table>

<input type="submit" value="Submit">

</form>

</body>
</html>
