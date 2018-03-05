<!DOCTYPE html>
<html>
<head>
    <title>Reciplease.com | Register</title>
    <link rel="icon" type="images/png" href="../images/favicon.png" />
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="../styles/default.css" />
    <link rel="stylesheet" type="text/css" href="../styles/medium.css" media="screen and (max-device-width: 1100px)" />
    <link rel="stylesheet" type="text/css" href="../styles/small.css" media="screen and (max-device-width: 750px)" />
    <script type="text/javascript" src="../js/kotlin.js"></script>
    <script type="text/javascript" src="../js/kotlinx-html-js.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
</head>
<body>
<div id="register">
    <div id="redBox">
        <div id="circle"></div>
    </div>
    <div id="centerBox" class="centered">
        <div id="logo">
            <?php
            include "../logo.php";
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