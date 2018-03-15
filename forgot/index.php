<!DOCTYPE html>
<html>
<head>
    <title>Reciplease.com | Forgot Username / Password</title>
    <?php include "../templates/head.php" ?>
</head>
<body>
<div id="forgot">
    <div id="redBox">
        <div id="circle"></div>
    </div>
    <div id="centerBox" class="centered">
        <div id="logo">
            <?php
            include "../templates/logo.php";
            ?>
        </div>
        <h1>forgot</h1>
        <form action="" method="post" id="forgotForm" class="form">
            <h2>Enter the email address associated with your account</h2>
            <input type="email" id="email" name="email" placeholder="email" required /><br />
            <input type="submit" id="forgotBtn" class="button" name="forgotBtn" value="submit" />
        </form>
    </div>
</div>
</body>
</html>