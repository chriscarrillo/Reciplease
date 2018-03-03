<!DOCTYPE html>
<html>
<head>
    <title>Reciplease.com | Login</title>
    <link rel="icon" type="images/png" href="../images/favicon.png" />
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="../styles/default.css" />
    <link rel="stylesheet" type="text/css" href="../styles/medium.css" media="screen and (max-width: 1100px)" />
    <link rel="stylesheet" type="text/css" href="../styles/small.css" media="screen and (max-width: 750px)" />
    <script type="text/javascript" src="../js/kotlin.js"></script>
    <script type="text/javascript" src="../js/kotlinx-html-js.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
</head>
<body>
<div id="login">
    <div id="redBox">
        <div id="circle"></div>
    </div>
    <div id="centerBox" class="centered">
        <div id="logo">
            <?php
            include "../logo.php";
            ?>
        </div>
        <h1>log in</h1>
        <form action="" method="post" id="loginForm" class="form">
            <input type="text" id="username" name="username" placeholder="username" /><br />
            <input type="password" id="password" name="password" placeholder="password" /><br />
            <div id="links">
                <a href="../register" title="register">register</a>
                <a href="../forgot" title="forgot username / password">forgot username / password</a>
            </div>
            <input type="submit" id="loginBtn" class="button" name="loginBtn" value="submit" />
        </form>
        
    </div>
</div>
</body>
</html>