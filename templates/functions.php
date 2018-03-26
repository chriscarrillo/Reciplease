<?php
    session_start();
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
        $dobDB = STR_TO_DATE('$dob', '%Y-%m-%d');
        
        if (!($stmt = $conn->prepare("INSERT INTO User (FirstName, LastName, UserName, Password, Email, ProfilePicture, DOB, FavoriteFood, DietaryRestrictions) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)"))) {
            echo "Prepare failed: (" . $mysqli->errno . ")" . $mysqli->error;
        }
        
        if (!$stmt->bind_param("sssssbsss", $fNameDB, $lNameDB, $usernameDB, $passwordDB, $emailDB, $profilePhoto, $dobDB, $favFood, $dietaryRestrictions)){
            echo "Binding paramaters failed:(" . $stmt->errno . ")" . $stmt->error;
        }
        
        if ($stmt->execute()) {
            echo "Execute failed: (" . $stmt->errno .")" . $stmt->error;
        }
        
        if (!$stmt) {
            echo $fNameDB . " " . $lNameDB . " " . $usernameDB . " " . $passwordDB . " " . $emailDB . " " . $dob . " " . $favFood . " " . $dietaryRestrictions . "<br />";
            echo "Error: " . mysqli_error($GLOBALS['db']);
        } else {
            header("Location:../login");
        }
        
        
//        $sql = "INSERT INTO User (UserID, FirstName, LastName, UserName, Password, Email, ProfilePicture, DOB, FavoriteFood, DietaryRestrictions)VALUES (
//                null,
//                '". $fNameDB ."',
//                '". $lNameDB ."',
//                '". $usernameDB ."',
//                '". $passwordDB ."',
//                '". $emailDB ."',
//                '". $profilePhoto ."',
//                STR_TO_DATE('$dob', '%Y-%m-%d'),
//                '". $favFood ."',
//                '". $dietaryRestrictions ."')";
//        
//        $result = mysqli_query($GLOBALS['db'], $sql);

//            if (!$result) {
//                print $fNameDB . " " . $lNameDB . " " . $usernameDB . " " . $passwordDB . " " . $emailDB . " " . $dob . " " . $favFood . " " . $dietaryRestrictions . "<br />";
//                print "Error: " . mysqli_error($GLOBALS['db']);
//            } else {
//                header("Location:../login");
//            }
        $mysqli->close();
    }
?>