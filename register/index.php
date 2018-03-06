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
            <div class="half">
                <input type="text" id="firstName" class="mobile" name="firstName" placeholder="first name" /><br />
                <input type="text" id="lastName" class="mobile" name="lastName" placeholder="last name" /><br />
                <input type="email" id="email" class="mobile" name="email" placeholder="email" /><br />
                <select>
                    <option value="0">Favorite Type of Food:</option>
                    <option value="Italian">Italian</option>
                    <option value="Mexican">Mexican</option>
                    <option value="">Other</option>
                </select>
            </div>
            <div class="half">
                <input type="text" id="username" class="mobile" name="username" placeholder="username" /><br />
                <input type="password" id="password" class="mobile" name="password" placeholder="password" /><br />
                <input type="date" id="dob" name="dob" class="mobile" placeholder="date of birth" /><br />
            </div>
            <input type="submit" id="registerBtn" class="button mobile" name="registerBtn" value="register" />
        </form>
    </div>
</div>
</body>
</html>