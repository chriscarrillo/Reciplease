<!DOCTYPE html>
<html>
<head>
    <title>Reciplease.com | Profile</title>
    <?php include "../templates/head.php" ?>
</head>
<body>
<div id="profile">
<?php
    include "../templates/header.php";  
?>
    <div id="centerBox" class="centered">
        <h1>curtis's profile</h1>
        <form action="" method="post" id="profileForm" class="form">
            <input type="text" id="firstName" name="firstName" placeholder="first name" /><br /> <!-- The placeholder should be the name in the db -->
            <input type="text" id="lastName" name="lastName" placeholder="last name" /><br /> <!-- The placeholder should be the name in the db -->
            <input type="text" id="username" name="username" placeholder="username" /><br />
            <input type="password" id="password" name="password" placeholder="password" /><br />
            <input type="email" id="email" name="email" placeholder="email" /><br />
            <input type="file" id="profilePicture" name="profilePicture" /><br />
        </form>
    </div>
</div>
</body>
</html>