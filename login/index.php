<!DOCTYPE html>
<html>
<head>
    <title>Reciplease.com | login</title>
    <?php include "../templates/head.php" ?>
</head>
<body>
<div id="login">
    <div id="redBox">
        <div id="circle"></div>
    </div>
    <div id="centerBox" class="centered">
        <div id="logo">
            <?php
            include "../templates/logo.php";
            ?>
        </div>
        <h1>log in</h1>
        <form action="" method="post" id="loginForm" class="form">
            <input type="text" id="username" name="username" placeholder="username" autofocus="on" required /><br />
            <input type="password" id="password" name="password" placeholder="password" required /><br />
            <div id="links">
                <a href="../register" title="register">register</a>
                <a href="../forgot" title="forgot username / password">forgot username / password</a>
            </div>
            <input type="submit" id="loginBtn" class="button" name="loginBtn" value="submit" />
        </form>
        <?php
            if (isset($_POST["loginBtn"])) {
                login($_POST["username"], $_POST["password"]);
            }
        ?>
    </div>
</div>
</body>
</html>