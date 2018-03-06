<!DOCTYPE html>
<html>
<head>
    <title>Reciplease.com | Login</title>
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
            <input type="text" id="username" name="username" placeholder="username" /><br />
            <input type="password" id="password" name="password" placeholder="password" /><br />
            <div id="links">
                <a href="../register" title="register">register</a>
                <a href="../forgot" title="forgot username / password">forgot username / password</a>
            </div>
            <input type="submit" id="loginBtn" class="button" name="loginBtn" value="submit" />
        </form>
    </div>
    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Some text in the Modal..</p>
        </div>

    </div>
</div>
</body>
</html>