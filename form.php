<!DOCTYPE html>

<html>
<body>

<?php

$name = $username = $password = $gender = "";

$nameErr = $usernameErr = $pwdErr = $genderErr = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {

    if(empty($_POST["name"])) {
        $nameErr = "Please enter your name.";
    }
    else{
        $name = test_input($_POST["name"]);
    }

    if(empty($_POST["username"])) {
        $usernameErr = "Please enter your username.";
    }
    else{
        $username = test_input($_POST["username"]);
    }

    if(empty($_POST["password"])) {
        $pwdErr = "Please enter your password.";
    }
    else{
        $password = test_input($_POST["password"]);

        if (!preg_match('/^[0-9]*$/', $password)) {
            $pwdErr = "Your password can only contain numbers.";
        } else {
            // Continue
        }
    }

    if(empty($_POST["gender"])) {
        $genderErr = "Please enter your gender.";
    }
    else{
        $gender = test_input($_POST["gender"]);
    }
}



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

Name: <input type="text" name="name" value="<?php echo $name;?>">
<span class="error">* <?php echo $nameErr;?></span>
<br><br>

Username: <input type="text" name="username" value="<?php echo $username;?>">
<span class="error">* <?php echo $usernameErr;?></span>
<br><br>

Password: <input type="text" name="password" value="<?php echo $password;?>">
<span class="error">* <?php echo $pwdErr;?></span>
<br><br>

<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="other") echo "checked";?>
value="other">Other
<span class="error">* <?php echo $genderErr;?></span>
<br><br>

<input type="submit">
<br><br>

</form>

<?php

echo "Name: ", $name, "<br>";
echo "Username: ", $username, "<br>";
echo "Password: ", $password, "<br>";
echo "Gender: ", $gender, "<br>";


?>


</body>
</html>

