<?php
    $dbServerHost = "127.0.0.1";
    $dbUsername = "application";
    $dbPassword = "GB<YN~2zd+Cq!vAn";
    $dbName = "Reciplease";
    $dbPort = "3306";
    $GLOBALS['db'] = new mysqli($dbServerHost, $dbUsername, $dbPassword, $dbName, $dbPort);

    function isLoggedIn() {
        if (isset($_SESSION["username"])) {
            return true;
        } else {
            return false;
        }
    }

    function register(&$fName, &$lName, &$email, &$favFood, &$username, &$password, $profilePhoto, &$dob, $dietaryRestrictions) {
        $fName = ucfirst(strtolower($fName));
        $lName = ucfirst(strtolower($lName));
        $email = strtolower($email);
        $username = strtolower($username);
        $password = password_hash($password, PASSWORD_DEFAULT);
        $dietaryRestrictionsDB = implode(", ", $dietaryRestrictions);
        
        $sql = "INSERT INTO User (UserID, FirstName, LastName, UserName, Password, Email, ProfilePicture, DOB, FavoriteFood, DietaryRestrictions, DateRegistered) VALUES(
                null,
                '$fName',
                '$lName',
                '$username',
                '$password',
                '$email',
                LOAD_FILE('$profilePhoto'),
                STR_TO_DATE('$dob', '%Y-%m-%d'),
                '$favFood',
                '$dietaryRestrictionsDB',
                null
            )";
        $result = mysqli_query($GLOBALS['db'], $sql);

            if (!$result) {

            echo("Error Description: " . mysqli_error($GLOBALS['db']));

            } else {
                header("Location:../login");
            }
    }
?>