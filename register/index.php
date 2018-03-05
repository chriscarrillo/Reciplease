<!DOCTYPE html>
<html>
<head>
    <title>Reciplease.com | Register</title>
    <?php include "../templates/head.php" ?>
</head>
<body>
<div id="register">
    <div id="redBox">
        <div id="circle"></div>
    </div>
    <div id="centerBox" class="centered">
        <div id="logo">
            <?php
            include "../templates/logo.php";
            ?>
        </div>
        <h1>register</h1>
        <form action="" method="post" id="registerForm" class="form">
            <input type="text" id="firstName" name="firstName" placeholder="first name" /><br />
            <input type="text" id="lastName" name="lastName" placeholder="last name" /><br />
            <input type="email" id="email" name="email" placeholder="email" /><br />
            <input type="text" id="username" name="username" placeholder="username" /><br />
            <input type="password" id="password" name="password" placeholder="password" /><br />
            <input type="date" id="dob" name="dob" placeholder="date of birth" /><br />
            <input type="submit" id="registerBtn" class="button" name="registerBtn" value="register" />
        </form>
    </div>
</div>
</body>
</html>