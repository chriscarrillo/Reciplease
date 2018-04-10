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

    function login($username, $password) {        
        if (!($stmt = $GLOBALS['db']->prepare("SELECT UserName, Password FROM User WHERE UserName = ?"))){
            print "Prepare failed: (" . $GLOBALS['db']->errno . ")" . $GLOBALS['db']->error;
        }
        
        if (!$stmt->bind_param('s', $username)){
            print "Bind failed: (" . $stmt->errno . ")" . $stmt->error;
        }

        if (!$stmt->execute()){
            print "Execute failed: (" . $stmt->errno .")" . $stmt->error;
        }

        $userdata = $stmt->get_result();
        $row = $userdata->fetch_array(MYSQLI_ASSOC);

        $stmt->bind_result($username, $password);
        $stmt->store_result();

        if (password_verify($password, $row['Password'])){
            session_start();
            $_SESSION['username'] = $username;
            print "<script type='text/javascript'>window.top.location='..';</script>";
        } else {
            print "Login Failed: (" . $stmt->errno .")" . $stmt->error;
            exit;
        }
    }

    function register(&$fName, &$lName, &$email, $favFood, &$username, &$password, $profilePhoto, $dob, $dietaryRestrictions) {
        $fNameDB = ucfirst(strtolower($fName));
        $lNameDB = ucfirst(strtolower($lName));
        $emailDB = strtolower($email);
        $usernameDB = strtolower($username);
        $passwordDB = password_hash($password, PASSWORD_DEFAULT);
        $dobDB = date("Y-m-d", strtotime($dob));
        
        if (!($stmt = $GLOBALS['db']->prepare("INSERT INTO User (FirstName, LastName, UserName, Password, Email, ProfilePicture, DOB, FavoriteFood) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)"))) {
            print "Prepare failed: (" . $GLOBALS['db']->errno . ")" . $mysqli->error;
        }
        
        if (!$stmt->bind_param("sssssbsss", $fNameDB, $lNameDB, $usernameDB, $passwordDB, $emailDB, $profilePhoto, $dobDB, $favFood)){
            print "Binding paramaters failed:(" . $stmt->errno . ")" . $stmt->error;
        }
        
        if (!$stmt->execute()) {
            print "Execute failed: (" . $stmt->errno .")" . $stmt->error;
        }
        
        $registerStmt = "Insert into DietaryRestriction (UserId, DietaryRestriction) select UserID, $dietaryRestriction from User where Username = $usernamedb";
        
        $GLOBALS['db']->query($registerStmt);
        
        if (!$stmt) {
            print $fNameDB . " " . $lNameDB . " " . $usernameDB . " " . $passwordDB . " " . $emailDB . " " . $dob . " " . $favFood . " " . $dietaryRestrictions . "<br />";
            print "Error: " . mysqli_error($GLOBALS['db']);
        } else {
            print "<script type='text/javascript'>window.top.location='../login';</script>";
            exit;
        }
    }
?>