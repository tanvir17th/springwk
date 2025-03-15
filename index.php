<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
    <header>
        <h1>User Registration</h1>
    </header>
    <main>
        <form action="show.php" method="post">
            <fieldset>
                <legend>User Information</legend>
                <table>
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="name" id="name"></td>
                    </tr>
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="username" id="username"></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password" id="password"></td>
                    </tr>
                    <tr>
                        <td>Confirm Password:</td>
                        <td><input type="password" name="confirmpassword" id="confirmpassword"></td>
                    </tr>
                    <tr>
                        <td>Email Address:</td>
                        <td><input type="email" name="email" id="email"></td>
                    </tr>
                    <tr>
                        <td>Confirm Email Address:</td>
                        <td><input type="email" name="confirmemail" id="confirmemail"></td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td>
                            <input type="radio" name="gender" value="male" id="male"> Male
                            <input type="radio" name="gender" value="female" id="female"> Female
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="terms" id="terms"> I agree to all terms and conditions.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="age" id="age"> I'm at least 18 years old.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Submit">
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </main>
</body>
</html>
 
 