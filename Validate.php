<?php
include("data/db.php");
$fileError = "";
$firstname = $lastname = $email = $password = $gender = "";


$firstnameError = "";
$lastnameError = "";    
$emailError = "";
$passwordError = "";
$genderError = "";

$hasError = false;


if (isset($_REQUEST["firstname"])) 
{
    if ($_REQUEST["firstname"] === "") 
    {
        $firstnameError = "Invalid first name";
        $hasError = true;
    } 
    else
     {
        $firstname = $_REQUEST["firstname"];
       
    }
} 
else 
{
    $firstnameError = "First name is not set.";
    $hasError = true;
}



if (isset($_REQUEST["lastname"])) 
{
    if ($_REQUEST["lastname"] === "") 
    {
        $lastnameError = "Invalid last name";
        $hasError = true;
    } 
    else 
    {
        $lastname = $_REQUEST["lastname"];
        
    }
} 
else 
{
    $lastnameError = "Last name is not set.";
    $hasError = true;
}



if (isset($_REQUEST["email"])) {
    if ($_REQUEST["email"] === "") {
        $emailError = "Email is required.";
        $hasError = true;
    } elseif (!preg_match("/@gmail.com/", $_REQUEST["email"])) {
        $emailError = "Please enter a valid @gmail.com email address.";
        $hasError = true;
    } else {
        $email = $_REQUEST["email"]; 
    }
} else {
    $emailError = "Email is not set.";
    $hasError = true;
}




if (isset($_REQUEST["password"])) 
{
    if ($_REQUEST["password"] === "") 
    {
        $passwordError = "Invalid password";
        $hasError = true;
    } elseif (strlen($_REQUEST["password"]) < 6) 
    {
        $passwordError = "Least 6 characters";
        $hasError = true;
    } else 
    {
        $password = $_REQUEST["password"];
       
    }
} 
else {
    $passwordError = "Password is not set.";
    $hasError = true;
}


if (isset($_REQUEST["gender"])) 
{
    if ($_REQUEST["gender"] === "")
     {
        $genderError = "Invalid gender";
        $hasError = true;
    } 
    else
     {
        $gender = $_REQUEST["gender"];
        
    }
} 
else 
{
    $genderError = "Gender is not set.";
    $hasError = true;
}


if (empty($_FILES['myfile']['name'])) {
    $fileError = "Please upload a profile picture.";
    $hasError = true;
}



if ($hasError) {
    echo "<h2>Form submission failed!</h2>";
} else {
    $filename = $_FILES["myfile"]["name"];
    $tempname = $_FILES["myfile"]["tmp_name"];
    $folder = "uploads/" . $filename;

    
    if (move_uploaded_file($tempname, $folder)) {
       
        $sql = "INSERT INTO event (firstname, lastname, email, password, gender, picture)
                VALUES ('$firstname', '$lastname', '$email', '$password', '$gender', '$folder')";

        $result = mysqli_query($conn, $sql);

       if ($result) {
      
            header("Location:login/login.php");
            exit();
        } else {
            echo "<h2>Database Error: " . mysqli_error($conn) . "</h2>";
        }
    } else {
        echo "<h2>File upload failed!</h2>";
    }

    mysqli_close($conn); 
}
?>