<?php
    include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div class="login-box">
    <p>Login</p>
    <form name="form" method="POST" action="login.php" onsubmit="return valid()">
        <div class="user-box">
            <input name="username" type="text">
            <label>Username</label>
        </div>
        <div class="user-box">
            <input name="password" type="password">
            <label>Password</label>
        </div>
        <div id="submit-button">
            <input type="submit" value="Login" name="submit">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </form>
</div>
<script>
    // function to check if the username and password fields are empty
    function valid(){
        let user = document.form.username.value;
        let pass = document.form.password.value;
        if(user.length ="" && pass.length == ""){
            alert("Please fill in the username and password.");
            return false;
        }else if(user.length == ""){
            alert("Please fill in the username.");
            return false;
        }else if(pass.length == ""){
            alert("Please fill in the password.");
            return false;
        }
    }
</script>
</body>
</html>
