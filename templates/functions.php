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
    
    function addIngredient($id, $name, $quantity) {
        if (!($stmt = $GLOBALS['db']->prepare("INSERT INTO Ingredient (UserID, Quantity, IngredientName) VALUES (?, ?, ?)"))) {
            print "Prepare failed: (" . $GLOBALS['db']->errno . ")" . $mysqli->error;
        }
        if (!$stmt->bind_param("iis", $id, $quantity, $name)){
                print "Binding paramaters failed:(" . $stmt->errno . ")" . $stmt->error;
        }
        if (!$stmt->execute()) {
                print "Execute failed: (" . $stmt->errno .")" . $stmt->error;
        }
    }

    function removeIngredient($id, $name, $quantity) {
        if (!($stmt = $GLOBALS['db']->prepare("DELETE FROM Ingredient WHERE UserId = ? and Quantity = ? and IngredientName = ?"))) {
            print "Prepare failed: (" . $GLOBALS['db']->errno . ")" . $mysqli->error;
        }
        if (!$stmt->bind_param("iis", $id, $quantity, $name)){
                print "Binding paramaters failed:(" . $stmt->errno . ")" . $stmt->error;
        }
        if (!$stmt->execute()) {
                print "Execute failed: (" . $stmt->errno .")" . $stmt->error;
        }
    }
    
    function getIngredients($id) {
         if (!($stmt = $GLOBALS['db']->prepare("SELECT Quantity, IngredientName FROM Ingredient WHERE UserID = ?"))){
            print "Prepare failed: (" . $GLOBALS['db']->errno . ")" . $GLOBALS['db']->error;
        }
        
        if (!$stmt->bind_param("i", $id)){
                print "Binding paramaters failed:(" . $stmt->errno . ")" . $stmt->error;
        }
        
        if (!$stmt->execute()){
            print "Execute failed: (" . $stmt->errno .")" . $stmt->error;
        }
        
        return $stmt->get_result();
    }

    function getDietaryRestrictions($id) {
        if (!($stmt = $GLOBALS['db']->prepare("SELECT UserID, Restriction FROM DietaryRestriction WHERE UserID = ?"))){
           print "Prepare failed: (" . $GLOBALS['db']->errno . ")" . $GLOBALS['db']->error;
       }
       
       if (!$stmt->bind_param("i", $id)){
               print "Binding paramaters failed:(" . $stmt->errno . ")" . $stmt->error;
       }
       
       if (!$stmt->execute()){
           print "Execute failed: (" . $stmt->errno .")" . $stmt->error;
       }
       
       return $stmt->get_result();
   }

    function login($username, $password) {        
        if (!($stmt = $GLOBALS['db']->prepare("SELECT UserID, FirstName, LastName, UserName, Password, Email, ProfilePicture, DOB, FavoriteFood, DateRegistered FROM User WHERE UserName = ?"))){
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

        $stmt->bind_result($id, $firstName, $lastName, $username, $password, $email, $profilePicture, $dob, $favoriteFood, $dateRegistered);
        $stmt->store_result();

        if (password_verify($password, $row['Password'])){
            $_SESSION["id"] = $row["UserID"];
            $_SESSION["firstName"] = $row["FirstName"];
            $_SESSION["lastName"] = $row["LastName"];
            $_SESSION["username"] = $row["UserName"];
            $_SESSION["email"] = $row["Email"];
            $_SESSION["profilePicture"] = $row["ProfilePicture"];
            $_SESSION["dob"] = $row["DOB"];
            $_SESSION["favoriteFood"] = $row["FavoriteFood"];
            $_SESSION["dateRegistered"] = $row["DateRegistered"];
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
        
        if (!($stmt = $GLOBALS['db']->prepare("INSERT INTO User (FirstName, LastName, UserName, Password, Email, ProfilePicture, DOB, FavoriteFood) VALUES (?, ?, ?, ?, ?, ?, ?, ?)"))) {
            print "Prepare failed: (" . $GLOBALS['db']->errno . ")" . $mysqli->error;
        }
        
        if (!$stmt->bind_param("sssssbss", $fNameDB, $lNameDB, $usernameDB, $passwordDB, $emailDB, $profilePhoto, $dobDB, $favFood)){
            print "Binding paramaters failed:(" . $stmt->errno . ")" . $stmt->error;
        }
        
        if (!$stmt->execute()) {
            print "Execute failed: (" . $stmt->errno .")" . $stmt->error;
        }
        
        for ($i = 0; $i < count($dietaryRestrictions); $i++) {
            if (!($stmt = $GLOBALS['db']->prepare("INSERT INTO DietaryRestriction (UserID, Restriction) VALUES ((SELECT UserID FROM User WHERE UserName = ?), ?)"))) {
                print "Prepare failed: (" . $GLOBALS['db']->errno . ")" . $mysqli->error;
            }

            if (!$stmt->bind_param("ss", $usernameDB, $dietaryRestrictions[$i])){
                print "Binding paramaters failed:(" . $stmt->errno . ")" . $stmt->error;
            }

            if (!$stmt->execute()) {
                print "Execute failed: (" . $stmt->errno .")" . $stmt->error;
            }
        }
        
        if (!$stmt) {
            print $fNameDB . " " . $lNameDB . " " . $usernameDB . " " . $passwordDB . " " . $emailDB . " " . $dob . " " . $favFood . " " . $dietaryRestrictions . "<br />";
            print "Error: " . mysqli_error($GLOBALS['db']);
        } else {
            print "<script type='text/javascript'>window.top.location='../login';</script>";
            exit;
        }
    }

    function updateProfile() {
        
    }
?>