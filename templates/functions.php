<?php
    $dbServerHost = "127.0.0.1";
    $dbUsername = "application";
    $dbPassword = "GB<YN~2zd+Cq!vAn";
    $dbName = "Reciplease";
    $dbPort = "3306";
    $db = new mysqli($dbServerHost, $dbUsername, $dbPassword, $dbName, $dbPort);

    function isLoggedIn() {
        if (isset($_SESSION["username"])) {
            return true;
        } else {
            return false;
        }
    }

    function register(&$fName, &$lName, &$email, $favFood, &$username, &$password, $profilePhoto, $dob, $dietaryRestrictions) {
        $fNameDB = ucfirst(strtolower($fName));
        $lNameDB = ucfirst(strtolower($lName));
        $emailDB = strtolower($email);
        $usernameDB = strtolower($username);
        $passwordDB = password_hash($password, PASSWORD_DEFAULT);
        $dateRegistered = date("Y/m/d");
        
        $sql = "INSERT INTO User VALUES (
                null,
                '". $fNameDB ."',
                '". $lNameDB ."',
                '". $usernameDB ."',
                '". $passwordDB ."',
                '". $emailDB ."',
                '". $profilePhoto ."',
                STR_TO_DATE('$dob', '%Y-%m-%d'),
                '". $favFood .",
                '". $dietaryRestrictions ."')";
        
        $result = mysqli_query($GLOBALS['db'], $sql);

            if (!$result) {
                print $fNameDB . " " . $lNameDB . " " . $usernameDB . " " . $passwordDB . " " . $emailDB . " " . $dob . " " . $favFood . " " . $dietaryRestrictions . "<br />";
                print "Error: " . mysqli_error($GLOBALS['db']);
            } else {
                header("Location:../login");
            }
    }
?>