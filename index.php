<!DOCTYPE html>
<head>
    <title>Event admin registration </title>
</head>
<body>
    <h1> Event Planning Admin Registration </h1>
    <img src ="image/prc.webp" alt="Event Logo"  width="300" height="150">  <br> <br> <br>
    <form action="show.php" method="post">

    <table>
        <tr>
            <td><label for="subname">Sub Name :</label> <br><br><br>  </td>
            <td><input type="text" id="subname" name="subname"> <br> <br> <br> </td>
        </tr>

        <tr>
            <td><label for="surname">Sur Name :</label> <br> <br><br> </td>
            <td><input type="text" id="surname" name="surname"> <br> <br> <br> </td>
        </tr>

        <tr>
            <td><label for="position">Position :</label> <br> <br><br> </td>
            <td><input type="text" id="position" name="position"> <br> <br> <br> </td>
        </tr>

        <tr>
            <td><label for="email">Email :</label> <br> <br><br> </td>
            <td><input type="text" id="email" name="email"> <br> <br> <br> </td>
        </tr>

        <tr>
            <td><label for="phone">Phone :</label> <br> <br><br> </td>
            <td><input type="text" id="phone" name="phone"> <br> <br> <br> </td>
        </tr>

        <tr>
            <td><label for="password">Password :</label> <br> <br><br> </td>
            <td><input type="password" id="password" name="password"> <br> <br> <br> </td>
        </tr>

        <tr>
            <td><label for="dob">Birth Date :</label> <br><br><br>  </td>
            <td><input type="date" id="dob" name="dob"> <br> <br> <br> </td>
        </tr>

        <tr>
            <td><label for="gender">Gender :</label> <br><br><br>  </td>
            <td>
                <input type="radio" id="male" name="gender" value="male">
                <label for="male">Male

                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female <br><br> <br>
 
            </td>

        </tr>

        <tr>
            <td><input type="submit" value="Submit"> </td>
        </tr>

    </table>     
            
    </form>
    </body>
    </html>
